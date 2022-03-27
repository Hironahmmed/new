@extends('layouts.backend.admin.app')
@section('title','Create Category')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
            
            <div class="row">
            <!-- FormValidation -->
            <div class="col-12">
                <div class="card">
                <h5 class="card-header">Add New Category</h5>
                <div class="card-body">

                    <form method="POST" action="{{ route('admin.category.store') }}" id="formValidationExamples" class="row g-3">
                    @csrf
                        <div class="col-md-6">
                            <label class="form-label" for="formValidationName">Category Name</label>
                            <input type="text" id="name" class="form-control" placeholder="Make Category" name="name" />
                        </div>

                        <div class="col-12">
                            <a href="{{ route('admin.category.index') }}" class="btn btn-danger">Back</a>
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