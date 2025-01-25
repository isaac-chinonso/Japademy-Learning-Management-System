<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\AlisonService;
use Illuminate\Support\Facades\Auth;

class UserAlisonController extends Controller
{
    protected $alisonService;

    public function __construct(AlisonService $alisonService)
    {
        $this->alisonService = $alisonService;
    }

    /**
     * Display all courses.
     */
    public function listCourses()
    {
        try {
            // Fetch all courses using the newly created method in AlisonService
            $courses = $this->alisonService->getAllCourses();
            return view('user.courses', compact('courses')); // Pass courses to the view
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500); // Return error message in case of failure
        }
    }


    /**
     * Display a specific course with details.
     */

    public function viewCourse($slug)
    {
        try {
            // Fetch course details using the course slug
            $course = $this->alisonService->getCourseDetails($slug);
            return view('user.coursedetails', compact('course'));
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Start a course.
     */
    public function startCourse($courseSlug)
    {
        try {
            $user = Auth::user();
 
            // Check if the token is valid
            if (!$this->alisonService->validateAlisonToken($user->alison_token)) {
                // If the token is invalid, refresh it
                $user->alison_token = $this->alisonService->refreshAlisonToken($user->alison_token);
                $user->save();
            }
 
            // Redirect the user to the Alison course
            $redirectUrl = $this->alisonService->redirectToAlisonCourse($user->email, $courseSlug);
            return redirect()->away($redirectUrl); // Use `redirect()->away` for external URLs
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
