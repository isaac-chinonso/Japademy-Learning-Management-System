<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\UserActivation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Models\Profile;
use App\Models\Referral;
use App\Models\UserScore;
use Illuminate\Support\Facades\Http;
use App\Services\AlisonService;
use Illuminate\Support\Facades\DB;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;


class AuthController extends Controller
{
    protected $alisonService;

    // Constructor injection
    public function __construct(AlisonService $alisonService)
    {
        $this->alisonService = $alisonService;  // Store it in a property
    }

    // Login Function
    public function signin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/login')
                ->withErrors($validator)
                ->withInput($request->all());
        }

        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
            $user = Auth::user();

            // Check if the account is activated
            if ($user->status === 0) {
                return redirect()->route('verify.email')->with('warning_message', 'Your account is not activated. Please verify your email.');
            }

            // Handle Alison token refresh if applicable
            try {
                if ($user->alison_token) {
                    $user->alison_token = $this->refreshAlisonToken($user->alison_token);
                    $user->save();
                }
            } catch (\Exception $e) {
                \Log::error('Failed to refresh Alison token on login', ['error' => $e->getMessage()]);
            }

            // Handle Learners
            if ($user->role_id === 2) {
                $assessmentTaken = UserScore::where('user_id', $user->id)->exists();

                if (!$assessmentTaken) {
                    return redirect()
                        ->route('pathway')
                        ->with('info', 'Please complete the assessment before proceeding.');
                }

                // Redirect to learner dashboard
                return redirect()->intended(route('learnerdashboard'));
            }

            // Handle Admins
            if ($user->role_id === 1 && $user->status === 1) {
                return redirect()->intended(route('admindashboard'));
            }
        }

        // Invalid credentials
        \Session::flash('warning_message', 'These credentials do not match our records.');
        return redirect()->back();
    }


    // Refresh Alison Token
    public function refreshAlisonToken($currentToken)
    {
        $response = Http::asForm()->post('https://alison.com/api/external/v1/refresh-token', [
            'client_id' => env('ALISON_CLIENT_ID'),
            'client_secret' => env('ALISON_CLIENT_SECRET'),
            'refresh_token' => $currentToken,
        ]);

        if ($response->successful()) {
            return $response->json()['access_token'];
        }

        throw new \Exception('Failed to refresh Alison token.');
    }


    // Obtain Access Token
    public function getAccessToken()
    {
        $response = Http::asForm()->post('https://alison.com/api/external/v1/access-token', [
            'client_id' => env('ALISON_CLIENT_ID'),
            'client_secret' => env('ALISON_CLIENT_SECRET'),
            'organization_id' => env('ALISON_ORG_ID'),
            'organization_key' => env('ALISON_ORG_KEY'),
        ]);

        if ($response->successful()) {
            return $response->json()['access_token'];
        }

        throw new \Exception('Failed to obtain access token from Alison.');
    }

    public function authenticateUserOnAlison($email)
    {
        try {
            $accessToken = $this->getAccessToken();

            // Step 1: Attempt Login
            $loginResponse = Http::withHeaders([
                'Authorization' => 'Bearer ' . $accessToken,
            ])->asForm()->post('https://alison.com/api/external/v1/login', [
                'email' => $email,
            ]);

            $loginData = $loginResponse->json();
            \Log::debug('Alison Login Response:', $loginData);

            if ($loginResponse->successful() && isset($loginData['data']['token'])) {
                $token = $loginData['data']['token'];
                \Log::debug('Login Successful: Retrieved Token', ['token' => $token]);
                return $token;
            }

            // Log Login Error
            if (isset($loginData['error'])) {
                \Log::debug('Login Error:', ['error' => $loginData['error']]);
            }

            // Step 2: Attempt Registration
            $registerResponse = Http::withHeaders([
                'Authorization' => 'Bearer ' . $accessToken,
            ])->asForm()->post('https://alison.com/api/external/v1/register', [
                'email' => $email,
                'firstname' => 'DefaultFirstName',
                'lastname' => 'DefaultLastName',
                'city' => 'DefaultCity',
                'country' => 'NG',
            ]);

            $registerData = $registerResponse->json();
            \Log::debug('Alison Register Response:', $registerData);

            // Fixing token extraction
            if ($registerResponse->successful() && isset($registerData['data']['token'])) {
                $token = $registerData['data']['token'];
                \Log::debug('Registration Successful: Retrieved Token', ['token' => $token]);
                return $token;
            }

            // Log Register Error
            if (isset($registerData['error'])) {
                \Log::debug('Register Error:', ['error' => $registerData['error']]);
            }

            throw new \Exception('Failed to retrieve a valid token from Alison API.');
        } catch (\Exception $e) {
            \Log::error('Error during Alison authentication:', ['error' => $e->getMessage()]);
            throw new \Exception('Alison authentication failed.');
        }
    }

    // Save registration data
    public function savelogin(Request $request)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required',
            'address' => 'required|max:255',
            'password' => 'required|min:8',
            'referral_code' => 'nullable|exists:users,referral_code', // Update 'ref' to 'referral_code'
        ]);

        try {
            // Generate codes and retrieve token
            $activationCode = $this->generateActivationCode();
            $referralCode = $this->generateReferralCode();
            $alisonToken = $this->authenticateUserOnAlison($request->input('email'));

            DB::transaction(function () use ($request, $activationCode, $referralCode, $alisonToken) {
                // Insert user and profile details
                $userId = DB::table('users')->insertGetId([
                    'email' => $request->input('email'),
                    'password' => Hash::make($request->input('password')),
                    'activated' => $activationCode,
                    'referral_code' => $referralCode,
                    'role_id' => 2,
                    'status' => 0,
                    'alison_token' => $alisonToken,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                DB::table('profiles')->insert([
                    'user_id' => $userId,
                    'fname' => $request->input('fname'),
                    'lname' => $request->input('lname'),
                    'phone' => $request->input('phone'),
                    'address' => $request->input('address'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                // Handle referral if present
                if ($request->filled('referral_code')) {
                    \Log::info('Referral code detected: ' . $request->input('referral_code'));
                    $this->handleReferral($request->input('referral_code'), $request->input('email'));
                }
            });


            // Send activation email
            $this->sendActivationEmail($request->input('email'), $activationCode);

            Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')]);
            \Session::flash('Success_message', 'Registration successful!');
            return redirect()->route('pathway');
        } catch (\Exception $e) {
            \Log::error('User registration failed:', ['error' => $e->getMessage()]);
            return redirect()->back()->withErrors('Registration failed: ' . $e->getMessage());
        }
    }

    // Helper methods
    private function generateActivationCode()
    {
        return strtoupper(Str::random(30));
    }

    private function generateReferralCode()
    {
        return strtoupper(uniqid());
    }

    private function handleReferral($referralCode, $referredEmail)
{
    $referrer = User::where('referral_code', $referralCode)->first();

    if ($referrer) {
        \Log::info('Referrer found: ' . $referrer->email);
        try {
            Referral::create([
                'referrer_email' => $referrer->email,
                'referred_email' => $referredEmail,
            ]);
            \Log::info('Referral record created successfully');
        } catch (\Exception $e) {
            \Log::error('Failed to save referral: ' . $e->getMessage());
        }
    } else {
        \Log::info('Referrer not found for code: ' . $referralCode);
    }
}

    

    private function sendActivationEmail($email, $activationCode)
    {

        $activationLink = url('/activate/' . $activationCode);

        Mail::to($email)->send(new UserActivation($email, $activationLink));

    }

    // Update profile function
    public function updateprofile(Request $request)
    {
        $user = Auth::user();
        // Validation
        $this->validate($request, array(
            'fname' => 'required',
            'lname' => 'required',
            'phone' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'dob' => 'required',
        ));

        $profile = Profile::where('user_id', $user->id)->first();

        $profile->user_id = $user->id;

        $profile->fname = $request->input('fname');

        $profile->lname = $request->input('lname');

        $profile->phone = $request->input('phone');

        $profile->gender = $request->input('gender');

        $profile->address = $request->input('address');

        $profile->dob = $request->input('dob');

        $profile->save();

        \Session::flash('Success_message', '✔ profile Updated Succeffully');

        return back();
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = auth()->user();

        $current_password = $user->password;
        if (Hash::check($request->current_password, $current_password)) {
            $user->fill([
                'password' => Hash::make($request->password)
            ])->save();

            return redirect()->back()->with('Success_message', 'Password Changed Successfully');;
        } else {
            return redirect()->back()->withErrors(['current_password' => 'The provided password does not match your current password.']);
        }
    }

    // Logout Function
    public function logout()
    {
        $user = Auth::user();

        Auth::logout();
        return redirect()->route('login');
    }

    public function activateuser($id)
    {

        User::where(['id' => $id])
            ->update(array('status' => 1));

        \Session::flash('Success_message', 'User Activated Successfully');

        return back();
    }

    public function deactivateuser($id)
    {

        User::where(['id' => $id])
            ->update(array('status' => 0));

        \Session::flash('Success_message', 'User Deactivated Successfully');

        return back();
    }

    public function activateAccount($code)
    {
        $user = User::where('activated', $code)->first();

        if ($user) {
            $user->status = 1;  // Activate the account
            $user->save();

            Mail::to($user->email)->send(new WelcomeMail($user));

            \Session::flash('Success_message', 'Your account has been activated.');
            return redirect()->route('login');
        } else {
            \Session::flash('error_message', 'Invalid activation code.');
            return redirect()->route('login');
        }
    }


    public function resendActivationEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user->status == 1) {
            \Session::flash('Success_message', 'Your account is already activated.');
            return redirect()->route('login');
        }

        $activationLink = url('/activate/' . $user->activated);

        try {
            Mail::to($user->email)->send(new UserActivation($user, $activationLink));

            \Session::flash('Success_message', 'A new activation link has been sent to your email.');
        } catch (\Exception $e) {
            \Log::error('Failed to send activation email', ['error' => $e->getMessage()]);
            \Session::flash('error_message', 'Failed to resend activation email. Please try again later.');
        }

        return redirect()->back();
    }
}
