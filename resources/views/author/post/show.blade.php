@extends('layouts.backend.author.app')
@section('title','Show Post')
@section('content')
<div class="container-xxl">
<a href="{{ route('author.post.index') }}" class="btn btn-danger"><i class="bx bxs-left-arrow-alt"></i> Back</a>
</div>
<div class="container-xxl flex-grow-1 container-p-y">

    <div class="row">
      <div class="col-xl-6 col-12">
        <div class="card mb-4" id="card-block">
          <div class="card-body">
            <h4>{{ $post->title }}</h4>
            <small class="badge rounded-pill mb-2 bg-label-primary"><span style="font-weight: 700;">Author: </span>{{ $post->user->name }}</small>
            <small class="badge rounded-pill mb-2 bg-label-secondary"><span style="font-weight: 700;">Date: </span>{{ $post->created_at->toDayDateTimeString() }}</small>
            <hr>
            <div class="text-light small fw-semibold mb-2">Meta Description</div>
                <p>{{ $post->meta_desc }}</p>
          </div>
        </div>
      </div>

      <div class="col-xl-6 col-12">
        <div class="card mb-2">
          <h5 class="card-header">Posts Tag & Category</h5>
          <div class="card-body">
            <div class="text-light small fw-semibold">Category</div>
            <div class="demo-inline-spacing">
              @foreach($post->categories as $category)
                <span class="badge bg-success">{{ $category->name }}</span>
              @endforeach
            </div>
            <div class="text-light mt-4 small fw-semibold">Tags</div>
            <div class="demo-inline-spacing">
              @foreach($post->tags as $tag)
                  <span class="badge bg-primary">{{ $tag->name }}</span>
              @endforeach
            </div>
          </div>
        </div>
      </div>
      

      
    </div>

    <div class="row">
      <div class="col-xl-8 col-12">
        <div class="card mb-4" id="card-block">
          <div class="card-body">
            <h4>Post Description</h4>
            <hr>
            {!! $post->body !!}
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 mb-3">
        <div class="card h-100">
          <div class="card-body">
            <h5 class="card-title">Feature Image</h5>
            <img class="img-fluid d-flex mx-auto my-4" src="{{ Storage::disk('public')->url('post/').$post->image }}" alt="Card image cap">
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <h5 class="card-header">Take Action</h5>
          <hr class="m-0">
          <div class="card-body">
            <button type="button" class="btn btn-danger">
            <i class="bx bxs-trash"></i>  
            Delete</button>
          </div>
        </div>
      </div>
    </div>
</div>
      
@endsection