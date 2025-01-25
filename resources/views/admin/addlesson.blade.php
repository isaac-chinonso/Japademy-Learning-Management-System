@extends('layout.app-admin1')
@section('title')
Add Lesson || JapaDemy
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
                <li><span class="text-main-600 fw-normal text-15">Lesson</span></li>
            </ul>
        </div>
        <!-- Breadcrumb End -->

        <div align="right">
            <button class="bg-main-50 py-2 px-14 rounded-pill hover-bg-main-600 hover-text-white"><a href="{{ url('admin/lesson') }}" class="text-white"> See all Lesson </a></button>
        </div><br>
    </div>

    @include('include.success')
    @include('include.warning')
    @include('include.error')
    <div class="card overflow-hidden">
        <div class="card-body p-0">
            <form action="{{ url('admin/save-lesson') }}" method="POST" enctype="multipart/form-data" style="padding:40px;">
                @csrf
                <div class="row gy-20">
                    <div class="col-md-12 col-sm-12">
                        <div class="row g-20">
                            <div class="col-sm-6">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control" name="title">
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label">Course</label>
                                <select class="form-control" name="course_id">
                                    <option selected disabled>Select Course</option>
                                    @foreach($courses as $mod)
                                    <option value="{{ $mod->id }}">{{ $mod->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-12">
                                <label class="form-label">Video URL</label>
                                <input type="text" class="form-control" name="videourl" value="{{ Request::old('videourl')}}">
                            </div>
                        </div>
                    </div>
                    <div class="flex-align justify-content-end gap-8">
                        <button type="reset" class="btn btn-outline-main rounded-pill py-9">Cancel</button>
                        <button type="submit" class="btn btn-main rounded-pill py-9">Create Lesson</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


</div>

@endsection