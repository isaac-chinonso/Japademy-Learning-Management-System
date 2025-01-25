@extends('layout.app-admin1')
@section('title')
Category || JapaDemy
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
                <li><span class="text-main-600 fw-normal text-15">Category</span></li>
            </ul>
        </div>
        <!-- Breadcrumb End -->

        <div align="right">
            <button type="button" class="bg-main-50 py-2 px-14 rounded-pill hover-bg-main-600 hover-text-white" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Add New Course Category
            </button>
        </div><br>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Course Category</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="POST" action="{{ url( 'admin/save-course-category') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-15">
                                <label class="form-label">Category Name <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="name" value="{{ Request::old('name')}}">
                            </div>
                            <div class="mb-15">
                                <label class="form-label">Cover Image <span
                                        class="text-danger">*</span></label>
                                <input type="file" class="form-control" name="coverimage" value="{{ Request::old('coverimage')}}">
                            </div>
                            <div class="mb-15">
                                <label class="form-label">Course Category Description <span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control" name="description" style="height: 120px;">{{ Request::old('description')}}</textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="bg-main-50 py-2 px-14 rounded-pill hover-bg-main-600 hover-text-white">Add
                                Course Category</button>
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
                <table class="table table-striped table-bordered zero-configuration">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $number = 1; ?>
                        @foreach($coursecatgeory as $coursecat)
                        <tr>
                            <td><span class="h6 mb-0 fw-medium text-gray-300">{{ $number }}</span></td>
                            <td><img src="../../upload/{{ $coursecat->coverimage }}" width="50px" height="50px"></td>
                            <td><span class="h6 mb-0 fw-medium text-gray-300">{{ $coursecat->name }}</span></td>
                            <td><span class="h6 mb-0 fw-medium text-gray-300" style="width: 550px;">{{ $coursecat->description }}</span></td>
                            <td>
                                <button class="bg-main-50 py-2 px-14 rounded-pill hover-bg-main-600 hover-text-white" data-bs-toggle="modal" data-bs-target="#responsive-modal2{{ $coursecat->id }}">Edit</button>
                            </td>
                            <div id="responsive-modal2{{ $coursecat->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">Edit Course Category</h4>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <form method="POST" action="{{ route('updatecoursecategory', $coursecat->id) }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label class="form-label">Category Name</label>
                                                    <input type="text" class="form-control" name="name" value="{{ $coursecat->name }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Cover Image</label>
                                                    <input type="file" class="form-control" name="coverimage" value="{{ $coursecat->coverimage }}">
                                                    <span><img src="../../upload/{{ $coursecat->coverimage }}" style="height: 50px; width: 100px;"></span>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Course Category Description <span class="text-danger">*</span></label>
                                                    <textarea class="form-control" name="description" style="height: 120px;">{{ $coursecat->description }}</textarea>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Update Category</button>
                                            </div>
                                        </form>
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