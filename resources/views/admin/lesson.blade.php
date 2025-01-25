@extends('layout.app-admin')
@section('title')
Lesson || JapaDemy
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
                <li><span class="text-main-600 fw-normal text-15">Lessons</span></li>
            </ul>
        </div>
        <!-- Breadcrumb End -->

        <div align="right">
            <button type="button" class="bg-main-50 py-2 px-14 rounded-pill hover-bg-main-600">
                <a href="{{ url('/admin/create-lesson') }}" class="text-white">
                    Add New Course Lesson
                </a>
            </button>
        </div><br>
    </div>


    <div class="card overflow-hidden py-14 px-14">
        <div class="card-body p-0">
        <div class="table-responsive">
            <table id="example" class="table table-striped" style="width: 100%;">
                <thead>
                    <tr>
                        <th class="h6 text-gray-300">S/N</th>
                        <th class="h6 text-gray-300">Course</th>
                        <th class="h6 text-gray-300">Title</th>
                        <th class="h6 text-gray-300">Video</th>
                        <th class="h6 text-gray-300">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $number = 1; ?>
                    @foreach($lesson as $less)
                    <tr>
                        <td><span class="h6 mb-0 fw-medium text-gray-300">{{ $number }}</span></td>
                        <td><span class="h6 mb-0 fw-medium text-gray-300">{{ $less->course->title }}</span></td>
                        <td width="300px"><span class="h6 mb-0 fw-medium text-gray-300">{{ $less->title }}</span></td>
                        <td width="300px"><span class="h6 mb-0 fw-medium text-gray-300">{{ $less->videourl }}</span></td>
                        <td>
                        <button class="bg-main-50 py-2 px-14 rounded-pill hover-bg-main-600 hover-text-white"  data-bs-toggle="modal" data-bs-target="#editexampleModalCenter{{ $less->id }}">Edit</button>
                        <button class="bg-main-50 py-2 px-14 rounded-pill hover-bg-main-600 hover-text-white" data-bs-toggle="modal" data-bs-target="#responsive-modal2{{ $less->id }}">Delete</button>
                        </td>

                        <!-- modal content -->
                        <div class="modal fade" id="editexampleModalCenter{{ $less->id }}">
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel">Update Lesson</h4>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <form method="POST" action="{{ route('updatelesson', $less->id) }}">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Course:</label>
                                                        <select class="form-control" name="course_id">
                                                            <option value="{{ $less->course->id }}" selected>{{ $less->course->title }}</option>
                                                            <option disabled>Select Another Course</option>
                                                            @foreach($courses as $mod)
                                                            <option value="{{ $mod->id }}">{{ $mod->title }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Title:</label>
                                                        <input type="text" class="form-control" name="title" value="{{ $less->title }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Video:</label>
                                                        <input type="text" class="form-control" name="videourl" value="{{ $less->videourl }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default waves-effect" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light">Update Lesson</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div><!-- modal content -->
                        <div id="responsive-modal2{{ $less->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel">Delete Lesson</h4>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">
                                        <h4><strong>Confirm Deletion</strong></h4>
                                        <p>Are you sure you want to Delete {{ $less->title }}</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default waves-effect" data-bs-dismiss="modal">Close</button>
                                        <a href="{{ route('deletelesson', $less->id) }}" class="btn btn-danger btn-sm waves-effect waves-light">Delete Lesson</a>
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