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
                    
                    <form method="POST" action="{{ route('admin.freelancer.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="d-flex align-items-start align-items-sm-center gap-4">
                            
                            <div class="button-wrapper">
                                <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                <span class="d-none d-sm-block">Upload new photo</span>
                                <i class="bx bx-upload d-block d-sm-none"></i>
                                <input type="file" id="upload" name="image" class="account-file-input" hidden accept="image/png, image/jpeg" />
                                </label>
                                <p class="mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                            </div>
                            </div>
                        </div>
                        <hr class="my-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="mb-3 col-md-12">
                                    <label for="name" class="form-label">Full Name</label>
                                    <input class="form-control" type="text" id="name" name="name" autofocus placeholder="Enter You full name"/>
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label for="email" class="form-label">E-mail</label>
                                    <input class="form-control" type="email" id="email" name="email"placeholder="Enter your valid email" />
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label for="password" class="form-label">Password</label>
                                    <input class="form-control" type="password" id="password" name="password"placeholder="Enter your password" />
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label for="organization" class="form-label">About User</label>
                                    <textarea class="form-control" rows="5" id="about" name="about"></textarea>
                                </div>
                            </div>
                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary me-2">Create User</button>
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