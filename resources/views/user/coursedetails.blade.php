@extends('layout.app-user1')
@section('title')
Courses || JapaDemy
@endsection
@section('content')

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
            <div class="row gy-4">
                <div class="col-md-12">
                    <!-- Course Card Start -->
                    <div class="card">
                        <div class="card-body p-lg-20 p-sm-3">
                            <div class="flex-between flex-wrap gap-12">
                                <div>
                                    <h3 class="mb-4">{{ $coursedetails->title }}</h3>
                                </div>
                                <div class="flex-align flex-wrap gap-24">
                                    <span class="text-13 py-2 px-10 rounded-pill bg-danger-50 text-danger-600">{{ $coursedetails->category->name }}</span>
                                    <h3 style="color: #a30699;"></h3>
                                </div>
                            </div>
                            <div class="rounded-16 overflow-hidden">
                                <img src="../../upload/{{ $coursedetails->coverimage }}" class="img-thumbnail" width="100%" alt="Course Image">
                            </div>

                            <div class="mt-24">
                                <p class="text-gray-600 text-15">
                                    <i class="ph ph-bookmark" style="color: #5a00a5;text-transform:capitalize;"></i> {{ $coursedetails->category->name }} &nbsp;&nbsp;&nbsp;&nbsp;
                                    <i class="ph ph-clock" style="color: #5a00a5;"></i> {{ $coursedetails->duration }} time &nbsp;&nbsp;&nbsp;&nbsp;
                                    <i class="ph ph-cube" style="color: #5a00a5;"></i> {{ $coursedetails->level }} <br>
                                </p>
                            </div>
                            <div class="mt-24">
                                <div class="mb-24 pb-24 border-bottom border-gray-100">
                                    <h5 class="mb-12 fw-bold">About this course</h5>
                                    <p class="text-gray-300 text-15">{{ $coursedetails->requirement }}</p>
                                </div>
                                <div class="mb-24 pb-24 border-bottom border-gray-100">
                                    <h5 class="mb-12 fw-bold">Description</h5>
                                    <p class="text-gray-300 text-15 mb-8">{{ $coursedetails->description }}</p>
                                </div>
                            </div>
                            <div>
                                <form action="{{ route('user.alison.start.course', ['courseSlug' => $coursedetails->slug]) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-main rounded-pill py-9 w-100 mt-24">
                                        Start Learning Now
                                    </button>
                                </form>
                            </div>

                        </div>
                    </div>
                    <!-- Course Card End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Course Tab End -->

</div>

@endsection