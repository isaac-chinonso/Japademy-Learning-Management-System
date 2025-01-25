<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Profile;

class AuthController extends Controller
{

    // Login Function
    public function signin(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect('/login')
                ->withErrors($validator)
                ->withInput($request->all());
        }

        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password'], 'role_id' => '1', 'status' => '1'])) {

            return redirect()->intended(route('admindashboard'));
        }

        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password'], 'role_id' => '2'])) {

            return redirect()->intended(route('learnerdashboard'));
        }
        \Session::flash('warning_message', 'These credentials do not match our records.');

        return redirect()->back();
    }

    //Save Users Function
    public function savelogin(Request $request)
    {
        // Validation
        $this->validate($request, [
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'password' => 'required|min:4',
        ]);

        // Save Record into user DB
        $user = new User();
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->role_id = 2;
        $user->status = 1;

        if (User::where('email', '=', $user->email)->exists()) {
            return redirect()->back()->with('warning_message', 'User Already Exist');
        } else {
            $user->save();
        }

        // Save Record into picture DB
        $profile = new Profile();
        $profile->user_id = $user->id;
        $profile->fname = $request->input('fname');
        $profile->lname = $request->input('lname');
        $profile->phone = $request->input('phone');
        $profile->address = $request->input('address');
        $profile->save();

        Auth::login($user);

        $user = Auth::user();

        \Session::flash('Success_message', 'You have successfully registered');

        return redirect()->route('pathway');
    }

    // Update profile function
    public function updateprofile(Request $request)
    {
        $user = Auth::user();
        $profile = Profile::find($user->id);
        // Validation
        $this->validate($request, array(
            'fname' => 'required',
            'lname' => 'required',
            'phone' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'level' => 'required',
            'dob' => 'required',
        ));


        $user = Auth::user();
        $profile = Profile::find($user->id);

        $profile->id = $user->id;

        $profile->fname = $request->input('fname');

        $profile->lname = $request->input('lname');

        $profile->phone = $request->input('phone');

        $profile->gender = $request->input('gender');

        $profile->address = $request->input('address');

        $profile->level = $request->input('level');

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
}
