@extends('layouts.backend.admin.app')
@section('title','Edit Collection')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">

    <div class="row">
        <!-- FormValidation -->
        <div class="col-12">
            <div class="card">
            <h5 class="card-header">Edit Collection</h5>
            <div class="card-body">

                <form method="POST" action="{{ route('admin.collection.update', $collection->id ) }}" id="formValidationExamples" class="row g-3">
                @csrf
                @method('PUT')
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationName">Collection Name</label>
                        <input type="text" id="name" class="form-control" placeholder="Make Collection" name="name" value="{{ $collection->name }}" />
                    </div>

                    <div class="col-12">
                        <a href="{{ route('admin.collection.index') }}" class="btn btn-danger">Back</a>
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