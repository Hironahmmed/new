@extends('layouts.backend.customer.demoapp')
@section('title','eButify Dashboard')
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/backend/')}}/vendor/libs/bootstrap-select/bootstrap-select.css" />
    <link rel="stylesheet" href="{{ asset('assets/backend/')}}/vendor/libs/flatpickr/flatpickr.css" />
    <link rel="stylesheet" href="{{ asset('assets/backend/')}}/vendor/libs/select2/select2.css" />
@endpush
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">

    <div class="row mb-3">
        <div class="card">
        <div class="col-12">
                    <div class="card-body" style="padding-bottom: 0rem !important;">
                        <div class="input-group">
                            <input name="searchtext" id="searchtext" value="" class="form-control" type="text" placeholder="Search Here">
                        </div>
                    </div>
                </div>
                <!-- Select2 -->
                <div class="col-12">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3 mb-4">
                                <label for="select2Success" class="form-label">Select Category</label>
                                <div class="select2-success">
                                    <select id="collection" name="collection" class="select2 form-select">
                                        <option value="">Select</option>
                                        @foreach($collections as $collection)
                                        <option value="{{ $collection }}">{{ $collection }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 mb-4">
                                <label for="select2Success" class="form-label">Select Country</label>
                                <div class="select2-success">
                                    <select id="country" name="country" class="select2 form-select">
                                        <option value="">Select</option>
                                        @foreach($countrys as $countrys)
                                        <option value="{{ $countrys }}">{{ $countrys }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 mb-4">
                                <label for="select2Success" class="form-label">Select Platform</label>
                                <div class="select2-success">
                                    <select id="platform" name="platform" class="select2 form-select">
                                        <option value="">Select</option>
                                        @foreach($platforms as $platform)
                                        <option value="{{ $platform }}">{{ $platform }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 mb-4">
                                <label for="select2Success" class="form-label">Button Type</label>
                                <div class="select2-success">
                                    <select id="buttonType" name="buttonType" class="select2 form-select">
                                        <option value="">Select</option>
                                        @foreach($buttonTypes as $buttonType)
                                        <option value="{{ $buttonType }}">{{ $buttonType }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="productType" class="form-label">Product Type</label>
                                <select id="productType" name="productType" class="select2 form-select">
                                    <option value="">Select</option>
                                    @foreach($productTypes as $productType)
                                    <option value="{{ $productType }}">{{ $productType }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="select2Basic" class="form-label">Saturation Level</label>
                                <select id="saturation" name="saturation" class="select2 form-select form-control dob-picker cvv-code-mask">
                                    <option value="">select</option>
                                    @foreach($saturations as $saturation)
                                    <option value="{{ $saturation }}">{{ $saturation }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-4 mt-0.5">
                                <div class="card-body" style="padding-left: 0rem !important;">
                                    <button type="submit" data-bs-toggle="modal" data-bs-target="#addNewCCModal" class="btn btn-success">Get All Result</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Select2 -->
        </div>
        
    </div>

    <div class="row">
        @forelse($tiktok as $tiktok)
        <div class="col-md-6 col-xl-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="product_data_wrapper mb-2">
                        <div class="product_text">
                            <span class="info-left">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center gap-3">
                                    <div class="avatar">
                                        <span class="avatar-initial rounded-circle"><img style="border-radius: 35%;" src="{{ Storage::disk('public')->url('logo/').$tiktok->page_logo }}"></span>
                                    </div>
                                    <div class="card-info">
                                        <p class="card-title mb-0 me-2"><a data-bs-toggle="modal" data-bs-target="#addNewCCModal" href="{{ $tiktok->tiktok_link }}"> {{ $tiktok->page_name }}</a></p>
                                        <div>
                                            <small><a data-bs-toggle="modal" data-bs-target="#addNewCCModal" href="https://{{ $tiktok->shopify_website }}">{{ $tiktok->shopify_website }}</a></small>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </span>
                            <span>
                                <a href="javascript:void(0);" class="btn btn-icon rounded-pill btn-outline-success" data-bs-toggle="modal" data-bs-target="#addNewCCModal" title="Add to favorite list">
                                    <i class="fas fa-heart"></i>
                                </a>
                            </span>
                        </div>
                    </div>

                    <div class="post-media player mb-2">
                        <div class="download">
                            <span class="badge rounded-pill bg-danger"><i class="bx bx-trending-up" style="margin-right: .5rem;"></i>Selling on <span style="font-weight: 700; font-size: large;">{{ $tiktok->sell_on }}</span> Shopify Store</span>
                        </div>
                        <video controls="controls" data-play="hover" src="{{ Storage::disk('public')->url('video/').$tiktok->video }}" class="my-video">
                        </video>
                    </div>

                    <div class="product_data_wrapper mb-2">
                        <div class="product_text">
                            <span class="info-left">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center gap-3">
                                    <div class="card-info">
                                    <a href="{{ route('demo.tiktok.details',$tiktok->slug) }}" class="text-black"><small class="card-title mb-0 me-2">{{ str_limit($tiktok->title,'28') }}</small></a>
                                        <div>
                                            <small data-bs-toggle="tooltip" data-bs-offset="0,8" data-bs-placement="top" data-color="black" title="Ad Create Date"><i class="far fa-calendar-alt" style="margin-right: 0.5rem;"></i>{{ $tiktok->ad_create_date }}</small>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </span>
                            <span><a href="{{ route('demo.tiktok.details',$tiktok->slug) }}" class="btn btn-outline-primary is-light is-rounded">View Details</a></span>
                        </div>
                    </div>

                    <hr>


                    <div class="row">
                        <div class="btn-group" role="group" aria-label="Basic example">

                            <div class="btn justify-content-between">
                                <div class="d-flex align-items-center">
                                <div class="card-info">
                                    <p class="card-title mb-0" style="font-weight: 700;">{{ $tiktok->impression }}</p>
                                    <div>
                                        <small>Imprassion</small>
                                    </div>
                                </div>
                                </div>
                            </div>

                            <div class="btn justify-content-between">
                                <div class="d-flex align-items-center">
                                <div class="card-info">
                                    <p class="card-title mb-0" style="font-weight: 700;">{{ $tiktok->days }}</p>
                                    <div>
                                        <small>Day</small>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="btn justify-content-between">
                                <div class="d-flex align-items-center">
                                <div class="card-info">
                                    <p class="card-title mb-0" style="font-weight: 700;">{{ $tiktok->conversation }}</p>
                                    <div>
                                        <small>Conversion</small>
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