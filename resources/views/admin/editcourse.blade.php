@extends('layout.app-admin2')
@section('title')
Edit Course || JapaDemy
@endsection
@section('content')

<div class="dashboard-body">

    <div class="breadcrumb-with-buttons mb-24">
        <!-- Breadcrumb Start -->
        <div class="breadcrumb mb-24">
            <ul class="flex-align gap-4">
                <li><a href="{{ url('/admin/dashboard') }}" class="text-gray-200 fw-normal text-15 hover-text-main-600">Home</a>
                </li>
                <li> <span class="text-gray-500 fw-normal d-flex"><i class="ph ph-caret-right"></i></span> </li>
                <li><span class="text-main-600 fw-normal text-15">Edit Courses</span></li>
            </ul>
        </div>
        <!-- Breadcrumb End -->
        <div align="right">
            <button type="button" class="bg-main-50 py-2 px-14 rounded-pill hover-bg-main-600">
                <a href="{{ url('/admin/courses') }}" class="text-white">
                    Go back to Course
                </a>
            </button>
        </div><br>
    </div>

    @include('include.success')
    @include('include.warning')
    @include('include.error')
    <div class="card overflow-hidden">
        <div class="card-body p-0">
            <form method="POST" action="{{ route('updatecourse', $editcourse->slug) }}" enctype="multipart/form-data" style="padding:40px;">

                @csrf
                <div class="row gy-20">
                    <div class="col-md-12 col-sm-12">
                        <div class="row g-20">
                            <div class="col-sm-6">
                                <label class="form-label">Course Category <span class="text-danger">*</span></label>
                                <select class="form-control" name="category_id">
                                    <option selected value="{{ $editcourse->category->id }}">{{ $editcourse->category->name }}</option>
                                    <option disabled>Select another Category</option>
                                    @foreach($coursecatgeory as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label">Course Title <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="title" value="{{ $editcourse->title }}">
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label">Course Amount <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="amount" value="{{ $editcourse->amount }}">
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label">Course level <span class="text-danger">*</span></label>
                                <select class="form-control" name="level">
                                    <option selected value="{{ $editcourse->level }}">{{ $editcourse->level }}</option>
                                    <option disabled>Select another Course level</option>
                                    <option value="Beginner">Beginner</option>
                                    <option value="Intermediate">Intermediate</option>
                                    <option value="Advanced">Advanced</option>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label">Course Duration <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="duration" value="{{ $editcourse->duration }}">
                            </div>

                            <div class="col-sm-6">
                                <label class="form-label">Cover Image <span class="text-danger">*</span></label>
                                <input type="file" class="form-control" name="coverimage" value="{{ $editcourse->coverimage }}">
                                <img src="../../upload/{{ $editcourse->coverimage }}" width="120px" height="60px" alt="">
                            </div>
                            <div class="col-sm-12">
                                <label class="form-label">Meta Description <span class="text-danger">*</span></label>
                                <textarea class="form-control" rows="4" cols="30" name="requirement">{{ $editcourse->requirement }}</textarea>
                            </div>
                            <div class="col-sm-12">
                                <label class="form-label">Course Description <span class="text-danger">*</span></label>
                                <textarea class="form-control" rows="10" cols="50" name="description">{{ $editcourse->description }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="flex-align justify-content-end gap-8">
                        <button type="reset" class="btn btn-outline-main rounded-pill py-9">Cancel</a>
                            <button type="submit" class="btn btn-main rounded-pill py-9">Update Course</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


</div>

@endsection