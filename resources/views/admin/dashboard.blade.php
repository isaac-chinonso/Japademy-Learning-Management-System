@extends('layout.app-admin')
@section('title')
Dashboard || JapaDemy
@endsection
@section('content')

<div class="dashboard-body">
    <div class="row gy-4">
        <div class="col-lg-12">
            <!-- Widgets Start -->
            <div class="row gy-4">
                <div class="col-xxl-3 col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mb-2">{{ $allcoursecategory }}</h4>
                            <span class="text-gray-600">Total Category</span>
                            <div class="flex-between gap-8 mt-16">
                                <span class="flex-shrink-0 w-48 h-48 flex-center rounded-circle bg-main-600 text-white text-2xl"><i
                                        class="ph-fill ph-bookmarks"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mb-2">{{ $allorders }}</h4>
                            <span class="text-gray-600">Total Orders</span>
                            <div class="flex-between gap-8 mt-16">
                                <span class="flex-shrink-0 w-48 h-48 flex-center rounded-circle bg-main-two-600 text-white text-2xl"><i
                                        class="ph-fill ph-shopping-cart"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mb-2">{{ $allcourses }}</h4>
                            <span class="text-gray-600">Total Course</span>
                            <div class="flex-between gap-8 mt-16">
                                <span class="flex-shrink-0 w-48 h-48 flex-center rounded-circle bg-purple-600 text-white text-2xl">
                                    <i class="ph-fill ph-graduation-cap"></i></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mb-2">₦{{ $totalsales }}</h4>
                            <span class="text-gray-600">Total Sale</span>
                            <div class="flex-between gap-8 mt-16">
                                <span class="flex-shrink-0 w-48 h-48 flex-center rounded-circle bg-warning-600 text-white text-2xl"><i
                                        class="ph-fill ph-money"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mb-2">{{ $allusers }}</h4>
                            <span class="text-gray-600">Total Member</span>
                            <div class="flex-between gap-8 mt-16">
                                <span class="flex-shrink-0 w-48 h-48 flex-center rounded-circle bg-success-600 text-white text-2xl">
                                    <i class="ph-fill ph-users-three"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mb-2">{{ $allreviews }}</h4>
                            <span class="text-gray-600">Tickets</span>
                            <div class="flex-between gap-8 mt-16">
                                <span class="flex-shrink-0 w-48 h-48 flex-center rounded-circle bg-danger-600 text-white text-2xl">
                                    <i class="ph-fill ph-users-three"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Widgets End -->
        </div>

    </div>
</div>

@endsection