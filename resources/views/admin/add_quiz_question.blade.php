@extends('layout.app-admin1')
@section('title')
Add Question to Quiz || JapaDemy
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
                <li><span class="text-main-600 fw-normal text-15">Add Question to Quiz</span></li>
            </ul>
        </div>
        <!-- Breadcrumb End -->
        <div align="right">
            <button type="button" class="bg-main-50 py-2 px-14 rounded-pill hover-bg-main-600">
                <a href="{{ url('/admin/skill-assessment') }}" class="text-white">
                    Go back to Quiz Questions
                </a>
            </button>
        </div><br>
    </div>

    @include('include.success')
    @include('include.warning')
    @include('include.error')
    <div class="card overflow-hidden">
        <div class="card-body p-0">

            <form method="POST" action="{{ url('admin/save-skill-assessment-question') }}" style="padding:40px;">
                <h4 class="py-2 px-2">Add Question to Quiz</h4>
                @csrf
                <div class="row gy-20">
                    <div class="col-md-12 col-sm-12">
                        <div class="row g-20" id="fieldList">
                            <div class="col-sm-12">
                                <label class="form-label">Question <span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control" name="question[]" placeholder="Enter Question"></textarea>
                            </div>
                            <div class="col-sm-5">
                                <label class="form-label">Option A <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="option1[]" placeholder="Enter Option A">
                            </div>
                            <div class="col-sm-1">
                                <label class="form-label">Score <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="scorepoint1[]">
                            </div>
                            <div class="col-sm-5">
                                <label class="form-label">Option B <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="option2[]" placeholder="Enter Option B">
                            </div>
                            <div class="col-sm-1">
                                <label class="form-label">Score <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="scorepoint2[]">
                            </div>
                            <div class="col-sm-5">
                                <label class="form-label">Option C <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="option3[]" placeholder="Enter Option C">
                            </div>
                            <div class="col-sm-1">
                                <label class="form-label">Score <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="scorepoint3[]">
                            </div>
                            <div class="col-sm-5">
                                <label class="form-label">Option D <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="option4[]" placeholder="Enter Option D">
                            </div>
                            <div class="col-sm-1">
                                <label class="form-label">Score<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="scorepoint4[]">
                            </div>
                            <div class="col-sm-5">
                                <label class="form-label">Option E <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="option5[]" placeholder="Enter Option E">
                            </div>
                            <div class="col-sm-1">
                                <label class="form-label">Score <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="scorepoint5[]">
                            </div>
                        </div>
                        <div align="right">
                            <button class="btn btn-secondary" id="addMore">Add more fields</button>
                        </div>
                    </div>

                    <div class="flex-align justify-content-end gap-8">
                        <button type="reset" class="btn btn-outline-main rounded-pill py-9">Cancel</a>
                            <button type="submit" class="btn btn-main rounded-pill py-9">Submit Question</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


</div>


@endsection