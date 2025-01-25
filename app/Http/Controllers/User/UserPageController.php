<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Profile;
use App\Models\Quiz;
use App\Models\QuizScore;
use App\Models\Referral;
use App\Models\Registeredcourse;
use App\Models\Resource;
use App\Models\Review;
use App\Models\Skill_assessment;
use App\Models\UserScore;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserPageController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();

        // Fetch user's profile to get their level
        $profile = $user->profile()->first();
        $userLevel = $profile ? $profile->level : null;

        // Get all courses count
        $data['allcourses'] = Course::where('status', 1)->count();

        // Get count of courses based on user's level
        if ($userLevel) {
            $data['activecourses'] = Course::where('level', $userLevel)
                ->where('status', 1)
                ->count();
        } else {
            $data['activecourses'] = 0;
        }

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

    public function categories()
    {
        $user = Auth::user();

        // Fetch the user's profile to get their level
        $profile = $user->profile()->first();
        $userLevel = $profile ? $profile->level : null;

        // Get categories with the count of courses filtered by the user's level
        $categories = Category::where('status', 1)
            ->withCount(['course' => function ($query) use ($userLevel) {
                // Only count courses that match the user's level
                if ($userLevel) {
                    $query->where('level', $userLevel);
                }
            }])
            ->get();

        $data['Categories'] = $categories;

        return view('user.categories', $data);
    }

    public function generalcourse($id)
    {
        $user = Auth::user();

        // Fetch the user's profile to get their level
        $profile = $user->profile()->first();
        $userLevel = $profile ? $profile->level : null;

        // Get courses for the selected category
        $query = Course::where('status', 1)->where('category_id', $id);

        // Filter by level if user level is available
        if ($userLevel) {
            $query->where('level', $userLevel);
        }

        // Get the courses for the selected category
        $data['recommendedcourses'] = $query->get();

        return view('user.courses', $data);
    }



    public function techcourses()
    {
        $user = Auth::user();

        // Fetch the user's profile to get their level
        $profile = $user->profile()->first();
        $userLevel = $profile ? $profile->level : null;

        // Default recommended courses based on category, or filter by level if available
        $query = Course::where('status', 1)->where('category_id', 1);

        // Filter by level if user level is available
        if ($userLevel) {
            $query->where('level', $userLevel);
        }

        // Get the recommended courses
        $data['techcourses'] = $query->get();

        return view('user.techcourses', $data);
    }

    public function nursingcourses()
    {
        $user = Auth::user();

        // Fetch the user's profile to get their level
        $profile = $user->profile()->first();
        $userLevel = $profile ? $profile->level : null;

        // Default recommended courses based on category, or filter by level if available
        $query = Course::where('status', 1)->where('category_id', 2);

        // Filter by level if user level is available
        if ($userLevel) {
            $query->where('level', $userLevel);
        }

        // Get the recommended courses
        $data['nursingcourses'] = $query->get();

        return view('user.nursingcourses', $data);
    }


    public function coursedetails($slug)
    {
        $data['coursedetails'] = Course::where('slug', '=', $slug)->first();
        return view('user.coursedetails', $data);
    }


    public function review()
    {
        $user = Auth::user();
        $data['reviews'] = Review::where('user_id', $user->id)->get();
        return view('user.support', $data);
    }

    public function affiliate()
    {
        $user = Auth::user();
        $data['referral_count'] = Referral::where('referrer_email', $user->email)->count();
        return view('user.affilliate', $data);
    }

    public function skillassessment()
    {
        return view('frontend.skill_assessment');
    }

    public function assessment()
    {
        // Check if the user has already taken the assessment
        $existingScore = UserScore::where('user_id', Auth::id())->exists();

        if ($existingScore) {
            // Redirect to the result page if the user has already taken the assessment
            \Session::flash('Success_message', '✔ You have already completed the assessment. Here is your result.');
            return redirect()->route('assessment.result');
        }

        // Fetch questions to display in the assessment form
        $questions = Skill_assessment::where('status', 1)->get();

        // Render the assessment page
        return view('user.assessment', compact('questions'));
    }

    public function showResult()
    {
        // Fetch the user's most recent score and level from the database
        $user = Auth::user();
        $profile = Profile::where('user_id', $user->id)->first();
        $score = UserScore::where('user_id', $user->id)->latest()->first();
        

        if (!$profile || !$profile->level || !$score) {
            // If no level or score is found, ask the user to take the assessment
            return redirect()->route('learnerassessment')->with('error', 'No results found. Please take the assessment.');
        }

        $level = $profile->level;

        // Return the result view with the user's score and level
        return view('user.result', [
            'score' => $score,
            'level' => $level,
        ]);
    }

    public function quiz()
    {
        return view('frontend.quiz_landing');
    }

    public function startquiz()
    {
        // Fetch questions to display in the quiz form
        $questions = Quiz::where('status', 1)->get();

        // Render the quiz page
        return view('user.quiz', compact('questions'));
    }



    public function showQuizResult()
    {
        // Fetch the user's most recent score and level from the database
        $user = Auth::user();
        $score = QuizScore::where('user_id', $user->id)->latest()->first();

        // Return the result view with the user's score and level
        return view('user.quizresult', [
            'score' => $score,
        ]);
    }
}
