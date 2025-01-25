<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\UserScore;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function index()
    {
        $data['blogpost'] = Blog::where('status', '=', 1)->inRandomOrder()->simplePaginate(3);
        return view('frontend.index', $data);
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function login()
    {
        return view('frontend.login');
    }

    public function register()
    {
        return view('frontend.register');
    }

    public function verifyemail()
    {
        return view('frontend.verify-email');
    }

    public function pathway()
    {
        return view('frontend.pathway');
    }

    public function choosepathway()
    {
        return view('frontend.pathway_selection');
    }

    public function scholarship()
    {
        // Check if the user has completed the assessment
        $scoreExists = UserScore::where('user_id', Auth::id())->exists();

        if (!$scoreExists) {
            // Redirect to the assessment page if the user has not completed the assessment
            return redirect()->route('learnerskillassessment')->with('error', 'You need to complete the assessment before accessing the scholarship page.');
        }

        // Render the scholarship page
        return view('frontend.scholarship');
    }


    public function resetpassword()
    {
        return view('frontend.reset_password');
    }

    public function blog()
    {
        $data['blogpost'] = Blog::where('status', '=', 1)->inRandomOrder()->simplePaginate(9);
        return view('frontend.blog', $data);
    }

    public function blogdetails($slug)
    {
        $data['blogdetails'] = Blog::where('slug', '=', $slug)->first();
        $data['blogpost'] = Blog::where('status', '=', 1)->inRandomOrder()->simplePaginate(9);
        $data['categories'] = BlogCategory::get();
        return view('frontend.blogdetails', $data);
    }
}
