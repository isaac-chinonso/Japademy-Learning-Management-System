@extends('layout.app-admin')
@section('title')
Members || JapaDemy
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
                <li><span class="text-main-600 fw-normal text-15">Members</span></li>
            </ul>
        </div>
        <!-- Breadcrumb End -->
    </div>


    <div class="card overflow-hidden py-14 px-14">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table id="example" class="table table-striped" style="width: 100%;">
                    <thead>
                        <tr>
                            <th class="h6 text-gray-300">S/N</th>
                            <th class="h6 text-gray-300">Fullname</th>
                            <th class="h6 text-gray-300">Email</th>
                            <th class="h6 text-gray-300">Phone Number</th>
                            <th class="h6 text-gray-300">Date of Birth</th>
                            <th class="h6 text-gray-300">Gender</th>
                            <th class="h6 text-gray-300">Level</th>
                            <th class="h6 text-gray-300">Location</th>
                            <th class="h6 text-gray-300">Status</th>
                            <th class="h6 text-gray-300">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $number = 1; ?>
                        @foreach($allusers as $use)
                        <tr>
                            <td><span class="h6 mb-0 fw-medium text-gray-300">{{ $number }}</span></td>
                            <td><span class="h6 mb-0 fw-medium text-gray-300">{{ $use->profile->first()->fname}} {{ $use->profile->first()->lname}}</span></td>
                            <td><span class="h6 mb-0 fw-medium text-gray-300">{{ $use->email }}</span></td>
                            <td><span class="h6 mb-0 fw-medium text-gray-300">{{ $use->profile->first()->phone}}</span></td>
                            <td><span class="h6 mb-0 fw-medium text-gray-300">{{ $use->profile->first()->dob}}</span></td>
                            <td><span class="h6 mb-0 fw-medium text-gray-300">{{ $use->profile->first()->gender}}</span></td>
                            <td><span class="h6 mb-0 fw-medium text-gray-300">{{ $use->profile->first()->level}}</span></td>
                            <td><span class="h6 mb-0 fw-medium text-gray-300">{{ $use->profile->first()->address}}</span></td>
                            <td><span class="h6 mb-0 fw-medium text-gray-300 py-10">
                                    @if( $use->status == 0)
                                    <span class="alert alert-danger rounded-pill py-5 px-14">Unactivated</span>
                                    @elseif($use->status == 1)
                                    <span class="alert alert-success rounded-pill py-2 px-14">Activated</span>
                                    @endif
                                </span>
                            </td>
                            <td><span class="h6 mb-0 fw-medium text-gray-300">
                                @if( $use->status == 0)
                                <button type="submit" class="bg-main-50 py-2 px-14 rounded-pill hover-bg-main-600 hover-text-white" data-bs-toggle="modal" data-bs-target="#activate{{ $use->id }}">Activate</button>
                                @elseif($use->status == 1)
                                <button type="submit" class="bg-main-50 py-2 px-14 rounded-pill hover-bg-main-600 hover-text-white" data-bs-toggle="modal" data-bs-target="#deactivate{{ $use->id }}">Deactivate</button>
                                @endif
                                </span>
                            </td>

                            <!-- modal content1 -->
                            <div id="activate{{ $use->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog  modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">Activate User</h4>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body">
                                            <h4><strong>Confirm Activation</strong></h4>
                                            <p>Are you sure you want to Activate <strong>{{ $use->fullname }}</strong> </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default waves-effect" data-bs-dismiss="modal">Close</button>
                                            <a href="{{ route('activateuser', $use->id) }}" class="btn btn-success btn-sm waves-effect waves-light">Activate User</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.modal -->
                            <!-- modal content -->
                            <div id="deactivate{{ $use->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog  modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">Deactivate User</h4>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body">
                                            <h4><strong>Confirm Deactivation</strong></h4>
                                            <p>Are you sure you want to Deactivate <strong>{{ $use->fullname }}</strong> </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default waves-effect" data-bs-dismiss="modal">Close</button>
                                            <a href="{{ route('deactivateuser', $use->id) }}" class="btn btn-danger btn-sm waves-effect waves-light">Deactivate User</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.modal -->
                        </tr>
                        <?php $number++; ?>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>

@endsection