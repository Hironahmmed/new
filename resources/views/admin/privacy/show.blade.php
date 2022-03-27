@extends('layouts.backend.admin.app')
@section('title','Show Privacy')
@section('content')
<div class="container-xxl">
<a href="{{ route('admin.privacy.index') }}" class="btn btn-danger"><i class="bx bxs-left-arrow-alt"></i> Back</a>
</div>
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-xl-12 col-12">
            <div class="card mb-4" id="card-block">
                <div class="card-body">
                  <h4>Post Description</h4>
                  <hr>
                  {!! $privacy->body !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')


@endpush