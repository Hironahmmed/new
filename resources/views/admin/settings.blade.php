
@extends('layouts.backend.admin.app')
@section('title','User Settings')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    
    <div class="row">
        <div class="col-xl-12">
        <div class="nav-align-top mb-4">
            <ul class="nav nav-pills mb-3" role="tablist">
                <li class="nav-item">
                    <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-home" aria-controls="navs-pills-top-home" aria-selected="true"><i class="bx bx-user me-1"></i> Account</button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-profile" aria-controls="navs-pills-top-profile" aria-selected="false"><i class="bx bx-lock-alt me-1"></i> Security</button>
                </li>
            </ul>
            <div class="tab-content" style="padding: 0 !important;">
            <!-- Update Profile Info -->
                <div class="tab-pane fade show active" id="navs-pills-top-home" role="tabpanel">

                <h5 class="card-header pb-0 !important;">Profile Details</h5>
                    
                  <form method="POST" action="{{ route('admin.profile.update') }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT') 
                    <div class="card-body">
                        <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img src="{{ Storage::disk('public')->url('profile/').Auth::user()->image }}" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
                        <div class="button-wrapper">
                            <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                            <span class="d-none d-sm-block">Upload new photo</span>
                            <i class="bx bx-upload d-block d-sm-none"></i>
                            <input type="file" id="upload" name="image" class="account-file-input" hidden accept="image/png, image/jpeg" />
                            </label>
                            <button type="button" class="btn btn-label-secondary account-image-reset mb-4">
                            <i class="bx bx-reset d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Reset</span>
                            </button>

                            <p class="mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                        </div>
                        </div>
                    </div>
                    <hr class="my-0">
                    <div class="card-body">
                        
                        <div class="row">
                            <div class="mb-3 col-md-12">
                                <label for="name" class="form-label">Full Name</label>
                                <input class="form-control" type="text" id="name" name="name" value="{{ Auth::user()->name }}" autofocus placeholder="Enter You full name"/>
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="email" class="form-label">E-mail</label>
                                <input class="form-control" type="email" id="email" name="email" value="{{ Auth::user()->email }}" placeholder="Enter your valid email"/>
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="organization" class="form-label">Organization</label>

                                <textarea class="form-control" rows="5" id="about" name="about">{{ Auth::user()->about }}</textarea>
                            </div>
                            
                        </div>
                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary me-2">Save changes</button>
                        </div>
                        
                    </div>
                    </form>
                    
                </div>

                <!-- Cahnge Password -->
                <div class="tab-pane fade" id="navs-pills-top-profile" role="tabpanel">

                <h5 class="card-header pb-0 !important;">Change Password</h5>
                    <div class="card-body">
                      <form id="formAccountSettings" method="POST" action="{{ route('admin.password.update') }}">
                        @csrf
                        @method('PUT')
                        <div class="row">
                          <div class="mb-3 col-md-6 form-password-toggle">
                            <label class="form-label" for="currentPassword">Current Password</label>
                            <div class="input-group input-group-merge">
                              <input class="form-control" type="password" name="currentPassword" id="currentPassword" placeholder="Enter Old Password" />
                              <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="mb-3 col-md-6 form-password-toggle">
                            <label class="form-label" for="newPassword">New Password</label>
                            <div class="input-group input-group-merge">
                              <input class="form-control" type="password" id="newPassword" name="newPassword" placeholder="Enter New Password" />
                              <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                            </div>
                          </div>

                          <div class="mb-3 col-md-6 form-password-toggle">
                            <label class="form-label" for="confirmPassword">Confirm New Password</label>
                            <div class="input-group input-group-merge">
                              <input class="form-control" type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm New Password" />
                              <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                            </div>
                          </div>
                          <div class="col-12 mb-4">
                            <p class="fw-semibold mt-2">Password Requirements:</p>
                            <ul class="ps-3 mb-0">
                              <li class="mb-1">
                                Minimum 8 characters long - the more, the better
                              </li>
                              <li class="mb-1">At least one lowercase character</li>
                              <li>At least one number, symbol, or whitespace character</li>
                            </ul>
                          </div>
                          <div class="mt-2">
                            <button type="submit" class="btn btn-primary me-2">Save changes</button>
                        </div>
                        </div>
                      </form>
                    </div>

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