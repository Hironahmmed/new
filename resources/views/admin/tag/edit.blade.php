@extends('layouts.backend.admin.app')
@section('title','Edit Tag')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    
    <div class="row">
    <!-- FormValidation -->
    <div class="col-12">
        <div class="card">
        <h5 class="card-header">Edit Tag</h5>
        <div class="card-body">

            <form method="POST" action="{{ route('admin.tag.update', $tag->id ) }}" id="formValidationExamples" class="row g-3">
            @csrf
            @method('PUT')
                <div class="col-md-6">
                    <label class="form-label" for="formValidationName">Tag Name</label>
                    <input type="text" id="name" class="form-control" placeholder="Make Tag" name="name" value="{{ $tag->name }}" />
                </div>

                <div class="col-12">
                    <a href="{{ route('admin.tag.index') }}" class="btn btn-danger">Back</a>
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