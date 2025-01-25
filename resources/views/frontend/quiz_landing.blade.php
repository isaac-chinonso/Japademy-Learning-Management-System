@extends('layout.app-user')
@section('title')
Quiz || JapaDemy
@endsection
@section('content')
<div class="dashboard-body">

    <div class="breadcrumb-with-buttons mb-24 flex-between flex-wrap gap-8">
        <!-- Breadcrumb Start -->
        <div class="breadcrumb mb-24">
            <ul class="flex-align gap-4">
                <li><a href="index.html" class="text-gray-200 fw-normal text-15 hover-text-main-600">Home</a>
                </li>
                <li> <span class="text-gray-500 fw-normal d-flex"><i class="ph ph-caret-right"></i></span> </li>
                <li><span class="text-main-600 fw-normal text-15">Welcome</span></li>
            </ul>
        </div>
        <!-- Breadcrumb End -->
    </div>
    <!-- Create Course Step List Start -->
    <ul class="step-list mb-24">
        <li class="step-list__item py-15 px-24 text-15 text-heading fw-medium flex-center gap-6 active">
            <span class="icon text-xl d-flex"><i class="ph ph-circle"></i></span>
            Quiz
            <span class="line position-relative"></span>
        </li>
        <li class="step-list__item py-15 px-24 text-15 text-heading fw-medium flex-center gap-6">
            <span class="icon text-xl d-flex"><i class="ph ph-circle"></i></span>
            Start Quiz
            <span class="line position-relative"></span>
        </li>
        <li class="step-list__item py-15 px-24 text-15 text-heading fw-medium flex-center gap-6">
            <span class="icon text-xl d-flex"><i class="ph ph-circle"></i></span>
            See your Result
            <span class="line position-relative"></span>
        </li>
    </ul>
    <!-- Create Course Step List End -->
    @include('include.success')
    @include('include.warning')
    @include('include.error')
    <!-- Course Tab Start -->
    <div class="card h-100">
        <div class="card-body grettings-box-two position-relative z-1 p-0">
            <div class="row align-items-center h-100">
                <div class="col-lg-6">
                    <div class="grettings-box-two__content">
                        <h2 class="fw-medium mb-0 flex-align gap-10">Test Your Knowledge with Our Quiz <img src="assets-user/images/icons/wave-hand.png" alt=""> </h2>
                        <p class="text-15 text-gray-400">👉 Challenge yourself with a series of questions designed to enhance your learning experience!<br><br> Boost your understanding and track your progress as you explore our courses.</p>
                        <a href="{{ route('learnerstartquiz') }}" class="btn btn-main rounded-pill mt-32">Start Now</a>
                    </div>
                </div>
                <div class="col-lg-6 d-md-block d-none mt-auto">
                    <img src="/assets-user/images/thumbs/gretting-thumb.png" alt="">
                </div>
            </div>
            <img src="/assets-user/images/bg/star-shape.png" class="position-absolute start-0 top-0 w-100 h-100 z-n1 object-fit-contain" alt="">
        </div>
    </div>
    <!-- Course Tab End -->
</div>
@endsection