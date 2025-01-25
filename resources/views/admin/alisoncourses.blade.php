@extends('layout.app-admin2')
@section('title')
Courses || JapaDemy
@endsection
@section('content')

<div class="dashboard-body">
    <!-- Breadcrumb Start -->
    <div class="breadcrumb mb-24">
        <ul class="flex-align gap-4">
            <li><a href="{{ url('/admin/dashboard') }}" class="text-gray-200 fw-normal text-15 hover-text-main-600">Home</a></li>
            <li> <span class="text-gray-500 fw-normal d-flex"><i class="ph ph-caret-right"></i></span> </li>
            <li><span class="text-main-600 fw-normal text-15">Courses</span></li>
        </ul>
    </div>
    <div align="right">
        <button type="button" class="bg-main-50 py-2 px-14 rounded-pill hover-bg-main-600">
            <a href="{{ url('/admin/add-course') }}" class="text-white">
                Add New Course
            </a>
        </button>
    </div><br>
    <!-- Breadcrumb End -->
    @include('include.success')
    @include('include.warning')
    @include('include.error')
    <!-- Course Tab Start -->
    <div class="card">
        <div class="card-body">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-onGoing" role="tabpanel" aria-labelledby="pills-onGoing-tab" tabindex="0">
                    <div class="row g-20">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th class="h6 text-gray-300">S/N</th>
                                        <th class="h6 text-gray-300">Cover Image</th>
                                        <th class="h6 text-gray-300">Category</th>
                                        <th class="h6 text-gray-300">Title</th>
                                        <th class="h6 text-gray-300">Duration</th>
                                        <th class="h6 text-gray-300">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $number = 1; ?>
                                    @foreach($courses['data'] as $course)
                                    <tr>
                                        <td><span class="h6 mb-0 fw-medium text-gray-300">{{ $number }}</span></td>
                                        <td>
                                            <span class="h6 mb-0 fw-medium text-gray-300">
                                                <img src="{{ $course['image'] }}" height="50px" width="50px" alt="Course Image">
                                            </span>
                                        </td>
                                        <td><span class="h6 mb-0 fw-medium text-gray-300">{{ $course['type'] }}</span></td>
                                        <td style="width: 200px;"><span class="h6 mb-0 fw-medium text-gray-300">{{ $course['name'] }}</span></td>
                                        <td style="width: 200px;"><span class="h6 mb-0 fw-medium text-gray-300"></span>{{ $course['duration_avg'] }}</td>
                                        <td style="width: 200px;"><span class="h6 mb-0 fw-medium text-gray-300"> <a href="{{ route('alison.course.details', $course['id']) }}">View Course</a></span></td>
                       
                                    </tr>
                                    <?php $number++; ?>
                                    @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Course Tab End -->

</div>

@endsection