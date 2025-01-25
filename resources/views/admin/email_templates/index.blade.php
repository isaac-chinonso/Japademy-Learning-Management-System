@extends('layout.app-admin1')
@section('title')
Email Templates || JapaDemy
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
                <li><span class="text-main-600 fw-normal text-15">Email Templates</span></li>
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
                <table id="example" class="table table-striped" style="width: 100%;">
                    <thead>
                        <tr>
                            <th class="h6 text-gray-300">S/N</th>
                            <th class="h6 text-gray-300">Name</th>
                            <th class="h6 text-gray-300">Type</th>
                            <th class="h6 text-gray-300">Content</th>
                            <th class="h6 text-gray-300">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $number = 1; ?>
                        @foreach($templates as $template)
                        <tr>
                            <td><span class="h6 mb-0 fw-medium text-gray-300">{{ $number }}</span></td>
                            <td class="h6 mb-0 fw-medium text-gray-300">{{ $template->name }}</td>
                            <td class="h6 mb-0 fw-medium text-gray-300">{{ $template->type }}</td>
                            <td class="h6 mb-0 fw-medium text-gray-300">{!! $template->content !!}</td>
                            <td>
                                <button class="bg-main-50 py-2 px-14 rounded-pill hover-bg-main-600 hover-text-white" data-bs-toggle="modal" data-bs-target="#responsive-modal2{{ $template->id }}">Edit Template</button>
                            </td>

                            <div id="responsive-modal2{{ $template->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel">Edit {{ $template->name }} Template</h4>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <form method="POST" action="{{ route('admin.email_templates.update', $template->id) }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label class="form-label">Content: <span class="text-danger">*</span></label>
                                                <textarea class="form-control" name="content" rows="10" style="height: 120px;" required>{{ $template->content }}</textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Update</button>
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