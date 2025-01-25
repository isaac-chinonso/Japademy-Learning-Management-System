<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    // Save Blog Category
    public function saveblogcategory(Request $request)
    {
        // Validation
        $this->validate($request, [
            'name' => 'required',
        ]);

        // Save Record into Blog Category DB
        $category = new BlogCategory();
        $category->name = $request->input('name');
        $category->status = 1;
        $category->save();

        \Session::flash('Success_message', 'Blog Category Added Successfully');

        return back();
    }

    // Update Category function
    public function updatecategory(Request $request, $id)
    {
        $category = BlogCategory::find($id);
        // Validation
        $this->validate($request, array(
            'name' => 'required',
        ));

        $category = BlogCategory::find($id);

        $category->name = $request->input('name');

        $category->save();

        \Session::flash('Success_message', '✔ Category Updated Succeffully');

        return back();
    }

    public function deletecategory($id)
    {
        // Delete Blog Category
        $category = BlogCategory::where('id', $id)->first();
        $category->delete();

        \Session::flash('Success_message', '✔ You Have Successfully Deleted Category');

        return back();
    }

    public function saveblog(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'category_id' => 'required',
            'short_desc' => 'required',
            'long_desc' => 'required',
            'blog_image' => 'mimes:jpeg,jpg,png|required|max:10000',
        ]);

        $slug = Str::slug($request->title);
        $bslug = Blog::where('slug', $slug)->first();
        //check if slug exists
        if ($bslug) {
            $slug = $slug . '-copy';
        }

        $blog = new Blog;
        $blogImg = null;
        if ($request->hasFile('blog_image')) {
            $image = $request->file('blog_image');
            $filename  = rand(11111, 99999) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('blog/'), $filename);
            $blogImg = 'blog/' . $filename;
        }

        $blog->title = $request->title;
        $blog->category_id = $request->category_id;
        $blog->slug = $slug;
        $blog->short_desc = $request->short_desc;
        $blog->long_desc = $request->long_desc;
        $blog->blog_image = $blogImg;
        $blog->status = 1;
        $blog->save();

        \Session::flash('Success_message', 'Blog Created Successfully');

        return redirect()->route('blog');
    }

    // Update blog
    public function updateBlog(Request $request, $slug)
    {

        $blog = Blog::find($slug);
        $this->validate($request, array(
            'title' => 'required',
            'category_id' => 'required',
            'short_desc' => 'required',
            'long_desc' => 'required',
            'blog_image' => 'mimes:jpeg,jpg,png|nullable|max:10000',
        ));

        if ($request->hasFile('blog_image')) {
            $image = $request->file('blog_image');
            $filename  = rand(11111, 99999) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/'), $filename);
            $blogImg = 'uploads/' . $filename;
            $blog->blog_image = $blogImg;
        }

        $blog = Blog::find($slug);

        $blog->title = $request->title;
        $blog->category_id = $request->category_id;
        $blog->short_desc = $request->short_desc;
        $blog->long_desc = $request->long_desc;
        $blog->save();

        \Session::flash('Success_message', 'Blog Update Successfully');

        return redirect()->route('blog');
    }

    // Delete blog 
    public function deleteBlog($id)
    {
        $blog = Blog::find($id);
        if (empty($blog))
            return redirect('/');

        $blog->delete();

        \Session::flash('Success_message', 'Blog Deleted Successfully');

        return redirect()->route('blog');
    }
}
