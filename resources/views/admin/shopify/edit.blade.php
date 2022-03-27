@extends('layouts.backend.admin.app')
@section('title','Edit Product')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
            
            <div class="row">
            <!-- FormValidation -->
            <div class="col-12">
                <div class="card">
                <h5 class="card-header">Edit Product</h5>
                <div class="card-body">

                    <form method="POST" action="{{ route('admin.shopify.update', $shopify->id ) }}" id="formValidationExamples" class="row g-3">
                    @csrf
                    @method('PUT')
                        <div data-repeater-list="group-a">
                            <div data-repeater-item>
                                <div class="row">
                                    <div class="mb-3 col-lg-6 col-xl-4 col-12 mb-0">
                                        <label class="form-label" for="shopify_link">Main Store Link</label>
                                        <input type="text" id="shopify_link" name="shopify_link" class="form-control" value="{{ $shopify->shopify_link }}"/>
                                    </div>
                                    <div class="mb-3 col-lg-6 col-xl-4 col-12 mb-0">
                                        <label class="form-label" for="shopify_traffic">Monthly Traffic</label>
                                        <input type="text" id="shopify_traffic" name="shopify_traffic" class="form-control" value="{{ $shopify->shopify_traffic }}"/>
                                    </div>
                                    <div class="mb-3 col-lg-6 col-xl-4 col-12 mb-0">
                                        <label class="form-label" for="shopify_all_link">Collection Link</label>
                                        <input type="text" id="shopify_all_link" name="shopify_all_link" class="form-control" value="{{ $shopify->shopify_all_link }}"/>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="mb-3 col-lg-6 col-xl-3 col-12 mb-0">
                                    <div class="link-box p-2" style="border: 1px solid #d4d4d4; border-radius: 5px; padding: 10px;">
                                    <p style="text-align: center;" class="form-label">1st Four Products</p>
                                        <div class="mb-3">
                                            <input type="text" id="title_one" name="title_one" class="form-control" placeholder="Product Name" value="{{ $shopify->title_one }}"/>
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" id="image_one" name="image_one" class="form-control" placeholder="Product Image Link" value="{{ $shopify->image_one }}"/>
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" id="shopify_one" name="shopify_one" class="form-control" placeholder="Product Link" value="{{ $shopify->shopify_one }}"/>
                                        </div>
                                        <div class="mb-0">
                                            <input type="text" id="ali_one" name="ali_one" class="form-control" placeholder="Aliexpress Link" value="{{ $shopify->ali_one }}"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 col-lg-6 col-xl-3 col-12 mb-0">
                                    <div class="link-box p-2" style="border: 1px solid #d4d4d4; border-radius: 5px; padding: 10px;">
                                    <p style="text-align: center;" class="form-label">2nd Four Products</p>
                                        <div class="mb-3">
                                            <input type="text" id="title_two" name="title_two" class="form-control" placeholder="Product Name" value="{{ $shopify->title_two }}"/>
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" id="image_two" name="image_two" class="form-control" placeholder="Product Image Link" value="{{ $shopify->image_two }}"/>
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" id="shopify_two" name="shopify_two" class="form-control" placeholder="Product Link" value="{{ $shopify->shopify_two }}"/>
                                        </div>
                                        <div class="mb-0">
                                            <input type="text" id="ali_two" name="ali_two" class="form-control" placeholder="Aliexpress Link" value="{{ $shopify->ali_two }}"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 col-lg-6 col-xl-3 col-12 mb-0">
                                    <div class="link-box p-2" style="border: 1px solid #d4d4d4; border-radius: 5px; padding: 10px;">
                                    <p style="text-align: center;" class="form-label">3rd Four Products</p>
                                        <div class="mb-3">
                                            <input type="text" id="title_three" name="title_three" class="form-control" placeholder="Product Name" value="{{ $shopify->title_three }}"/>
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" id="image_three" name="image_three" class="form-control" placeholder="Product Image Link" value="{{ $shopify->image_three }}"/>
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" id="shopify_three" name="shopify_three" class="form-control" placeholder="Product Link" value="{{ $shopify->shopify_three }}"/>
                                        </div>
                                        <div class="mb-0">
                                            <input type="text" id="ali_three" name="ali_three" class="form-control" placeholder="Aliexpress Link" value="{{ $shopify->ali_three }}"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 col-lg-6 col-xl-3 col-12 mb-0">
                                    <div class="link-box p-2" style="border: 1px solid #d4d4d4; border-radius: 5px; padding: 10px;">
                                    <p style="text-align: center;" class="form-label">4th Four Products</p>
                                        <div class="mb-3">
                                            <input type="text" id="title_four" name="title_four" class="form-control" placeholder="Product Name" value="{{ $shopify->title_four }}"/>
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" id="image_four" name="image_four" class="form-control" placeholder="Product Image Link" value="{{ $shopify->image_four }}"/>
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" id="shopify_four" name="shopify_four" class="form-control" placeholder="Product Link" value="{{ $shopify->shopify_four }}"/>
                                        </div>
                                        <div class="mb-0">
                                            <input type="text" id="ali_four" name="ali_four" class="form-control" placeholder="Aliexpress Link" value="{{ $shopify->ali_four }}"/>
                                        </div>
                                    </div>
                                </div>
                                    
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Submit For Review</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
            </div>
            <!-- /FormValidation -->
            </div>

          </div>
          @endsection