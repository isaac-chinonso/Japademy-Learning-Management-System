@extends('layout.app-admin1')
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
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Data Table</h4>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Cover Image</th>
                                            <th>Category</th>
                                            <th>Title</th>
                                            <th>Level</th>
                                            <th>Duration</th>
                                            <th>Amount</th>
                                            <th>Meta Desc</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $number = 1; ?>
                                        @foreach($course as $cat)
                                        <tr>
                                            <td><span class="h6 mb-0 fw-medium text-gray-300">{{ $number }}</span></td>
                                            <td>
                                                <span class="h6 mb-0 fw-medium text-gray-300">
                                                    <img src="/../upload/{{ $cat->coverimage }}" height="50px" width="50px" alt="Course Image">
                                                </span>
                                            </td>
                                            <td><span class="h6 mb-0 fw-medium text-gray-300">{{ $cat->category->name }}</span></td>
                                            <td style="width: 200px;"><span class="h6 mb-0 fw-medium text-gray-300">{{ $cat->title }}</span></td>
                                            <td><span class="h6 mb-0 fw-medium text-gray-300">{{ $cat->level }}</span></td>
                                            <td><span class="h6 mb-0 fw-medium text-gray-300">{{ $cat->duration }} time</span></td>
                                            <td><span class="h6 mb-0 fw-medium text-gray-300">₦{{ number_format($cat->amount, 2, '.', ', ') }}</span></td>
                                            <td style="width: 200px;"><span class="h6 mb-0 fw-medium text-gray-300">{{ $cat->requirement }}</span></td>
                                            <td style="width: 500px;"><span class="h6 mb-0 fw-medium text-gray-300">{{ $cat->description }}</span></td>
                                            <td><span class="h6 mb-0 fw-medium text-gray-300 py-10">
                                                    @if( $cat->status == 0)
                                                    <span class="alert alert-danger rounded-pill py-5 px-14">inactive</span>
                                                    @elseif($cat->status == 1)
                                                    <span class="alert alert-success rounded-pill py-2 px-14">Active</span>
                                                    @endif
                                                </span>
                                            </td>
                                            <td>
                                                <a href="{{ route('admineditcourse', $cat->slug) }}" class="btn btn-main btn-sm rounded-pill py-9 mt-24"> Edit</a>
                                                <button class="btn btn-danger btn-sm rounded-pill py-9 mt-24" data-bs-toggle="modal" data-bs-target="#delete{{ $cat->id }}"> Delete</button>
                                                @if( $cat->status == 0)
                                                <button class="btn btn-success btn-sm rounded-pill py-9 mt-24" data-bs-toggle="modal" data-bs-target="#approve{{ $cat->id }}">Activate</button>
                                                @elseif($cat->status == 1)
                                                <button class="btn btn-warning btn-sm rounded-pill py-9 mt-24" data-bs-toggle="modal" data-bs-target="#deactivate{{ $cat->id }}"> Deactivate</button>
                                                @endif
                                                <!-- <form action="{{ route('alison.start.course', ['courseSlug' => $cat->slug]) }}" method="POST">
                                                    @csrf
                                                    <button type="submit" class="btn btn-outline-main rounded-pill py-9 w-100 mt-24">
                                                        Start Learning Now
                                                    </button>
                                                </form> -->
                                            </td>
                                        </tr>
                                        <!-- modal content -->
                                        <div id="approve{{ $cat->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog  modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">Activate Course</h4>
                                                        <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h4><strong>Confirm Activation</strong></h4>
                                                        <p>Are you sure you want to Activate Course <strong>{{ $cat->title }}</strong> </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary btn-sm waves-effect" data-bs-dismiss="modal">Close</button>
                                                        <a href="{{ route('adminactivatecourse', $cat->id) }}" class="btn btn-success btn-sm waves-effect waves-light">Activate</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.modal -->
                                        <!-- modal content -->
                                        <div id="deactivate{{ $cat->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog  modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">Deactivate Course</h4>
                                                        <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h4><strong>Confirm Deactivation</strong></h4>
                                                        <p>Are you sure you want to Deactivate Course <strong>{{ $cat->title }} </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default waves-effect" data-bs-dismiss="modal">Close</button>
                                                        <a href="{{ route('admindeactivatecourse', $cat->id) }}" class="btn btn-danger btn-sm waves-effect waves-light">Deactivate Course</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.modal -->
                                        <!-- modal content -->
                                        <div id="delete{{ $cat->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog  modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">Delete Course</h4>
                                                        <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h4><strong>Confirm Deletion</strong></h4>
                                                        <p>Are you sure you want to Delete Course <strong>{{ $cat->title }} </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default waves-effect" data-bs-dismiss="modal">Close</button>
                                                        <a href="{{ route('admindeletecourse', $cat->id) }}" class="btn btn-danger btn-sm waves-effect waves-light">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.modal -->
                                        <?php $number++; ?>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Course Tab End -->

</div>

@endsection