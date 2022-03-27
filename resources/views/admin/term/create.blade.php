@extends('layouts.backend.admin.app')
@section('title','Create New Term')
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
<a href="{{ route('admin.term.index') }}" class="btn btn-danger">Back</a>
</div>
<div class="container-xxl flex-grow-1 container-p-y">
            
    <div class="row">
        <div class="col-12">
            <div class="card">
            <h5 class="card-header">Add New Term</h5>
            <div class="card-body">

                <form method="POST" action="{{ route('admin.term.store') }}" enctype="multipart/form-data" id="formValidationExamples" class="row g-3">
                @csrf

                <div class="col-12 form-group" style="margin-top: 0px !important;">
                    <label class="form-check-label mb-2" for="postdescription">Term Description</label>
                    
                    <textarea class="form-control" name="body" id="summernote"></textarea>
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