<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class AlisonService
{
    protected $baseUrl;
    protected $clientId;
    protected $clientSecret;
    protected $orgId;
    protected $orgKey;

    public function __construct()
    {
        $this->baseUrl = rtrim(env('ALISON_API_BASE_URL'), '/');
        $this->clientId = env('ALISON_CLIENT_ID');
        $this->clientSecret = env('ALISON_CLIENT_SECRET');
        $this->orgId = env('ALISON_ORG_ID');
        $this->orgKey = env('ALISON_ORG_KEY');

        if (!$this->baseUrl || !$this->clientId || !$this->clientSecret) {
            \Log::error('Missing Alison API configuration in .env');
            throw new \Exception('Alison API configuration is incomplete.');
        }
    }

    // Get Access Token with Cache
    public function getAccessToken()
    {
        if (Cache::has('alison_access_token')) {
            return Cache::get('alison_access_token');
        }

        $response = Http::retry(3, 1000)
            ->timeout(60)
            ->asForm()
            ->post('https://alison.com/api/external/v1/access-token', [
                'client_id' => $this->clientId,
                'client_secret' => $this->clientSecret,
                'organization_id' => $this->orgId,
                'organization_key' => $this->orgKey,
            ]);

        if ($response->successful()) {
            $data = $response->json();
            $expiresIn = $data['expires_in'] ?? 3600; // Default 1 hour
            $token = $data['access_token'];

            Cache::put('alison_access_token', $token, now()->addSeconds($expiresIn - 60));
            \Log::info('Successfully obtained Alison access token.', ['token' => $token]);

            return $token;
        }

        \Log::error('Failed to obtain Alison access token.', [
            'status' => $response->status(),
            'response' => $response->json(),
        ]);

        throw new \Exception('Failed to get Alison access token.');
    }

    // Validate Alison Token
    public function validateAlisonToken($token)
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->get("{$this->baseUrl}/validate-token");

        return $response->successful();
    }

    // Refresh Token for Alison API
    public function refreshAlisonToken($currentToken)
    {
        $response = Http::asForm()
            ->timeout(60)
            ->post('https://alison.com/api/external/v1/refresh-token', [
                'client_id' => $this->clientId,
                'client_secret' => $this->clientSecret,
                'refresh_token' => $currentToken,
            ]);

        \Log::info('Alison refresh token response.', ['response' => $response->json()]);

        if ($response->successful()) {
            return $response->json()['access_token'];
        }

        if ($response->json()['error'] == 'invalid_grant' || $response->json()['message'] == 'The refresh token is invalid.') {
            $user = Auth::user();

            if ($user) {
                \Log::info('Refresh token invalid, re-authenticating user.');
                return $this->authenticateUserOnAlison($user->email);
            }

            throw new \Exception('User is not authenticated, cannot refresh token.');
        }

        throw new \Exception('Failed to refresh Alison token. Response: ' . $response->json()['message'] ?? 'Unknown error');
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
    

    // Redirect User to Alison Course
    public function redirectToAlisonCourse($email, $courseSlug = null)
    {
        $token = $this->authenticateUserOnAlison($email);
        $url = "https://alison.com/login/external?token={$token}";

        if ($courseSlug) {
            $url .= "&course={$courseSlug}";
        }

        \Log::info("Redirect URL: {$url}");

        return $url;
    }

    // Get All Courses
    public function getAllCourses()
    {
        $accessToken = $this->getAccessToken();

        $response = Http::withHeaders([
            'Authorization' => "Bearer {$accessToken}",
        ])->timeout(60)->get("{$this->baseUrl}/courses");

        if ($response->successful()) {
            return $response->json();
        }

        \Log::error('Failed to fetch courses from Alison.', ['response' => $response->json()]);
        throw new \Exception('Failed to fetch courses from Alison.');
    }

    // Get Course Details
    public function getCourseDetails($courseSlug)
    {
        $accessToken = $this->getAccessToken();

        $response = Http::withHeaders([
            'Authorization' => "Bearer {$accessToken}",
        ])->timeout(60)->get("{$this->baseUrl}/courses/{$courseSlug}");

        if ($response->successful()) {
            return $response->json();
        }

        \Log::error('Failed to fetch course details.', ['response' => $response->json()]);
        throw new \Exception('Failed to fetch course details.');
    }
}
