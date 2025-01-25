<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Order;
use App\Models\Resource;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    public function dashboard()
    {
        $data['allusers'] = User::where('role_id', 2)->count();
        $data['allreviews'] = Review::count();
        $data['allorders'] = Order::count();
        $data['allcourses'] = Course::where('status', 1)->count();
        $data['allcoursecategory'] = Category::where('status', 1)->count();
        $data['totalsales'] = Order::where('status', 1)->sum('amount');
        return view('admin.dashboard', $data);
    }

    public function setting()
    {
        return view('admin.setting');
    }

    public function category()
    {
        $data['coursecatgeory'] = Category::get();
        return view('admin.category', $data);
    }

    public function courses()
    {
        $data['course'] = Course::where('status', 1)->get();
        $data['coursecatgeory'] = Category::get();
        return view('admin.course', $data);
    }

    public function addcourse()
    {
        $data['coursecatgeory'] = Category::get();
        return view('admin.addcourse', $data);
    }

    public function editcourse($id)
    {
        $data['editcourse'] = Course::where('id', '=', $id)->first();
        $data['coursecatgeory'] = Category::get();
        return view('admin.editcourse', $data);
    }

    public function lesson()
    {
        $data['lesson'] = Lesson::where('status', 1)->get();
        $data['courses'] = Course::where('status', 1)->get();
        return view('admin.lesson', $data);
    }

    public function createlesson()
    {
        $data['lesson'] = Lesson::where('status', 1)->get();
        $data['courses'] = Course::where('status', 1)->get();
        return view('admin.addlesson', $data);
    }

    public function reviews()
    {
        $data['allreview'] = Review::all();
        return view('admin.review', $data);
    }

    public function users()
    {
        $data['allusers'] = User::where('role_id', 2)->get();
        return view('admin.member', $data);
    }

    public function resources()
    {
        $data['resources'] = Resource::where('status', 1)->get();
        return view('admin.resources', $data);
    }

    public function addresources()
    {
        return view('admin.addresource');
    }

    public function orders()
    {
        $data['orders'] = Order::get();
        return view('admin.orders', $data);
    }
}
