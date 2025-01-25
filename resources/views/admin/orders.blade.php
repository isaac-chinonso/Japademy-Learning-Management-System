@extends('layout.app-admin1')
@section('title')
Orders || JapaDemy
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
                <li><span class="text-main-600 fw-normal text-15">Orders</span></li>
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
                            <th class="h6 text-gray-300">Fullname</th>
                            <th class="h6 text-gray-300">Transaction ID</th>
                            <th class="h6 text-gray-300">Course</th>
                            <th class="h6 text-gray-300">Amount</th>
                            <th class="h6 text-gray-300">Status</th>
                            <th class="h6 text-gray-300">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $number = 1; ?>
                        @foreach($orders as $order)
                        <tr>
                            <td><span class="h6 mb-0 fw-medium text-gray-300">{{ $number }}</span></td>
                            <td><span class="h6 mb-0 fw-medium text-gray-300">{{ $order->user->profile->first()->lname }} {{ $order->user->profile->first()->fname }}</span></td>
                            <td><span class="h6 mb-0 fw-medium text-gray-300">{{ $order->transaction_id }}</span></td>
                            <td><span class="h6 mb-0 fw-medium text-gray-300">{{ $order->course->title }}</span></td>
                            <td><span class="h6 mb-0 fw-medium text-gray-300">₦{{ number_format($order->amount, 0, '.', ', ') }}</span></td>
                            <td>
                                @if($order->status == 1)
                                <span class="btn btn-success btn-sm">Success</span>
                                @elseif($order->status == 0)
                                <span class="btn btn-warning btn-sm">Error</span>
                                @endif
                            </td>

                            <td><span class="h6 mb-0 fw-medium text-gray-300"> {{ $order->created_at->format('d M Y') }}</span></td>
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