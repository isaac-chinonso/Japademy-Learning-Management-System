<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Category;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Order;
use App\Models\Referral;
use App\Models\Resource;
use App\Models\Review;
use App\Models\Skill_assessment;
use App\Models\User;
use App\Models\UserScore;

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
        $data['allblogpost'] = Blog::where('status', '=', 1)->count();
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
        $data['course'] = Course::all();
        $data['coursecatgeory'] = Category::get();
        return view('admin.course', $data);
    }

    public function addcourse()
    {
        $data['coursecatgeory'] = Category::get();
        return view('admin.addcourse', $data);
    }

    public function editcourse($slug)
    {
        $data['editcourse'] = Course::where('slug', '=', $slug)->first();
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
        $data['allusers'] = User::withCount([
            'referrals' => function ($query) {
                $query->whereNotNull('referred_email'); // Optional condition for counting
            }
        ])->where('role_id', 2)->get();
    
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

    public function blog()
    {
        $data['blogpost'] = Blog::where('status', '=', 1)->get();
        return view('admin.blogpost', $data);
    }

    public function addblog()
    {
        $data['categories'] = BlogCategory::get();
        return view('admin.add_blog', $data);
    }

    public function editblog($slug)
    {
        $data['blogdetails'] = Blog::where('slug', '=', $slug)->first();
        $data['blogpost'] = Blog::where('status', '=', 1)->inRandomOrder()->simplePaginate(9);
        $data['categories'] = BlogCategory::get();
        return view('admin.editblog', $data);
    }

    public function affiliate()
    {
        $data['allrefferal'] = Referral::all();
        return view('admin.affiliate', $data);
    }


    public function blogdetails($slug)
    {
        $data['blogdetails'] = Blog::where('slug', '=', $slug)->first();
        $data['blogpost'] = Blog::where('status', '=', 1)->inRandomOrder()->simplePaginate(9);
        $data['categories'] = BlogCategory::get();
        return view('admin.blogdetails', $data);
    }

    public function blogcategory()
    {
        $data['categories'] = BlogCategory::get();
        return view('admin.blog_category', $data);
    }
}
