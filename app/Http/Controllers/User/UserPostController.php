<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Review;
use App\Models\Scholarship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserPostController extends Controller
{
    // Save Scholarship Application
    public function savescholarship(Request $request)
    {
        // Validation
        $this->validate($request, [
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|email|unique:scholarships,email',
            'whatsappnum' => 'required|string|max:15',
            'country_of_residence' => 'required|string',
            'highest_education' => 'required|string',
            'current_profession' => 'required|string',
            'professional_experience' => 'required|string',
            'specialty' => 'required|string',
            'motivation' => 'nullable|string',
            'tech_skills_impact' => 'nullable|string',
            'career_goals' => 'nullable|string',
            'scholarship_reason' => 'nullable|string',
            'idcard' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'resume' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'education_verification' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        // File uploads
        $idcardPath = null;
        if ($request->hasFile('idcard')) {
            $idcard = $request['idcard'];
            $idcardName = time() . '_' . $idcard->getClientOriginalName();
            $idcardPath = public_path('upload/idcards/');
            $idcard->move($idcardPath, $idcardName);
        }

        $resumePath = null;
        if ($request->hasFile('resume')) {
            $resume = $request['resume'];
            $resumeName = time() . '_' . $resume->getClientOriginalName();
            $resumePath = public_path('upload/resumes/');
            $resume->move($resumePath, $resumeName);
        }

        $educationVerificationPath = null;
        if ($request->hasFile('education_verification')) {
            $educationVerification = $request['education_verification'];
            $educationVerificationName = time() . '_' . $educationVerification->getClientOriginalName();
            $educationVerificationPath = public_path('upload/education_docs/');
            $educationVerification->move($educationVerificationPath, $educationVerificationName);
        }

        // Save Record into Scholarship DB
        $application = new Scholarship();
        $application->fname = $request->input('fname');
        $application->lname = $request->input('lname');
        $application->email = $request->input('email');
        $application->whatsappnum = $request->input('whatsappnum');
        $application->country_of_residence = $request->input('country_of_residence');
        $application->highest_education = $request->input('highest_education');
        $application->current_profession = $request->input('current_profession');
        $application->professional_experience = $request->input('professional_experience');
        $application->specialty = $request->input('specialty');
        $application->motivation = $request->input('motivation');
        $application->tech_skills_impact = $request->input('tech_skills_impact');
        $application->career_goals = $request->input('career_goals');
        $application->scholarship_reason = $request->input('scholarship_reason');
        $application->idcard = $idcardPath ? ('upload/idcards/' . $idcardName) : null;
        $application->resume = $resumePath ? ('upload/resumes/' . $resumeName) : null;
        $application->education_verification = $educationVerificationPath ? ('upload/education_docs/' . $educationVerificationName) : null;
        $application->save();

        // Flash Success Message
        \Session::flash('Success_message', 'Scholarship application submitted successfully!');

        return redirect()->route('learnerdashboard');
    }


     // Save Review
     public function saveticket(Request $request)
     {
         // Validation
         $this->validate($request, [
             'subject' => 'required',
             'comment' => 'required',
         ]);
 
         $user = Auth::user();
         // Save Record into Review DB
         $review = new Review();
         $review->user_id = $user->id;
         $review->subject = $request->input('subject');
         $review->comment = $request->input('comment');
         $review->status = 0;
         $review->save();
 
         \Session::flash('Success_message', 'Ticket Submitted Successfully');
 
         return back();
     }
}
