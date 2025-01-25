@extends('layout.app-user')
@section('title')
Nursing Courses || JapaDemy
@endsection
@section('content')

<style>
    .card {
        min-height: 468px;
        /* Adjust as needed */
        padding: 1rem;
        border: 1px solid #ddd;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
</style>

<div class="dashboard-body">
    <!-- Breadcrumb Start -->
    <div class="breadcrumb mb-24">
        <ul class="flex-align gap-4">
            <li><a href="{{ url('/learner/dashboard') }}" class="text-gray-200 fw-normal text-15 hover-text-main-600">Home</a></li>
            <li> <span class="text-gray-500 fw-normal d-flex"><i class="ph ph-caret-right"></i></span> </li>
            <li><span class="text-main-600 fw-normal text-15">Courses</span></li>
        </ul>
    </div>
    <!-- Breadcrumb End -->

    <!-- Course Tab Start -->
    <div class="card mt-24">
        <div class="card-body">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-onGoing" role="tabpanel" aria-labelledby="pills-onGoing-tab" tabindex="0">
                    <div class="mb-20 flex-between flex-wrap gap-8">
                        <h4 class="mb-0">Nursing Courses For You</h4>
                    </div>
                    <div class="row g-20">
                        @foreach($nursingcourses as $course)
                        <div class="col-xxl-4 col-lg-4 col-sm-6">
                            <div class="card border border-gray-100">
                                <div class="card-body p-8">
                                    <a href="#" class="bg-main-100 rounded-8 overflow-hidden text-center mb-8 h-164 flex-center p-8">
                                        <img src="/../upload/{{ $course->coverimage }}" alt="Course Image">
                                    </a>
                                    <div class="p-8">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <span class="text-13 py-2 px-10 rounded-pill bg-danger-50 text-danger-600 mb-16">{{ $course->category->name }}</span>
                                            </div>
                                            <!-- <div class="col-md-4">
                                                <h5 style="color: #a30699;">₦</h5>
                                            </div> -->
                                        </div>


                                        <h5 class="mb-0"><a href="#" class="hover-text-main-600">{{ $course->title }}</a></h5>
                                        <div class="flex-align gap-8 flex-wrap mt-16">
                                            <i class="ph ph-bookmark" style="color: #5a00a5;"></i> {{ $course->level }}<br>
                                            <i class="ph ph-clock" style="color: #5a00a5;"></i> {{ $course->duration }}<br>
                                        </div>
                                        <a href="{{ route('user.course.details', $course['slug']) }}" class="btn btn-outline-main rounded-pill py-9 w-100 mt-24">View Course</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Course Tab End -->

</div>

@endsection