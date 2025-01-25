@extends('layout.app-admin1')
@section('title')
Blog Category || JapaDemy
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
                <li><span class="text-main-600 fw-normal text-15">Blog Category</span></li>
            </ul>
        </div>
        <!-- Breadcrumb End -->

        <div align="right">
            <button type="button" class="bg-main-50 py-2 px-14 rounded-pill hover-bg-main-600 hover-text-white" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Add New Blog Category
            </button>
        </div><br>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Blog Category</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="POST" action="{{ url( 'admin/save-blog-category') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-15">
                                <label class="form-label">Category Name <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="name" value="{{ Request::old('name')}}">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="bg-main-50 py-2 px-14 rounded-pill hover-bg-main-600 hover-text-white">Add
                                Blog Category</button>
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
                            <th>Title</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $number = 1; ?>
                        @foreach($categories as $blogcat)
                        <tr>
                            <td><span class="h6 mb-0 fw-medium text-gray-300">{{ $number }}</span></td>
                            <td><span class="h6 mb-0 fw-medium text-gray-300">{{ $blogcat->name }}</span></td>
                            <td>
                                <i class="ph ph-pencil text-primary" data-bs-toggle="modal" data-bs-target="#responsive-modal1{{ $blogcat->id }}"></i> &nbsp;&nbsp;
                                <i class="ph ph-trash text-danger" data-bs-toggle="modal" data-bs-target="#responsive-modal2{{ $blogcat->id }}"></i>
                            </td>
                            <!-- modal content -->
                            <div id="responsive-modal2{{ $blogcat->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">Delete Category</h4>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body">
                                            <h4><strong>Confirm Deletion</strong></h4>
                                            <p>Are you sure you want to Delete {{ $blogcat->name }} Category</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default waves-effect" data-bs-dismiss="modal">Close</button>
                                            <a href="{{ route('deletecategory',$blogcat->id) }}" class="btn btn-danger btn-sm waves-effect waves-light">Delete Category</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.modal -->

                            <!-- modal content -->
                            <div id="responsive-modal1{{ $blogcat->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">Edit Category</h4>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" action="{{ route('updatecategory', $blogcat->id) }}">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label class="form-label">Category Name</label>
                                                        <input type="text" class="form-control" name="name" value="{{ $blogcat->name }}">
                                                    </div>
                                                </div>
                                                <div class=" modal-footer ">
                                                    <button type="button " class="btn btn-light " data-bs-dismiss="modal ">Close</button>
                                                    <button type="submit" class="btn btn-primary ">Update Category</button>
                                                </div>
                                            </form>
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