@extends('layouts.backend.customer.demoapp')
@section('title','eButify Dashboard')
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/backend/')}}/vendor/libs/bootstrap-select/bootstrap-select.css" />
    <link rel="stylesheet" href="{{ asset('assets/backend/')}}/vendor/libs/flatpickr/flatpickr.css" />
    <link rel="stylesheet" href="{{ asset('assets/backend/')}}/vendor/libs/select2/select2.css" />
@endpush
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">

    {{-- <div class="row mb-3">
        <div class="card">
            <form action="" method="GET">

                <div class="col-12">
                    <div class="card-body" style="padding-bottom: 0rem !important;">
                        <div class="input-group">
                            <input name="searchtext" id="searchtext" class="form-control" type="text" placeholder="Search Here">
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card-body" style="padding-top: 0.5rem !important;">
                        <div class="row">
                            <div class="col-md-3 mb-1">
                                <label for="collection" class="form-label">Select Category</label>
                                <div class="select2-success">
                                    <select id="collection" name="collection" class="select2 form-select">
                                        <option value="">Select</option>
                                        @foreach($collections as $collection)
                                        <option value="{{ $collection }}">{{ $collection }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 mb-1">
                                <label for="country" class="form-label">Select Country</label>
                                <div class="select2-success">
                                    <select id="country" name="country" class="select2 form-select">
                                        <option value="">Select</option>
                                        @foreach($countrys as $countrys)
                                        <option value="{{ $countrys }}">{{ $countrys }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 mb-1">
                                <label for="platform" class="form-label">Select Platform</label>
                                <div class="select2-success">
                                    <select id="platform" name="platform" class="select2 form-select">
                                        <option value="">Select</option>
                                        @foreach($platforms as $platform)
                                        <option value="{{ $platform }}">{{ $platform }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 mb-1">
                                <label for="buttonType" class="form-label">Button Type</label>
                                <div class="select2-success">
                                    <select id="buttonType" name="buttonType" class="select2 form-select">
                                        <option value="">Select</option>
                                        @foreach($buttonTypes as $buttonType)
                                        <option value="{{ $buttonType }}">{{ $buttonType }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2 mb-1">
                                <label for="productType" class="form-label">Product Type</label>
                                    <select id="productType" name="productType" class="select2 form-select">
                                        <option value="">Select</option>
                                        @foreach($productTypes as $productType)
                                        <option value="{{ $productType }}">{{ $productType }}</option>
                                        @endforeach
                                    </select>
                            </div>
                            <div class="col-md-2 mb-1">
                                <label for="saturation" class="form-label">Saturation Level</label>
                                <select id="saturation" name="saturation" class="select2 form-select">
                                    <option value="">select</option>
                                    @foreach($saturations as $saturation)
                                    <option value="{{ $saturation }}">{{ $saturation }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-2">
                                <label for="media" class="form-label">Media Type</label>
                                <select id="media" name="media" class="select2 form-select form-control dob-picker cvv-code-mask">
                                    <option value="">Select Type</option>
                                    @foreach($media as $media)
                                    <option value="{{ $media }}">{{ $media }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-4 mt-0.5">
                                <div class="card-body" style="padding-left: 0rem !important;">
                                    <button type="submit" class="btn btn-success">Get All Result</button>
                                    <a href="{{ route('customer.facebook') }}" class="btn btn-danger">Reset Filter</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div> --}}

    <div class="row" id="post-data">
        @forelse($facebook as $loadad)
        <div class="col-md-6 col-xl-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="product_data_wrapper mb-2">
                        <div class="product_text">
                            <span class="info-left">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center gap-3">
                                    <div class="avatar">
                                        <span class="avatar-initial rounded-circle"><img style="border-radius: 35%;" src="{{ Storage::disk('public')->url('logo/').$loadad->page_logo }}"></span>
                                    </div>
                                    <div class="card-info">
                                        <p class="card-title mb-0 me-2"> <a href="{{ $loadad->ad_link }}" target="_blank"> {{ $loadad->page_name }}</a></p>
                                        <div>
                                            <small><a href="https://{{ $loadad->shopify_website }}" target="_blank">{{ $loadad->shopify_website }}</a> </small>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </span>
                            <span>
                                <a href="{{ $loadad->ad_link }}" target="_blank" controlsdata-play="hover" type="button" class="btn btn-icon rounded-pill btn-outline-success" data-bs-toggle="tooltip" data-bs-offset="0,8" data-bs-placement="top" data-color="black" title="Click to see FB ad"><i class="fab fa-facebook-f"></i></a>
                            </span>
                        </div>
                    </div>

                    <div class="post-media player mb-2">
                        <div class="download">
                            <span class="badge rounded-pill bg-danger"><i class="bx bx-trending-up" style="margin-right: .5rem;"></i>Selling on <span style="font-weight: 700; font-size: large;">{{ $loadad->sell_on }}</span> Shopify Store</span>
                        </div>
                        @if(!$loadad->thumbnail)
                        <video oncontextmenu="return false" data-play="hover" controls="controls" preload="auto" src="{{ Storage::disk('public')->url('video/').$loadad->video }}" class="my-video">
                        </video>
                        @else
                        <img style="height: 100%; width: 100%; display: block; object-fit: fill; border-radius: 5px;" src="{{ Storage::disk('public')->url('thumbnail/').$loadad->thumbnail }}">
                        @endif
                    </div>

                    <div class="product_data_wrapper mb-2">
                        <div class="product_text">
                            <span class="info-left">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center gap-3">
                                    <div class="card-info">
                                        <a href="{{ route('democustomer.facebook.details',$loadad->slug) }}" class="text-black"><small class="card-title mb-0 me-2">{{ str_limit($loadad->title,'28') }}</small></a>
                                        <div>
                                            <small data-bs-toggle="tooltip" data-bs-offset="0,8" data-bs-placement="top" data-color="black" title="Ad Create Date"><i class="far fa-calendar-alt" style="margin-right: 0.5rem;"></i>{{ $loadad->ad_create_date }}</small>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </span>
                            <span><a href="{{ $loadad->competitor1 }}" class="btn btn-outline-primary is-light is-rounded">{{ $loadad->action }}</a></span>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div onclick="location.href='{{route('democustomer.facebook.details',$loadad->slug)}}';" class="btn-group" role="group" aria-label="Basic example">

                            <div class="btn justify-content-between" style="padding-left: 0.5rem;">
                                <div class="d-flex align-items-center">
                                <div class="card-info">
                                    <p class="card-title mb-0">{{ $loadad->order }}</p>
                                    <div>
                                        <small>Order</small>
                                    </div>
                                </div>
                                </div>
                            </div>

                            <div class="btn justify-content-between" style="padding-left: 0.5rem;">
                                <div class="d-flex align-items-center">
                                <div class="card-info">
                                    <p class="card-title mb-0">${{ $loadad->price }}</p>
                                    <div>
                                        <small>Price</small>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="btn justify-content-between" style="padding-left: 0.5rem;">
                                <div class="d-flex align-items-center">
                                <div class="card-info">
                                    <p class="card-title mb-0">${{ $loadad->cost }}</p>
                                    <div>
                                        <small>Cost</small>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="btn justify-content-between" style="padding-left: 0.5rem;">
                                <div class="d-flex align-items-center">
                                <div class="card-info">
                                    <p class="card-title mb-0"><span class="badge rounded-pill bg-success mb-0">${{ $loadad->profit }}</span></p>
                                    <div>
                                        <small>Profit</small>
                                    </div>
                                </div>
                                </div>
                            </div>

                            
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        @empty
        <span class="text-center text-danger card-header h2">No ads available..</span>
        @endforelse
    </div>
</div>
<div class="ajax-load text-center" style="display: none;">
    <p><img style="height: 30px;" src="{{ asset('assets/backend/')}}/img/site/loading-ad.gif" alt="Loading..."> Loading More Data</p>
</div>
@endsection

@push('js')
    <script src="{{ asset('assets/backend/')}}/vendor/libs/bootstrap-select/bootstrap-select.js"></script>
    <script src="{{ asset('assets/backend/')}}/vendor/libs/cleavejs/cleave.js"></script>
    <script src="{{ asset('assets/backend/')}}/vendor/libs/cleavejs/cleave-phone.js"></script>
    <script src="{{ asset('assets/backend/')}}/vendor/libs/moment/moment.js"></script>
    <script src="{{ asset('assets/backend/')}}/vendor/libs/flatpickr/flatpickr.js"></script>
    <script src="{{ asset('assets/backend/')}}/vendor/libs/select2/select2.js"></script>

    <script src="{{ asset('assets/backend/')}}/js/main.js"></script>
    <script src="{{ asset('assets/backend/')}}/js/form-layouts.js"></script>

    <script src="{{ asset('assets/backend/')}}/js/jquery.hoverplay.js"></script>
    
@endpush