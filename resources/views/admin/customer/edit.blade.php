@extends('layouts.backend.admin.app')
@section('title','User Settings')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 breadcrumb-wrapper mb-4"><span class="text-muted fw-light">Account Settings /</span> Create New Account</h4>
    <div class="row">
        <div class="col-xl-12">
        <div class="nav-align-top mb-4">
            
            <div class="tab-content" style="padding: 0 !important;">
            <!-- Update Profile Info -->
                <div class="tab-pane fade show active" id="navs-pills-top-home" role="tabpanel">

                    <h5 class="card-header pb-0 !important;">Profile Details</h5>
                    
                    <form method="POST" action="{{ route('admin.freelancer.update',$user->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="row">
                                <div class="mb-3 col-md-12">
                                    <label for="name" class="form-label">Full Name</label>
                                    <input class="form-control" type="text" id="name" name="name" autofocus placeholder="Enter You full name" value="{{ $user->name }}"/>
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label for="email" class="form-label">E-mail</label>
                                    <input class="form-control" type="email" id="email" name="email"placeholder="Enter your valid email" value="{{ $user->email }}" />
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label for="password" class="form-label">New Password</label>
                                    <input class="form-control" type="password" id="password" name="password"placeholder="Enter New password" />
                                </div>
                            </div>
                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary me-2">Update Info</button>
                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>      
</div>
@endsection
@push('js')
<script src="{{ asset('assets/backend/')}}/js/pages-account-settings-account.js"></script>
<!--<script src="{{ asset('assets/backend/')}}/js/pages-account-settings-security.js"></script>-->
<script src="{{ asset('assets/backend/')}}/vendor/libs/cleavejs/cleave.js"></script>
<script src="{{ asset('assets/backend/')}}/vendor/libs/cleavejs/cleave-phone.js"></script>
@endpush