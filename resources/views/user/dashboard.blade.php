@extends('layout.app-user')
@section('title')
Dashboard || JapaDemy
@endsection
@section('content')

<div class="dashboard-body">
    <div class="card overflow-hidden">
        <div class="card-body p-0">
            <div class="cover-img position-relative">
                <div class="avatar-upload">
                    <input type='file' id="coverImageUpload" accept=".png, .jpg, .jpeg">
                    <div class="avatar-preview">
                        <div id="coverImagePreview" style="background-image: url('../assets-user/images/thumbs/setting-cover-img.png');">
                        </div>
                    </div>
                </div>
            </div>

            <div class="setting-profile px-24">
                <div class="flex-between">
                    <div class="d-flex align-items-end flex-wrap mb-32 gap-24">
                        <img src="../assets-user/images/thumbs/setting-profile-img.jpg" alt="" class="w-120 h-120 rounded-circle border border-white">
                        <div>
                            <h4 class="mb-8">  @if (date("H") < 12) Good morning, <span class="text-danger">{{ Auth::user()->profile->first()->fname }}</span>
                                        @elseif (date("H") >= 12 && date("H") < 16) Good afternoon, <span class="text-danger">{{ Auth::user()->profile->first()->fname }}</span>
                                            @elseif (date("H") >= 16 && date("H") < 24) Good evening, <span class="text-danger">{{ Auth::user()->profile->first()->fname }}</span>
                                                @endif</h4>
                            <div class="setting-profile__infos flex-align flex-wrap gap-16">
                                <p>Start learning on Japademy and show recruiters your commitment to upskilling!</p>
                            </div>
                            @if (session('profile_incomplete'))
                            <em class="text-danger-600"> {{ session('profile_incomplete') }}</em>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <hr>
    <div class="row gy-4">
        <div class="col-lg-9">
            <!-- Widgets Start -->
            <div class="row gy-4">
                <div class="col-xxl-6 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mb-2">{{ $allcourses }}</h4>
                            <span class="text-gray-600">Available Courses</span>
                            <div class="flex-between gap-8 mt-16">
                                <span class="flex-shrink-0 w-48 h-48 flex-center rounded-circle bg-warning-600 text-white text-2xl"><i
                                        class="ph-fill ph-book-open"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mb-2">{{ $activecourses }}</h4>
                            <span class="text-gray-600">Courses for you</span>
                            <div class="flex-between gap-8 mt-16">
                                <span class="flex-shrink-0 w-48 h-48 flex-center rounded-circle bg-purple-600 text-white text-2xl">
                                    <i class="ph-fill ph-graduation-cap"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Widgets End -->
        </div>

        <div class="col-lg-3">
            <!-- Calendar Start -->
            <div class="card">
                <div class="card-body">
                    <div class="calendar">
                        <div class="calendar__header">
                            <button type="button" class="calendar__arrow left"><i
                                    class="ph ph-caret-left"></i></button>
                            <p class="display h6 mb-0">""</p>
                            <button type="button" class="calendar__arrow right"><i
                                    class="ph ph-caret-right"></i></button>
                        </div>

                        <div class="calendar__week week">
                            <div class="calendar__week-text">Su</div>
                            <div class="calendar__week-text">Mo</div>
                            <div class="calendar__week-text">Tu</div>
                            <div class="calendar__week-text">We</div>
                            <div class="calendar__week-text">Th</div>
                            <div class="calendar__week-text">Fr</div>
                            <div class="calendar__week-text">Sa</div>
                        </div>
                        <div class="days"></div>
                    </div>
                </div>
            </div>
            <!-- Calendar End -->
        </div>

    </div>
</div>

@endsection