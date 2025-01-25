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
            <li><span class="text-main-600 fw-normal text-15">Courses/{{ $course['data']['name'] }}</span></li>
        </ul>
    </div>
    <!-- Breadcrumb End -->

    <!-- Course Tab Start -->
    <div class="card mt-24">
        <div class="card-body">
            <div class="row gy-4">
                <div class="col-md-8">
                    <!-- Course Card Start -->
                    <div class="card">
                        <div class="card-body p-lg-20 p-sm-3">
                            <div class="flex-between flex-wrap gap-12">
                                <div>
                                    <h3 class="mb-4">{{ $course['data']['name'] }}</h3>
                                </div>

                                <div class="flex-align flex-wrap gap-24">
                                    <span class="text-13 py-2 px-10 rounded-pill bg-danger-50 text-danger-600"></span>
                                    <h3 style="color: #a30699;"></h3>
                                </div>
                            </div>

                            <div class="rounded-16 overflow-hidden">
                                <img src="{{ $course['data']['image'] }}" width="100%" alt="Course Image">
                            </div>

                            <div class="mt-24">
                                <p class="text-gray-600 text-15">
                                    <i class="ph ph-bookmark" style="color: #5a00a5;text-transform:capitalize;"></i> {{ $course['data']['type'] }} &nbsp;&nbsp;&nbsp;&nbsp;
                                    <i class="ph ph-clock" style="color: #5a00a5;"></i> {{ $course['data']['duration_avg'] }} time<br>
                                </p>
                            </div>
                            <div align="right">
                                <form action="{{ route('alison.start.course', ['courseSlug' => $course['data']['slug']]) }}" method="POST">
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
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body p-0">
                            @if(!empty($course['data']['modules']))
                            @foreach($course['data']['modules'] as $module)
                            <div class="course-item">
                                <button type="button" class="course-item__button active flex-align gap-4 w-100 p-16 border-bottom border-gray-100">
                                    <span class="d-block text-start">
                                        <span class="d-block h5 mb-0 text-line-1">{{ $module['name'] }}</span>
                                    </span>
                                    <span class="course-item__arrow ms-auto text-20 text-gray-500"><i class="ph ph-arrow-right"></i></span>
                                </button>
                                <div class="course-item-dropdown border-bottom border-gray-100">
                                    <ul class="course-list p-16 pb-0">
                                        <li class="course-list__item flex-align gap-8 mb-16 active">
                                            <span class="circle flex-shrink-0 text-32 d-flex text-gray-100"><i class="ph ph-circle"></i></span>
                                            <div class="w-100">
                                                <h6>{{ $module['name'] }}</h6>
                                                <a href="#" class="text-gray-300 fw-medium d-block hover-text-main-600 d-lg-block">
                                                    {{ $module['description'] ?? 'No description available.' }}
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            @endforeach
                            @else
                            <p>No modules available for this course.</p>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Course Tab End -->

</div>

@endsection