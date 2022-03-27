@extends('layouts.backend.admin.app')
@section('title','Edit Country')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
            
    <div class="row">
        <!-- FormValidation -->
        <div class="col-12">
            <div class="card">
            <h5 class="card-header">Edit Country</h5>
            <div class="card-body">

                <form method="POST" action="{{ route('admin.country.update', $country->id ) }}" id="formValidationExamples" class="row g-3">
                @csrf
                @method('PUT')
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationName">Country Name</label>
                        <input type="text" id="name" class="form-control" placeholder="Make Country" name="name" value="{{ $country->name }}" />
                    </div>

                    <div class="col-12">
                        <a href="{{ route('admin.country.index') }}" class="btn btn-danger">Back</a>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
        <!-- /FormValidation -->
    </div>

</div>
@endsection