<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Skill_assessment;
use App\Models\UserScore;
use Illuminate\Http\Request;

class SkillAssessmentController extends Controller
{
    public function skillassessmentquestion()
    {
        $data['allskillassessment'] = Skill_assessment::all();
        return view('admin.skill_assessment', $data);
    }

    public function addskillassessmentquestion()
    {
        return view('admin.addassessmentquestion');
    }

    public function editskillassessmentquestion($id)
    {
        $data['editskillassessmentquestion'] = Skill_assessment::where('id', '=', $id)->first();
        return view('admin.editassessmentquestion', $data);
    }

    // Save Skill Assessment Question
    public function saveSkillAssessmentQuestion(Request $request)
    {
        // Validation
        $this->validate($request, [
            'question.*' => 'required|string',
            'option1.*' => 'required|string',
            'option2.*' => 'required|string',
            'option3.*' => 'required|string',
            'option4.*' => 'required|string',
            'scorepoint1.*' => 'required|numeric',
            'scorepoint2.*' => 'required|numeric',
            'scorepoint3.*' => 'required|numeric',
            'scorepoint4.*' => 'required|numeric',
        ]);

        foreach ($request->input('question') as $index => $questionText) {
            $assessment = new Skill_assessment();
            $assessment->question = $questionText;
            $assessment->option1 = $request->option1[$index];
            $assessment->scorepoint1 = $request->scorepoint1[$index];
            $assessment->option2 = $request->option2[$index];
            $assessment->scorepoint2 = $request->scorepoint2[$index];
            $assessment->option3 = $request->option3[$index];
            $assessment->scorepoint3 = $request->scorepoint3[$index];
            $assessment->option4 = $request->option4[$index];
            $assessment->scorepoint4 = $request->scorepoint4[$index];
            $assessment->option5 = $request->option5[$index] ?? null;
            $assessment->scorepoint5 = $request->scorepoint5[$index] ?? null;
            $assessment->status = 1; // Active by default
            $assessment->save();
        }

        \Session::flash('Success_message', 'Questions added successfully');

        return back();
    }


    // Delete Skill Assessment Question
    public function deletecourse($id)
    {
        Skill_assessment::where(['id' => $id])
            ->update(array('status' => 0));

        \Session::flash('Success_message', 'Question Deleted Successfully');

        return back();
    }

    public function activatecourse($id)
    {
        // Approve Skill Assessment Question
        Skill_assessment::where(['id' => $id])
            ->update(array('status' => 1));

        \Session::flash('Success_message', 'Question Activated Successfully');

        return back();
    }

    public function deactivatecourse($id)
    {
        // Deactivate Skill Assessment Question
        Skill_assessment::where(['id' => $id])
            ->update(array('status' => 0));

        \Session::flash('Success_message', 'Question Deactivated Successfully');

        return back();
    }

    public function assessmentscore()
    {
        $data['usersassesssmentcore'] = UserScore::with('user.profile')->get();
        return view('admin.user_assessment_response', $data);
    }
}
