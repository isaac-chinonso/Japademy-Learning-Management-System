@extends('layout.app-user')
@section('title')
Settings || JapaDemy
@endsection
@section('content')

<div class="dashboard-body">
    <!-- Breadcrumb Start -->
    <div class="breadcrumb mb-24">
        <ul class="flex-align gap-4">
            <li><a href="{{ url('/admin/dashboard') }}" class="text-gray-200 fw-normal text-15 hover-text-main-600">Home</a></li>
            <li> <span class="text-gray-500 fw-normal d-flex"><i class="ph ph-caret-right"></i></span> </li>
            <li><span class="text-main-600 fw-normal text-15">Setting</span></li>
        </ul>
    </div>
    <!-- Breadcrumb End -->
    @include('include.success')
    @include('include.warning')
    @include('include.error')
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
                            <h4 class="mb-8">{{ Auth::user()->profile->first()->fname }} {{ Auth::user()->profile->first()->lname }}</h4>
                            <div class="setting-profile__infos flex-align flex-wrap gap-16">
                                <div class="flex-align gap-6">
                                    <span class="text-gray-600 d-flex text-lg"><i
                                            class="ph ph-map-pin"></i></span>
                                    <span class="text-gray-600 d-flex text-15">{{ Auth::user()->profile->first()->address ?? 'Address not updated' }} </span>
                                </div>
                                <div class="flex-align gap-6">
                                    <span class="text-gray-600 d-flex text-lg"><i
                                            class="ph ph-calendar-dots"></i></span>
                                    <span class="text-gray-600 d-flex text-15">Joined {{ Auth::user()->created_at->diffForHumans() }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="nav common-tab style-two nav-pills mb-0" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-details-tab" data-bs-toggle="pill" data-bs-target="#pills-details" type="button" role="tab" aria-controls="pills-details" aria-selected="true">My Details</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-password-tab" data-bs-toggle="pill" data-bs-target="#pills-password" type="button" role="tab" aria-controls="pills-password" aria-selected="false">Password</button>
                    </li>
                </ul>
            </div>

        </div>
    </div>

    <div class="tab-content" id="pills-tabContent">
        <!-- My Details Tab start -->
        <div class="tab-pane fade show active" id="pills-details" role="tabpanel" aria-labelledby="pills-details-tab" tabindex="0">
            <div class="card mt-24">
                <div class="card-header border-bottom">
                    <h4 class="mb-4">My Details</h4>
                    <p class="text-gray-600 text-15">Please fill full details about yourself</p>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ url('/learner/update-profile') }}">
                        @csrf
                        <div class="row gy-4">
                            <div class="col-sm-6 col-xs-6">
                                <label for="fname" class="form-label mb-8 h6">First Name</label>
                                <input type="text" class="form-control py-11" name="fname" placeholder="Enter First Name" value="{{ Auth::user()->profile->first()->fname }}">
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <label for="lname" class="form-label mb-8 h6">Last Name</label>
                                <input type="text" class="form-control py-11" name="lname" placeholder="Enter Last Name" value="{{ Auth::user()->profile->first()->lname }}">
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <label for="email" class="form-label mb-8 h6">Email</label>
                                <input type="email" class="form-control py-11" placeholder="Enter Email" value="{{ Auth::user()->email }}" disabled>
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <label for="phone" class="form-label mb-8 h6">Phone Number</label>
                                <input type="number" class="form-control py-11" name="phone" placeholder="Enter Phone Number" value="{{ Auth::user()->profile->first()->phone }}">
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <label for="phone" class="form-label mb-8 h6">Date of Birth</label>
                                <input type="text" class="form-control py-11" name="dob" placeholder="Enter Date of Birth" value="{{ Auth::user()->profile->first()->dob }}">
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <label for="lname" class="form-label mb-8 h6">Gender</label>
                                <div class="position-relative">
                                    <select class="form-control py-11 ps-40" name="gender">
                                        <option value="{{ Auth::user()->profile->first()->gender }}" selected>{{ Auth::user()->profile->first()->gender }}</option>
                                        <option disabled>Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                    <span class="position-absolute top-50 translate-middle-y ms-16 text-gray-600 d-flex"><i
                                            class="ph ph-user"></i></span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <label for="lname" class="form-label mb-8 h6">Level</label>
                                <div class="position-relative">
                                    <select class="form-control py-11 ps-40" name="level">
                                        <option value="{{ Auth::user()->profile->first()->level }}" selected>{{ Auth::user()->profile->first()->level }}</option>
                                        <option disabled>Select Level</option>
                                        <option value="Beginner">Beginner</option>
                                        <option value="Advanced">Advanced</option>
                                    </select>
                                    <span class="position-absolute top-50 translate-middle-y ms-16 text-gray-600 d-flex"><i
                                            class="ph ph-chart-bar"></i></span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <label for="email" class="form-label mb-8 h6">Country of Residence </label>
                                <div class="position-relative">
                                    <select class="form-control py-11 ps-40" name="address">
                                        <option value="{{ Auth::user()->profile->first()->address }}" selected>{{ Auth::user()->profile->first()->address }}</option>
                                        <option disabled>Select Country</option>
                                        <option value="United State">United State</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Canada">Canada</option>
                                    </select>
                                    <span class="position-absolute top-50 translate-middle-y ms-16 text-gray-600 d-flex"><i
                                            class="ph ph-flag"></i></span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="flex-align justify-content-end gap-8">
                                    <button type="submit" class="btn btn-main rounded-pill py-9">Update Profile</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- My Details Tab End -->

        <!-- Password Tab Start -->
        <div class="tab-pane fade" id="pills-password" role="tabpanel" aria-labelledby="pills-password-tab" tabindex="0">
            <div class="card mt-24">
                <div class="card-header border-bottom">
                    <h4 class="mb-4">Password Settings</h4>

                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <form action="#">
                                <div class="row gy-4">
                                    <div class="col-12">
                                        <label for="current-password" class="form-label mb-8 h6">Current
                                            Password</label>
                                        <div class="position-relative">
                                            <input type="password" class="form-control py-11" id="current-password" placeholder="Enter Current Password">
                                            <span class="toggle-password position-absolute top-50 inset-inline-end-0 me-16 translate-middle-y ph ph-eye-slash" id="#current-password"></span>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="new-password" class="form-label mb-8 h6">New
                                            Password</label>
                                        <div class="position-relative">
                                            <input type="password" class="form-control py-11" id="new-password" placeholder="Enter New Password">
                                            <span class="toggle-password position-absolute top-50 inset-inline-end-0 me-16 translate-middle-y ph ph-eye-slash" id="#new-password"></span>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="confirm-password" class="form-label mb-8 h6">Confirm
                                            Password</label>
                                        <div class="position-relative">
                                            <input type="password" class="form-control py-11" id="confirm-password" placeholder="Enter Confirm Password">
                                            <span class="toggle-password position-absolute top-50 inset-inline-end-0 me-16 translate-middle-y ph ph-eye-slash" id="#confirm-password"></span>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label mb-8 h6">Password Requirements:</label>
                                        <ul class="list-inside">
                                            <li class="text-gray-600 mb-4">At least one lowercase character</li>
                                            <li class="text-gray-600 mb-4">Minimum 8 characters long - the more, the better</li>
                                            <li class="text-gray-300 mb-4">At least one number, symbol, or whitespace character</li>
                                        </ul>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-12">
                            <div class="flex-align justify-content-end gap-8">
                                <button type="submit" class="btn btn-main rounded-pill py-9">Save
                                    Changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Password Tab End -->

    </div>
</div>

@endsection