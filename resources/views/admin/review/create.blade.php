@extends('layouts.backend.admin.app')
@section('title','Create Reviews')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    
    <div class="row">
        <!-- FormValidation -->
        <div class="col-12">
            <div class="card">
            <h5 class="card-header">Add New Review</h5>
            <div class="card-body">

                <form method="POST" action="{{ route('admin.review.store') }}" enctype="multipart/form-data" id="formValidationExamples" class="row g-3">
                @csrf
                    <div class="col-md-4">
                        <label class="form-label" for="name">Name</label>
                        <input type="text" id="name" class="form-control" placeholder="Customer Nname" name="name" />
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="designation">Designation</label>
                        <input type="text" id="designation" class="form-control" placeholder="Business Role" name="designation" />
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="rating">Rating</label>
                        <input type="text" id="rating" class="form-control" placeholder="Rate Us" name="rating" />
                    </div>
                    <div class="col-md-12">
                        <label for="image" class="form-label">Select Thumbnil Image</label>
                        <input class="form-control" id="image" type="file" name="image">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="body">Write Review</label>
                        <textarea class="form-control" id="body" placeholder="eButify is really awesome tool for facebook and tiktok product research...." name="body" rows="6"></textarea>
                    </div>
                    
                    <div class="col-12">
                        <a href="{{ route('admin.aliexpress.index') }}" class="btn btn-danger">Back</a>
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