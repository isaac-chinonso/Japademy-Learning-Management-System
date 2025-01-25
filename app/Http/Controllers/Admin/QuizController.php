<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Quiz;
use App\Models\QuizScore;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function quizquestion()
    {
        $data['allquiz'] = Quiz::all();
        return view('admin.quiz', $data);
    }

    public function addquizquestion()
    {
        return view('admin.add_quiz_question');
    }

    public function editquizquestion($id)
    {
        $data['editquizquestion'] = Quiz::where('id', '=', $id)->first();
        return view('admin.editquizquestion', $data);
    }

    // Save Quiz Question
    public function saveQuizQuestion(Request $request)
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
            $assessment = new Quiz();
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


    // Delete Quiz Question
    public function deletecourse($id)
    {
        Quiz::where(['id' => $id])
            ->update(array('status' => 0));

        \Session::flash('Success_message', 'Question Deleted Successfully');

        return back();
    }

    public function activatecourse($id)
    {
        // Approve Quiz Question
        Quiz::where(['id' => $id])
            ->update(array('status' => 1));

        \Session::flash('Success_message', 'Question Activated Successfully');

        return back();
    }

    public function deactivatecourse($id)
    {
        // Deactivate Quiz Question
        Quiz::where(['id' => $id])
            ->update(array('status' => 0));

        \Session::flash('Success_message', 'Question Deactivated Successfully');

        return back();
    }

    public function quizscore()
    {
        $data['usersquizcore'] = QuizScore::with('user.profile')->get();
        return view('admin.user_quiz_result', $data);
    }
}
