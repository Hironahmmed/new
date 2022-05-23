
@extends('layouts.backend.customer.app')
@section('title','My Profile')
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
                        <img class="img-fluid rounded my-4" src="{{ Storage::disk('public')->url('profile/').Auth::user()->image }}" height="110" width="110" alt="User avatar" />
                        <div class="user-info text-center mb-3">
                            <h5 class="mb-2">{{ Auth::user()->name }}</h5>
                            <span class="badge bg-label-secondary">{{ Auth::user()->role->name }}</span>
                        </div>
                    </div>
                    </div>
                    <h5 class="pb-2 border-bottom mb-4">Details</h5>
                    <div class="info-container">
                    <ul class="list-unstyled">
                        <li class="mb-3">
                        <span class="fw-bold me-2">Username:</span>
                        <span>{{ Auth::user()->username }}</span>
                        </li>
                        <li class="mb-3">
                        <span class="fw-bold me-2">Email:</span>
                        <span>{{ Auth::user()->email }}</span>
                        </li>
                        <li class="mb-3">
                        <span class="fw-bold me-2">Status:</span>
                            @if(Auth::user()->status == true)
                            <span class="badge bg-label-success">Active</span>
                            @else
                            <span class="badge bg-label-success">Pending</span>
                            @endif
                        </li>
                        <li class="mb-3">
                        <span class="fw-bold me-2">Role:</span>
                        <span>{{ Auth::user()->role->name }}</span>
                        </li>
                    </ul>
                    <div class="d-flex justify-content-center pt-3">
                        <a href="{{ route('customer.settings') }}" class="btn btn-primary me-3">Edit Profile</a>
                    </div>
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
                        <h6 class="mb-1"><span class="me-2">${{ (Auth::user()->upcomingInvoice()->amount_due)/100 }} Per 
                            @if ( Carbon\Carbon::parse(Auth::user()->upcomingInvoice()->period_end)->diffInDays(Carbon\Carbon::parse(DB::table('subscriptions')->where('user_id',Auth::user()->id)->latest()->first()->created_at))  > 31)
                            Year
                            @else
                            Month
                            @endif
                        </span> <span class="badge bg-label-primary">Active</span></h6>
                        <p>Standard plan for small to medium businesses</p>
                    </div>
                    <div class="mb-4">
                        <h6 class="mb-1">Active until {{ Carbon\Carbon::parse(Auth::user()->upcomingInvoice()->period_end)->format('F d,Y') }}</h6>
                        <p>We will send you a notification upon Subscription expiration</p>
                    </div>
                </div>
                <div class="col-xl-6 order-0 order-xl-0">
                    <div class="alert alert-warning mb-4" role="alert">
                    <h6 class="alert-heading mb-1">We need your attention!</h6>
                    <span>Your plan requires update</span>
                    </div>
                    <div class="plan-statistics">
                    <div class="d-flex justify-content-between">
                        <h6 class="mb-2">Days</h6>
                        <h6 class="mb-2">{{ Carbon\Carbon::parse(Auth::user()->upcomingInvoice()->period_end)->diffInDays(Carbon\Carbon::now()) }} of {{ Carbon\Carbon::parse(Auth::user()->upcomingInvoice()->period_end)->diffInDays(Carbon\Carbon::parse(DB::table('subscriptions')->where('user_id',Auth::user()->id)->latest()->first()->created_at)) }} Days</h6>
                    </div>
                    <div class="progress mb-1">
                        <div class="progress-bar" role="progressbar" style="width: {{ (Carbon\Carbon::parse(Auth::user()->upcomingInvoice()->period_end)->diffInDays(Carbon\Carbon::now()) / Carbon\Carbon::parse(Auth::user()->upcomingInvoice()->period_end)->diffInDays(Carbon\Carbon::now()))*100}}%;" aria-valuenow="{{ Carbon\Carbon::parse(Auth::user()->upcomingInvoice()->period_end)->diffInDays(Carbon\Carbon::now())}}" aria-valuemin="0" aria-valuemax="30"></div>

                    </div>
                    <p>{{ Carbon\Carbon::parse(Auth::user()->upcomingInvoice()->period_end)->diffInDays(Carbon\Carbon::now()) }} days remaining until your plan requires update</p>
                    </div>
                </div>
                <div class="col-12 order-2 order-xl-0">
                    <a class="btn btn-label-danger cancel-subscription" href="{{ route('customer.cancel-subscribe') }}">Cancel Subscription</a>
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
                            @if (Auth::user()->pm_type == 'visa')
                            <img class="mb-3 img-fluid" src="{{ asset('assets/backend/')}}/img/icons/payments/visa.png" alt="Visa Card"> 
                            @else
                            <img class="mb-3 img-fluid" src="{{ asset('assets/backend/')}}/img/icons/payments/mastercard.png" alt="Master Card"> 
                            @endif
                            <h6 class="mb-1">{{ Auth::user()->name }}</h6>
                            <span class="card-number">&#8727;&#8727;&#8727;&#8727; &#8727;&#8727;&#8727;&#8727; &#8727;&#8727;&#8727;&#8727; {{ Auth::user()->pm_last_four }}</span>
                        </div>
                        <div class="d-flex flex-column text-start text-lg-end">
                            <div class="d-flex order-sm-0 order-1 mt-3">
                                <a class="btn btn-label-danger cancel-subscription mb-3" href="{{ route('customer.cancel-subscribe') }}">Cancel Subscription</a>
                            </div>
                            {{-- <small class="mt-sm-auto mt-2 order-sm-1 order-0">Card expires at 12/26</small> --}}
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!--/ Payment Methods -->

            <div class="card mb-4">
                <div class="table-responsive mb-3">
                    <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                    <div class="card-header align-items-center">
                        <h5 class="card-action-title mb-0">Payment Methods</h5>
                    </div>
                    
                    <table class="table datatable-invoice border-top dataTable no-footer dtr-column" id="DataTables_Table_1" role="grid" aria-describedby="DataTables_Table_1_info" style="width: 679px;">
                    <thead>
                        <tr role="row">
                            <th class="sorting sorting_desc" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 66px;" aria-label="ID: activate to sort column ascending" aria-sort="descending">ID</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 45px;" aria-label=": activate to sort column ascending"><i class="bx bx-trending-up"></i></th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 66px;" aria-label="Total: activate to sort column ascending">Total</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 125px;" aria-label="Issued Date: activate to sort column ascending">Issued Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (Auth::user()->invoices() as $key => $item)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td><span data-bs-toggle="tooltip" data-bs-html="true" title="" data-bs-original-title="<span>Sent<br> <strong>Balance:</strong> ${{ $item->amount_paid /100 }}.00<br> <strong>Due Date:</strong> {{ Carbon\Carbon::parse($item->created)->format('d/m/Y') }}</span>" aria-label="<span>Sent<br> <strong>Balance:</strong> 0<br> <strong>Due Date:</strong> 05/03/2022</span>"><span class="badge badge-center rounded-pill bg-label-secondary w-px-30 h-px-30 "><i class="bx bx-mail-send bx-xs"></i></span></span></td>
                            <td>${{ $item->amount_paid /100}}.00</td>
                            <td> {{ Carbon\Carbon::parse($item->created)->format('d/m/Y') }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                    
                </div>
                </div>
                </div>
        
        </div>
        <!--/ User Content -->
    </div>
                
</div>
@endsection
@push('js')
@endpush