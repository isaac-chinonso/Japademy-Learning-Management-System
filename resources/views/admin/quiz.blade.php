@extends('layout.app-admin1')
@section('title')
Quiz || JapaDemy
@endsection
@section('content')

<div class="dashboard-body">
    <!-- Breadcrumb Start -->
    <div class="breadcrumb mb-24">
        <ul class="flex-align gap-4">
            <li><a href="{{ url('/admin/dashboard') }}" class="text-gray-200 fw-normal text-15 hover-text-main-600">Home</a></li>
            <li> <span class="text-gray-500 fw-normal d-flex"><i class="ph ph-caret-right"></i></span> </li>
            <li><span class="text-main-600 fw-normal text-15">Quiz</span></li>
        </ul>
    </div>
    <div align="right">
        <button type="button" class="bg-main-50 py-2 px-14 rounded-pill hover-bg-main-600">
            <a href="{{ url('/admin/add-quiz-question') }}" class="text-white">
                Add New Question
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
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-onGoing" role="tabpanel" aria-labelledby="pills-onGoing-tab" tabindex="0">
                    <div class="row g-20">

                        <div class="table-responsive">
                            <table id="example" class="table table-striped" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th class="h6 text-gray-300">S/N</th>
                                        <th class="h6 text-gray-300">Question</th>
                                        <th class="h6 text-gray-300">Option/Scorepoint A</th>
                                        <th class="h6 text-gray-300">Option/Scorepoint B</th>
                                        <th class="h6 text-gray-300">Option/Scorepoint C</th>
                                        <th class="h6 text-gray-300">Option/Scorepoint D</th>
                                        <th class="h6 text-gray-300">Option/Scorepoint E</th>
                                        <th class="h6 text-gray-300">Status</th>
                                        <th class="h6 text-gray-300">Action Button</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $number = 1; ?>
                                    @foreach($allquiz as $quiz)
                                    <tr>
                                        <td><span class="h6 mb-0 fw-medium text-gray-300">{{ $number }}</span></td>
                                        <td style="width: 250px;"><span class="h6 mb-0 fw-medium text-gray-300">{{ $quiz->question }}</span></td>
                                        <td style="width: 170px;"><span class="h6 mb-0 fw-medium text-gray-300">{{ $quiz->option1 }} ({{ $quiz->scorepoint1 }})</span></td>
                                        <td style="width: 170px;"><span class="h6 mb-0 fw-medium text-gray-300">{{ $quiz->option2 }} ({{ $quiz->scorepoint2 }})</span></td>
                                        <td style="width: 170px;"><span class="h6 mb-0 fw-medium text-gray-300">{{ $quiz->option3 }} ({{ $quiz->scorepoint3 }})</span></td>
                                        <td style="width: 170px;"><span class="h6 mb-0 fw-medium text-gray-300">{{ $quiz->option4 }} ({{ $quiz->scorepoint4 }})</span></td>
                                        <td style="width: 170px;"><span class="h6 mb-0 fw-medium text-gray-300">{{ $quiz->option5 }} ({{ $quiz->scorepoint5 }})</span></td>
                                        <td><span class="h6 mb-0 fw-medium text-gray-300 py-10">
                                                @if( $quiz->status == 0)
                                                <span class="alert alert-danger rounded-pill py-5 px-14">inactive</span>
                                                @elseif($quiz->status == 1)
                                                <span class="alert alert-success rounded-pill py-2 px-14">Active</span>
                                                @endif
                                            </span>
                                        </td>
                                        <td>
                                        <button type="submit" class="btn btn-danger py-2 px-14 rounded-pill hover-bg-main-600 hover-text-white" data-bs-toggle="modal" data-bs-target="#delete{{ $quiz->id }}">Delete</button>
                                            @if($quiz->status == 1)
                                            <button type="submit" class="btn btn-warning py-2 px-14 rounded-pill hover-bg-main-600 hover-text-white" data-bs-toggle="modal" data-bs-target="#deactivate{{ $quiz->id }}">Deactivate</button>
                                            @elseif($quiz->status == 0)
                                            <button type="submit" class=" btn btn-success py-2 px-14 rounded-pill hover-bg-main-600 hover-text-white" data-bs-toggle="modal" data-bs-target="#approve{{ $quiz->id }}">Approve</button>
                                            @endif
                                        </td>
                                    </tr>
                                    <!-- modal content -->
                                    <div id="approve{{ $quiz->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog  modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myModalLabel">Activate Course</h4>
                                                    <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body">
                                                    <h4><strong>Confirm Activation</strong></h4>
                                                    <p>Are you sure you want to Activate this Question </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-primary btn-sm waves-effect" data-bs-dismiss="modal">Close</button>
                                                    <a href="{{ route('adminactivateskillassessmentquestion', $quiz->id) }}" class="btn btn-success btn-sm waves-effect waves-light">Activate</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.modal -->
                                    <!-- modal content -->
                                    <div id="deactivate{{ $quiz->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog  modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myModalLabel">Deactivate Course</h4>
                                                    <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body">
                                                    <h4><strong>Confirm Deactivation</strong></h4>
                                                    <p>Are you sure you want to Deactivate this Question</strong> </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default waves-effect" data-bs-dismiss="modal">Close</button>
                                                    <a href="{{ route('admindeactivateskillassessmentquestion', $quiz->id) }}" class="btn btn-danger btn-sm waves-effect waves-light">Deactivate</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.modal -->
                                    <!-- modal content -->
                                    <div id="delete{{ $quiz->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog  modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myModalLabel">Delete Course</h4>
                                                    <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body">
                                                    <h4><strong>Confirm Deletion</strong></h4>
                                                    <p>Are you sure you want to Delete Question </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default waves-effect" data-bs-dismiss="modal">Close</button>
                                                    <a href="{{ route('admindeleteskillassessmentquestion', $quiz->id) }}" class="btn btn-danger btn-sm waves-effect waves-light">Delete</a>
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
    <!-- Course Tab End -->

</div>

@endsection