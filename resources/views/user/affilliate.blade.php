@extends('layout.app-user')
@section('title')
Affiliate || JapaDemy
@endsection
@section('content')
<div class="dashboard-body">
    <!-- Breadcrumb Start -->
    <div class="breadcrumb mb-24">
        <ul class="flex-align gap-4">
            <li><a href="index.html" class="text-gray-200 fw-normal text-15 hover-text-main-600">Home</a></li>
            <li> <span class="text-gray-500 fw-normal d-flex"><i class="ph ph-caret-right"></i></span> </li>
            <li><span class="text-main-600 fw-normal text-15">Affiliate</span></li>
        </ul>
    </div>
    <!-- Breadcrumb End -->

    <div class="row gy-4">
        <div class="col-lg-12">
            <div class="mt-24">
                <div class="recent-post bg-warning-50 rounded-8 border border-gray-100 p-16 d-flex gap-12 mb-16">
                    <div class="d-inline-flex w-100 max-w-130 flex-shrink-0">
                        <img src="../assets-user/images/thumbs/earn.png" alt="" class="rounded-6 cover-img max-w-130">
                    </div>
                    <div>
                        <h5 class="mb-10">Learn and Share!</h5>
                        <p class="text-gray-600 text-line-3">As a valued member of the Japademy Affiliate Program, you can inspire and empower others by sharing our free learning resources and services. Use this code to refer others and make a positive impact today!</p><br>
                        Referral Code: <a href="#">{{ Auth::user()->referral_code }}</a><br>

                        <p class="text-gray-600 text-line-3"></p>
                    </div>
                </div>
            </div>
            <div class="card mt-24">
                <div class="card-body">
                    <div class="row gy-4">
                        <div class="col-xxl-12 col-xl-12 col-md-12 col-sm-12">
                            <div class="statistics-card p-xl-4 p-16 flex-align gap-10 rounded-8 bg-primary-50">
                                <span class="text-white bg-primary-600 w-36 h-36 rounded-circle flex-center text-xl flex-shrink-0"><i
                                        class="ph ph-users-three"></i></span>
                                <div>
                                    <h4 class="mb-0">{{ $referral_count }}</h4>
                                    <span class="fw-medium text-primary-600">Affiliate Members</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection