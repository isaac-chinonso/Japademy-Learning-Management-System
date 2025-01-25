<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Resource;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminPostController extends Controller
{
    // Save Course Category
    public function savecoursecategory(Request $request)
    {
        // Validation
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
        ]);

        // Save Record into Course Category DB
        $coverimage = $request['coverimage'];
        $filename = $coverimage->getClientOriginalName();
        $destination = public_path('upload/');
        $coverimage->move($destination, $filename);

        // Save Record into Course Category DB
        $category = new Category();
        $category->name = $request->input('name');
        $category->coverimage = $filename;
        $category->description = $request->input('description');
        $category->status = 1;
        $category->save();

        \Session::flash('Success_message', 'You Have Successfully Added a Category');

        return back();
    }

    // Update Course Category function
    public function updatecoursecategory(Request $request, $id)
    {
        $category = Category::find($id);
        // Validation
        $this->validate($request, array(
            'name' => 'required',
            'description' => 'required',
        ));

        $category = Category::find($id);

        $category->name = $request->input('name');
        $category->description = $request->input('description');

        if ($request->file != '') {
            $path = public_path() . '/upload/';

            //code for remove old file
            if ($category->coverimage != ''  && $category->coverimage != null) {
                $file_old = $path . $category->coverimage;
                unlink($file_old);
            }

            //upload new file
            $coverimage = $request->coverimage;
            $filename = $coverimage->getClientOriginalName();
            $coverimage->move($path, $filename);

            //for update in table
            $category->update(['coverimage' => $filename]);
        }

        $category->save();

        \Session::flash('Success_message', '✔ Category Updated Succeffully');

        return back();
    }

    public function deletecoursecategory($id)
    {
        // Delete Course Category
        $category = Category::where('id', $id)->first();
        $file_path = public_path() . '/upload/' . $category->coverimage;
        unlink($file_path);
        $category->delete();

        \Session::flash('Success_message', '✔ You Have Successfully Deleted Category');

        return back();
    }

    // Save Course
    public function savecourse(Request $request)
    {
        // Validation
        $this->validate($request, [
            'category_id' => 'required',
            'title' => 'required',
            'amount' => 'required',
            'duration' => 'required',
            'level' => 'required',
            'requirement' => 'required',
            'description' => 'required',
        ]);

        $slug = Str::slug($request->title);
        $bslug = Course::where('slug', $slug)->first();
        //check if slug exists
        if ($bslug) {
            $slug = $slug . '-copy';
        }


        // Save Record into Course DB
        $coverimage = $request['coverimage'];
        $filename = $coverimage->getClientOriginalName();
        $destination = public_path('upload/');
        $coverimage->move($destination, $filename);

        // Save Record into Course DB
        $course = new Course();
        $course->category_id = $request->input('category_id');
        $course->title = $request->input('title');
        $course->amount = $request->input('amount');
        $course->duration = $request->input('duration');
        $course->level = $request->input('level');
        $course->requirement = $request->input('requirement');
        $course->coverimage = $filename;
        $course->description = $request->input('description');
        $course->slug = $slug;
        $course->status = 1;
        $course->save();

        \Session::flash('Success_message', 'Course Added Successfully');

        return back();
    }

    // Delete Course
    public function deletecourse($id)
    {
        $course = Course::where('id', $id)->first();
        $file_path = public_path() . '/upload/' . $course->coverimage;
        unlink($file_path);
        $course->delete();

        \Session::flash('Success_message', 'Course Deleted Successfully');

        return back();
    }

    public function activatecourse($id)
    {
        // Approve Course
        Course::where(['id' => $id])
            ->update(array('status' => 1));

        \Session::flash('Success_message', 'Course Activated Successfully');

        return back();
    }

    public function deactivatecourse($id)
    {
        // Approve Course
        Course::where(['id' => $id])
            ->update(array('status' => 0));

        \Session::flash('Success_message', 'Course Deactivated Successfully');

        return back();
    }


    // Update Course function
    public function updatecourse(Request $request, $slug)
    {
        $course = Course::where('slug', $slug)->first();
        // Validation
        $this->validate($request, array(
           'category_id' => 'required',
            'title' => 'required',
            'amount' => 'required',
            'duration' => 'required',
            'level' => 'required',
            'requirement' => 'required',
            'description' => 'required',
        ));

        $course = Course::where('slug', $slug)->first();
        $course->category_id = $request->input('category_id');
        $course->title = $request->input('title');
        $course->amount = $request->input('amount');
        $course->duration = $request->input('duration');
        $course->level = $request->input('level');
        $course->requirement = $request->input('requirement');
        $course->description = $request->input('description');

        if ($request->file != '') {
            $path = public_path() . '/upload/';

            //code for remove old file
            if ($course->coverimage != ''  && $course->coverimage != null) {
                $file_old = $path . $course->coverimage;
                unlink($file_old);
            }

            //upload new file
            $coverimage = $request->coverimage;
            $filename = $coverimage->getClientOriginalName();
            $coverimage->move($path, $filename);

            //for update in table
            $course->update(['coverimage' => $filename]);
        }

        $course->save();

        \Session::flash('Success_message', '✔ Course Updated Succeffully');

        return back();
    }

    // Save Resource
    public function saveresources(Request $request)
    {
        // Validation
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'resourceurl' => 'required',
        ]);

        $slug = Str::slug($request->title);
        $bslug = Resource::where('slug', $slug)->first();
        //check if slug exists
        if ($bslug) {
            $slug = $slug . '-copy';
        }


        // Save Record into Resource DB
        $coverimage = $request['coverimage'];
        $filename = $coverimage->getClientOriginalName();
        $destination = public_path('upload/');
        $coverimage->move($destination, $filename);

        // Save Record into Resource DB
        $resource = new Resource();
        $resource->title = $request->input('title');
        $resource->coverimage = $filename;
        $resource->description = $request->input('description');
        $resource->resourceurl = $request->input('resourceurl');
        $resource->slug = $slug;
        $resource->status = 1;
        $resource->save();

        \Session::flash('Success_message', 'Resource Added Successfully');

        return back();
    }

    // Delete Resource
    public function deleteresource($id)
    {
        Resource::where(['id' => $id])
            ->update(array('status' => 0));

        \Session::flash('Success_message', 'Resource Deleted Successfully');

        return back();
    }

    public function deletereview($id)
    {
        // Delete Review
        $review = Review::where('id', $id)->first();
        $review->delete();

        \Session::flash('Success_message', '✔ Review Deleted Successfully');

        return back();
    }

    public function approvereview($id)
    {
        // Approve Review
        Review::where(['id' => $id])
            ->update(array('status' => 1));

        \Session::flash('Success_message', 'Review Approved Successfully');

        return back();
    }
}
