@extends('layout.app-user')
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
        <div align="right">
            <button type="button" class="bg-main-50 py-2 px-14 rounded-pill hover-bg-main-600 hover-text-white" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Create New Ticket
            </button>
        </div><br>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Create New Ticket</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="POST" action="{{ url('learner/save-ticket') }}">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-15">
                                <label class="form-label">Subject <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="subject" value="{{ Request::old('subject')}}">
                            </div>
                            <div class="mb-15">
                                <label class="form-label">Comment <span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control" name="comment" style="height: 120px;">{{ Request::old('comment')}}</textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="bg-main-50 py-2 px-14 rounded-pill hover-bg-main-600 hover-text-white" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="bg-main-50 py-2 px-14 rounded-pill hover-bg-main-600 hover-text-white">Submit Ticket</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('include.success')
    @include('include.warning')
    @include('include.error')
    <div class="card overflow-hidden py-14 px-14">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table id="example" class="table table-striped" style="width: 100%;">
                    <thead>
                        <tr>
                            <th class="h6 text-gray-300">S/N</th>
                            <th class="h6 text-gray-300">Fullname</th>
                            <th class="h6 text-gray-300">Email</th>
                            <th class="h6 text-gray-300">Subject</th>
                            <th class="h6 text-gray-300">Comment</th>
                            <th class="h6 text-gray-300">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $number = 1; ?>
                        @foreach($reviews as $review)
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