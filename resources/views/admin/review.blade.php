@extends('layout.app-admin1')
@section('title')
Support || JapaDemy
@endsection
@section('content')

<div class="dashboard-body">

    <div class="breadcrumb-with-buttons mb-24">
        <!-- Breadcrumb Start -->
        <div class="breadcrumb mb-24">
            <ul class="flex-align gap-4">
                <li><a href="{{ url('/admin/dashboard') }}" class="text-gray-200 fw-normal text-15 hover-text-main-600">Home</a>
                </li>
                <li> <span class="text-gray-500 fw-normal d-flex"><i class="ph ph-caret-right"></i></span> </li>
                <li><span class="text-main-600 fw-normal text-15">Support Tickets</span></li>
            </ul>
        </div>
        <!-- Breadcrumb End -->
    </div>

    @include('include.success')
    @include('include.warning')
    @include('include.error')
    <div class="card overflow-hidden py-14 px-14">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-striped table-bordered zero-configuration">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Fullname</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Comment</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $number = 1; ?>
                        @foreach($allreview as $review)
                        <tr>
                            <td><span class="h6 mb-0 fw-medium text-gray-300">{{ $number }}</span></td>
                            <td><span class="h6 mb-0 fw-medium text-gray-300">{{ $review->user->profile->first()->fname }} {{ $review->user->profile->first()->fname }}</span></td>
                            <td><span class="h6 mb-0 fw-medium text-gray-300">{{ $review->user->email }}</span></td>
                            <td><span class="h6 mb-0 fw-medium text-gray-300">{{ $review->subject }}</span></td>
                            <td><span class="h6 mb-0 fw-medium text-gray-300">{{ $review->comment }}</span></td>
                            <td>
                                @if($review->status == 1)
                                <span class="btn btn-success btn-sm py-2 px-14 rounded-pill">Approved</span>
                                @elseif($review->status == 0)
                                <span class="btn btn-warning btn-sm py-2 px-14 rounded-pill">Pending</span>
                                @endif
                            </td>

                            <td>
                                @if($review->status == 1)
                                <button type="submit" class="bg-main-50 py-2 px-14 rounded-pill hover-bg-main-600 hover-text-white" data-bs-toggle="modal" data-bs-target="#delete{{ $review->id }}">Delete</button>
                                @elseif($review->status == 0)
                                <button type="submit" class="bg-main-50 py-2 px-14 rounded-pill hover-bg-main-600 hover-text-white" data-bs-toggle="modal" data-bs-target="#approve{{ $review->id }}">Approve</button>
                                @endif
                            </td>
                            <!-- modal content -->
                            <div id="approve{{ $review->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog  modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">Approve Review</h4>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body">
                                            <h4><strong>Confirm Approval</strong></h4>
                                            <p>Are you sure you want to Approve Review </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary btn-sm waves-effect" data-bs-dismiss="modal">Close</button>
                                            <a href="{{ route('adminapprovereview', $review->id) }}" class="btn btn-success btn-sm waves-effect waves-light">Approve</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.modal -->
                            <!-- modal content -->
                            <div id="delete{{ $review->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog  modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">Delete Review</h4>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body">
                                            <h4><strong>Confirm Deletion</strong></h4>
                                            <p>Are you sure you want to Delete Review </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default waves-effect" data-bs-dismiss="modal">Close</button>
                                            <a href="{{ route('deletereview', $review->id) }}" class="btn btn-danger btn-sm waves-effect waves-light">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.modal -->
                        </tr>
                        <?php $number++; ?>
                        @endforeach
                    </tbody>
                    <!-- <tbody>
                    <tr>
                        <td>
                            <span class="h6 mb-0 fw-medium text-gray-300">1</span>
                        </td>
                        <td>
                            <span class="h6 mb-0 fw-medium text-gray-300">
                                <img src="">
                            </span>
                        </td>
                        <td>
                            <span class="h6 mb-0 fw-medium text-gray-300">June 18, 2024</span>
                        </td>
                        <td>
                            <span class="h6 mb-0 fw-medium text-gray-300">June 21, 2024</span>
                        </td>
                        <td>
                            <span class="text-13 py-2 px-8 bg-info-50 text-info-600 d-inline-flex align-items-center gap-8 rounded-pill">
                                <span class="w-6 h-6 bg-info-600 rounded-circle flex-shrink-0"></span> Active
                            </span>
                        </td>
                        <td>
                            <a href="#" class="bg-main-50 py-2 px-14 rounded-pill hover-bg-main-600 hover-text-white">Edit</a>
                        </td>
                    </tr>
                </tbody> -->
                </table>
            </div>
        </div>
    </div>


</div>

@endsection