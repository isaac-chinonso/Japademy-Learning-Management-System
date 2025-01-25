<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index ()
    {
        return view('frontend.index');
    }

    public function contact ()
    {
        return view('frontend.contact');
    }

    public function login()
    {
        return view('frontend.login');
    }

    public function register ()
    {
        return view('frontend.register');
    }

    public function pathway ()
    {
        return view('frontend.pathway');
    }

    public function choosepathway ()
    {
        return view('frontend.pathway_selection');
    }

    public function scholarship ()
    {
        return view('frontend.scholarship');
    }
}
