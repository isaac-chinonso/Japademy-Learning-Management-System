@extends('layout.app-admin1')
@section('title')
Blog Post || JapaDemy
@endsection
@section('content')

<div class="dashboard-body">
    <!-- Breadcrumb Start -->
    <div class="breadcrumb mb-24">
        <ul class="flex-align gap-4">
            <li><a href="{{ url('/admin/dashboard') }}" class="text-gray-200 fw-normal text-15 hover-text-main-600">Home</a></li>
            <li> <span class="text-gray-500 fw-normal d-flex"><i class="ph ph-caret-right"></i></span> </li>
            <li><span class="text-main-600 fw-normal text-15">Blogpost</span></li>
        </ul>
    </div>
    <div align="right">
        <button type="button" class="bg-main-50 py-2 px-14 rounded-pill hover-bg-main-600">
            <a href="{{ url('/admin/add-blog') }}" class="text-white">
                Add New Blogpost
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
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Cover Image</th>
                                        <th>Category</th>
                                        <th>Title</th>
                                        <th>Meta Desc</th>
                                        <th>Description</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $number = 1; ?>
                                    @foreach($blogpost as $blog)
                                    <tr>
                                        <td><span class="h6 mb-0 fw-medium text-gray-300">{{ $number }}</span></td>
                                        <td>
                                            <span class="h6 mb-0 fw-medium text-gray-300">
                                                <img src="../{{ $blog->blog_image }}" height="150px" width="150px" alt="Course Image">
                                            </span>
                                        </td>
                                        <td><span class="h6 mb-0 fw-medium text-gray-300">{{ $blog->category->name }}</span></td>
                                        <td style="width: 200px;"><span class="h6 mb-0 fw-medium text-gray-300">{{ $blog->title }}</span></td>
                                        <td><span class="h6 mb-0 fw-medium text-gray-300">{{ $blog->created_at->format('d M Y ') }}</span></td>
                                        <td style="width: 200px;"><span class="h6 mb-0 fw-medium text-gray-300">{{ $blog->short_desc }}</span></td>
                                        <td style="width: 500px;"><span class="h6 mb-0 fw-medium text-gray-300">{{ $blog->long_desc }}</span></td>
                                        <td>
                                            <a href="{{ route('editblog', $blog->slug) }}"><i class="fas fa-pencil-alt text-primar"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#responsive-modal2{{ $blog->id }}"><i class="ph ph-trash text-danger"></i></a>
                                        </td>
                                    </tr>
                                    <!-- modal content -->
                                    <div id="responsive-modal2{{ $blog->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myModalLabel">Delete Blog Post</h4>
                                                    <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body">
                                                    <h4><strong>Confirm Deletion</strong></h4>
                                                    <p>Are you sure you want to Delete <strong>{{ $blog->title }}</strong> Post</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default waves-effect" data-bs-dismiss="modal">Close</button>
                                                    <a href="{{ route('deleteblog',$blog->id) }}" class="btn btn-danger btn-sm waves-effect waves-light">Delete Blog</a>
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