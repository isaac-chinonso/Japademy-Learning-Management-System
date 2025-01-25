@extends('layout.app-user')
@section('title')
General Courses || JapaDemy
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

    <!-- Recent Mentors Start -->
    <div class="card mt-24">
        <div class="card-body">
            <h4 class="mb-20">General Courses</h4>

            <div class="row g-20">
                @foreach($Categories as $gencat)
                <div class="col-md-4">
                    <div class="mentor-card rounded-8 overflow-hidden">
                        <div class="mentor-card__cover position-relative" style="height: 290px;">
                            <img src="../upload/{{ $gencat->coverimage }}" alt="" class="img-thumbnail" style="height: 290px;">
                        </div>
                        <div class="mentor-card__content text-center" style="margin-top: 20px;">
                            <h5 class="mb-0">
                                <a href="#">{{ $gencat->name }}</a>
                            </h5>

                            <p class="mt-20 text-gray-600 text-14">{{ $gencat->description }}</p>

                            <div class="mentor-card__rating mt-20 border border-gray-100 px-8 py-6 rounded-8 flex-between flex-wrap">
                                <div class="flex-align gap-4">
                                    <span class="text-15 fw-normal text-main-600 d-flex"><i class="ph-fill ph-book-open"></i></span>
                                    <span class="text-13 fw-normal text-gray-600"><strong>{{ $gencat->course_count ?? 0 }} available courses</strong></span>
                                </div>
                            </div>
                            <a href="{{ route('learnergeneralcourses', ['id' => $gencat->id]) }}" class="btn btn-outline-main rounded-pill py-9 w-100 mt-24">View Courses</a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

        </div>
    </div>
    <!-- Recent Mentors End -->

</div>

@endsection