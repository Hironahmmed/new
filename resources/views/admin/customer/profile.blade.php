
@extends('layouts.backend.admin.app')
@section('title','Profile')
@push('css')
@endpush
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">

    <div class="row gy-4">
        <!-- User Sidebar -->
        <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
            <!-- User Card -->
            <div class="card mb-4">
                <div class="card-body">
                    <div class="user-avatar-section">
                    <div class=" d-flex align-items-center flex-column">
                        <img class="img-fluid rounded my-4" src="{{ Storage::disk('public')->url('profile/').$customer->image }}" height="110" width="110" alt="User avatar" />
                        <div class="user-info text-center mb-3">
                            <h5 class="mb-2">{{ $customer->name }}</h5>
                            <span class="badge bg-label-secondary">{{ $customer->role->name }}</span>
                        </div>
                    </div>
                    </div>
                    <h5 class="pb-2 border-bottom mb-4">Details</h5>
                    <div class="info-container">
                    <ul class="list-unstyled">
                        <li class="mb-3">
                        <span class="fw-bold me-2">Username:</span>
                        <span>{{ $customer->username }}</span>
                        </li>
                        <li class="mb-3">
                        <span class="fw-bold me-2">Email:</span>
                        <span>{{ $customer->email }}</span>
                        </li>
                        <li class="mb-3">
                        <span class="fw-bold me-2">Status:</span>
                            @if($customer->status == true)
                            <span class="badge bg-label-success">Active</span>
                            @else
                            <span class="badge bg-label-success">Pending</span>
                            @endif
                        </li>
                        <li class="mb-3">
                        <span class="fw-bold me-2">Role:</span>
                        <span>{{ $customer->role->name }}</span>
                        </li>
                    </ul>
                    </div>
                </div>
            </div>
            <!-- /User Card -->
            
        </div>
        <!--/ User Sidebar -->
        
        
        <!-- User Content -->
        <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">
            
        
            <!-- Current Plan -->
            <div class="card mb-4">
            <h5 class="card-header">Current Plan</h5>
            <div class="card-body">
                <div class="row">
                <div class="col-xl-6 order-1 order-xl-0">
                    <div class="mb-4">
                        @if($customer->plan_name == 'Monthly')
                        <h6 class="mb-1"><span class="me-2">Monthly</span> 
                        <span class="badge bg-label-primary">Active</span></h6>
                        @else
                        <h6 class="mb-1"><span class="me-2">Yearly</span> 
                        <span class="badge bg-label-primary">Active</span></h6>
                        @endif
                        <p>Standard plan for small to medium businesses</p>
                    </div>
                </div>
                <div class="col-xl-6 order-0 order-xl-0">
                    <div class="alert alert-warning mb-4" role="alert">
                    <h6 class="alert-heading mb-1">We need your attention!</h6>
                    <span>12 of 30 Days Remaining</span>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <!-- /Current Plan -->
        
            <!-- Payment Methods -->
            <div class="card card-action mb-4">
            <div class="card-header align-items-center">
                <h5 class="card-action-title mb-0">Payment Methods</h5>
            </div>
            <div class="card-body">
                <div class="added-cards">
                    <div class="cardMaster border p-3 rounded mb-3">
                        <div class="d-flex justify-content-between flex-sm-row flex-column">
                        <div class="card-information">
                            <img class="mb-3 img-fluid" src="{{ asset('assets/backend/')}}/img/icons/payments/mastercard.png" alt="Master Card">
                            <h6 class="mb-1">{{ $customer->name }}</h6>
                            <span class="card-number">&#8727;&#8727;&#8727;&#8727; &#8727;&#8727;&#8727;&#8727; &#8727;&#8727;&#8727;&#8727; {{ $customer->card_last_four }}</span>
                        </div>
                        <div class="d-flex flex-column text-start text-lg-end">
                            <small class="mt-sm-auto mt-2 order-sm-1 order-0">Card expires at 12/26</small>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!--/ Payment Methods -->

        
        </div>
        <!--/ User Content -->
    </div>
                
</div>
@endsection
@push('js')
@endpush