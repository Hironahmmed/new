@extends('layouts.backend.customer.demoapp')
@section('title','Saved TikTok')
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/backend/')}}/vendor/libs/bootstrap-select/bootstrap-select.css" />
    <link rel="stylesheet" href="{{ asset('assets/backend/')}}/vendor/libs/flatpickr/flatpickr.css" />
    <link rel="stylesheet" href="{{ asset('assets/backend/')}}/vendor/libs/select2/select2.css" />
@endpush
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <span class="text-center text-danger h2" >You don't have any favorite ads yet..</span>
        <span class="text-center text-danger">Browse Ads and add to favorite Now<br><a data-bs-toggle="modal" data-bs-target="#addNewCCModal" href="{{ route('register') }}" type="button" class="btn btn-primary mt-3">View TikTok Ad</a></span>
    </div>

</div>
@endsection

@push('js')
    <script src="{{ asset('assets/backend/')}}/vendor/libs/bootstrap-select/bootstrap-select.js"></script>
    <script src="{{ asset('assets/backend/')}}/vendor/libs/cleavejs/cleave.js"></script>
    <script src="{{ asset('assets/backend/')}}/vendor/libs/cleavejs/cleave-phone.js"></script>
    <script src="{{ asset('assets/backend/')}}/vendor/libs/moment/moment.js"></script>
    <script src="{{ asset('assets/backend/')}}/vendor/libs/flatpickr/flatpickr.js"></script>
    <script src="{{ asset('assets/backend/')}}/vendor/libs/select2/select2.js"></script>

    <script src="{{ asset('assets/backend/')}}/js/main.js"></script>
    <script src="{{ asset('assets/backend/')}}/js/form-layouts.js"></script>

    <script src="{{ asset('assets/backend/')}}/js/jquery.hoverplay.js"></script>
@endpush