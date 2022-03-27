@extends('layouts.backend.admin.app')
@section('title','Edit Post')
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/backend/')}}/vendor/libs/bootstrap-select/bootstrap-select.css" />
    <link rel="stylesheet" href="{{ asset('assets/backend/')}}/vendor/libs/select2/select2.css" />
    <link rel="stylesheet" href="{{ asset('assets/backend/')}}/vendor/libs/flatpickr/flatpickr.css" />
    <link rel="stylesheet" href="{{ asset('assets/backend/')}}/vendor/libs/tagify/tagify.css" />
    
    <!-- include summernote css/js -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
@endpush
@section('content')
<div class="container-xxl">
<a href="{{ route('admin.post.index') }}" class="btn btn-danger">Back</a>
</div>
<div class="container-xxl flex-grow-1 container-p-y">
            
    <div class="row">
        <div class="col-12">
            <div class="card">
            <h5 class="card-header">Edit Post</h5>
            <div class="card-body">

                <form method="POST" action="{{ route('admin.post.update',$post->id) }}" enctype="multipart/form-data" id="formValidationExamples" class="row g-3">
                @csrf
                @method('PUT')
                <div class="col-md-6">
                    <label class="form-label" for="formValidationName">Post Title</label>
                    <input type="text" id="title" class="form-control" placeholder="Post Title" name="title" value="{{ $post->title }}"/>
                </div>
                <div class="col-md-6 {{ $errors->has('categories') ? 'focused error' : ''}}">
                    <label class="form-label" for="formValidationHobbies">Select Category</label>
                    <select class="selectpicker hobbies-select w-100" id="category" data-style="btn-default" data-icon-base="bx" data-tick-icon="bx-check text-white" name="categories[]" multiple>
                        @foreach($categories as $category)
                            <option

                            @foreach($post->categories as $postCategory)
                                {{ $postCategory->id == $category->id ? 'selected' : '' }}
                            @endforeach
                            
                            value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-6">
                    <label class="form-label" for="formValidationHobbies">Select Tags</label>
                    <select class="selectpicker hobbies-select w-100" id="tag" data-style="btn-default" data-icon-base="bx" data-tick-icon="bx-check text-white" name="tags[]" multiple>
                    @foreach($tags as $tag)
                        <option 
                        
                        @foreach($post->tags as $postTag)
                                {{ $postTag->id == $tag->id ? 'selected' : '' }}
                        @endforeach

                        value="{{ $tag->id }}">{{ $tag->name }}</option>
                    @endforeach
                    </select>
                </div>

                
                <div class="col-md-6">
                    <label for="image" class="form-label">Select Thumbnil Image</label>
                    <input class="form-control" type="file" name="image">
                </div>

                <div class="col-md-6">
                    <label class="form-label" for="formValidationBio">Meta Description</label>
                    <textarea class="form-control" id="meta_desc" name="meta_desc" rows="3">{{ $post->meta_desc }}</textarea>
                </div>
                <div class="col-md-6">
                   
                    <div class="row">
                        <div class="col-md-4">
                            <label class="form-label">Post Status</label>
                            <div class="form-check custom mb-2">
                                <input type="checkbox" id="publish" name="status" class="form-check-input filled-in" value="{{ $post->status == true ? '1' : '0' }}" {{ $post->status == true ? 'checked' : '' }}/>
                                <label class="form-check-label" for="formValidationGender">Publish</label>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">Is Featured?</label>
                            <div class="form-check custom mb-2">
                                <input type="checkbox" id="featured" name="featured" class="form-check-input filled-in" value="{{ $post->featured == true ? '1' : '0' }}" {{ $post->featured == true ? 'checked' : '' }}/>
                                <label class="form-check-label" for="formValidationGender">Featured</label>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">Is Popular?</label>
                            <div class="form-check custom mb-2">
                                <input type="checkbox" id="popular" name="popular" class="form-check-input filled-in" value="{{ $post->popular == true ? '1' : '0' }}" {{ $post->popular == true ? 'checked' : '' }}/>
                                <label class="form-check-label" for="formValidationGender">Popular</label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-2">
                        <p>Check this radio button if you want to publish this post quickly or want to show on featured section or want to show on popular section otherwise your post will never publish.</p>
                    </div>
                </div>

                <!-- Post Description -->

                <div class="col-12 form-group">
                    <label class="form-check-label mb-2" for="postdescription">Post Description</label>
                    
                    <textarea class="form-control" name="body" id="summernote">{{ $post->body }}</textarea>
                    <script>
                        $('#summernote').summernote({
                        placeholder: 'Post Description',
                        tabsize: 2,
                        height: 120,
                        toolbar: [
                            ['style', ['style']],
                            ['font', ['bold', 'underline', 'clear']],
                            ['color', ['color']],
                            ['para', ['ul', 'ol', 'paragraph']],
                            ['table', ['table']],
                            ['insert', ['link', 'picture', 'video']],
                            ['view', ['fullscreen', 'codeview', 'help']]
                        ]
                        });
                    </script>
                </div>

                
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Submit For Review</button>
                </div>
                </form>
            </div>
            </div>
        </div>
    </div>

</div>
          
@endsection
@push('js')
<script src="{{ asset('assets/backend/')}}/js/forms-selects.js"></script>
    <script src="{{ asset('assets/backend/')}}/vendor/libs/select2/select2.js"></script>
    <script src="{{ asset('assets/backend/')}}/vendor/libs/tagify/tagify.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.10/dist/sweetalert2.all.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    <script src="{{ asset('assets/backend/')}}/vendor/libs/bootstrap-select/bootstrap-select.js"></script>

@endpush