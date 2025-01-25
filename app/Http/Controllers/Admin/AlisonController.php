<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\AlisonService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class AlisonController extends Controller
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
            $courses = $this->alisonService->getAllCourses();
            return view('admin.alisoncourses', compact('courses'));
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Display a specific course with details.
     */
    public function viewCourse($slug)
    {
        try {
            $course = $this->alisonService->getCourseDetails($slug);
            return view('admin.coursedetails', compact('course'));
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

   // Start a Course
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
