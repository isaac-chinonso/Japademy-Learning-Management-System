@extends('layout.app-admin1')
@section('title')
Affiliate || JapaDemy
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
                <li><span class="text-main-600 fw-normal text-15">Affiliate</span></li>
            </ul>
        </div>
        <!-- Breadcrumb End -->
    </div>


    <div class="card overflow-hidden py-14 px-14">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-striped table-bordered zero-configuration">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Refferal</th>
                            <th>Reffered BY</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $number = 1; ?>
                        @foreach($allrefferal as $reffer)
                        <tr>
                            <td><span class="h6 mb-0 fw-medium text-gray-300">{{ $number }}</span></td>
                            <td><span class="h6 mb-0 fw-medium text-gray-300">{{ $reffer->referrer_email}}</span></td>
                            <td><span class="h6 mb-0 fw-medium text-gray-300">{{ $reffer->referred_email }}</span></td>
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