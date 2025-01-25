<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Registeredcourse;
use App\Models\Resource;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserPageController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        $profile = $user->profile->first();

        $profileIncomplete = !$profile->phone || !$profile->dob || !$profile->gender || !$profile->address;

        if ($profileIncomplete) {
            session()->flash('profile_incomplete', 'Kindly Update your Profile to enjoy Unlimited Access.');
        }

        $data['allcourses'] = Course::where('status', 1)->where('level', $profile->level)->count();
        $data['activecourses'] = Registeredcourse::where('user_id', $user->id)->count();

        // Count total lessons across all registered courses for the user
        $data['total_lessons'] = Lesson::whereHas('course', function ($query) use ($user) {
            $query->whereHas('registeredCourses', function ($query) use ($user) {
                $query->where('user_id', $user->id);
            });
        })->count();

        return view('user.dashboard', $data);
    }

    public function setting()
    {
        return view('user.setting');
    }

    public function resources()
    {
        $data['resources'] = Resource::where('status', 1)->get();
        return view('user.resources', $data);
    }

    public function courses()
    {
        $user = Auth::user();
        $profile = $user->profile->first(); 
    
        // Check if any essential profile fields are missing, including the 'level' field
        $profileIncomplete = !$profile || !$profile->phone || !$profile->dob || !$profile->gender || !$profile->address || !$profile->level;
    
        if ($profileIncomplete) {
            \Session::flash('warning_message', 'Kindly complete your profile to enjoy unlimited access');
            return redirect()->route('learnersettings'); // Redirect to settings page
        }
    
        $data['courses'] = Course::where('status', 1)->where('level', $profile->level)->get();
        return view('user.courses', $data);
    }    

    public function review()
    {
        $user = Auth::user();
        $data['reviews'] = Review::where('user_id', $user->id)->get();
        return view('user.support', $data);
    }

}
