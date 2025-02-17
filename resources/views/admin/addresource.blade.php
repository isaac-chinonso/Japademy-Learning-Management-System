@extends('layout.app-admin1')
@section('title')
Add Resource || JapaDemy
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
                <li><span class="text-main-600 fw-normal text-15">Add Resource</span></li>
            </ul>
        </div>
        <!-- Breadcrumb End -->
        <div align="right">
            <button type="button" class="bg-main-50 py-2 px-14 rounded-pill hover-bg-main-600">
                <a href="{{ url('/admin/resources') }}" class="text-white">
                    Go back to all Resources
                </a>
            </button>
        </div><br>
    </div>

    @include('include.success')
    @include('include.warning')
    @include('include.error')
    <div class="card overflow-hidden">
        <div class="card-body p-0">
            <form method="POST" action="{{ url('admin/save-resources') }}" enctype="multipart/form-data" style="padding:40px;">
        
            @csrf
                <div class="row gy-20">
                    <div class="col-md-12 col-sm-12">
                        <div class="row g-20">
                            <div class="col-sm-6">
                                <label class="form-label">Resource Title <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="title" placeholder="Enter Title">
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label">Link to Resource <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="resourceurl" placeholder="Enter Link to Resource">
                            </div>

                            <div class="col-sm-12">
                                <label class="form-label">Cover Image <span class="text-danger">*</span></label>
                                <input type="file" class="form-control" name="coverimage">
                            </div>
                            <div class="col-sm-12">
                                <label class="form-label"> Description <span class="text-danger">*</span></label>
                                <textarea class="form-control" rows="10" cols="50" name="description" placeholder="Description"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="flex-align justify-content-end gap-8">
                        <button type="reset" class="btn btn-outline-main rounded-pill py-9">Cancel</a>
                        <button type="submit" class="btn btn-main rounded-pill py-9">Submit Resource</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


</div>

@endsection