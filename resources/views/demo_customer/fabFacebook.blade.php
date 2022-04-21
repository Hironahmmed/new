@extends('layouts.backend.customer.app')
@section('title','eButify Dashboard')
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/backend/')}}/vendor/libs/bootstrap-select/bootstrap-select.css" />
    <link rel="stylesheet" href="{{ asset('assets/backend/')}}/vendor/libs/flatpickr/flatpickr.css" />
    <link rel="stylesheet" href="{{ asset('assets/backend/')}}/vendor/libs/select2/select2.css" />
@endpush
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">

    <div class="row">
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

                    <div onclick="location.href='{{route('customer.facebook.details',$loadad->slug)}}';" class="post-media player mb-2">
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
                                        <a href="{{ route('customer.facebook.details',$loadad->slug) }}" class="text-black"><small class="card-title mb-0 me-2">{{ str_limit($loadad->title,'28') }}</small></a>
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
                        <div onclick="location.href='{{route('customer.facebook.details',$loadad->slug)}}';" class="btn-group" role="group" aria-label="Basic example">

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
                    <div class="row">
                        <div class="btn-group" role="group" aria-label="Basic example">

                            <a href="javascript:void(0);" onclick="document.getElementById('favorite-form-{{ $loadad->id }}').submit()" class="btn btn-facebook"><i class="{{ !Auth::user()->favorite_facebooks->where('pivot.facebook_id',$loadad->id)->count() == 0 ? 'text-success' : 'text-white' }} fas fa-heart" style="margin-right: .8rem;"></i>Favorite</a>

                            <form id="favorite-form-{{ $loadad->id }}" method="POST" action="{{ route('customer.facebook.favorite',$loadad->id) }}" style="display: none;">
                                @csrf
                            </form>

                            <a href="{{ route('customer.facebook.details',$loadad->slug) }}" class="btn btn-facebook text-white"><i class="fas fa-info-circle" style="margin-right: .8rem;"></i>Details</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        @empty
        <span class="text-center text-danger h2" >You don't have any favorite ads yet..</span>
        <span class="text-center text-danger">Browse Ads and add to favorite Now<br><a href="{{ route('customer.facebook') }}" type="button" class="btn btn-primary mt-3">View Facebook Ad</a></span>
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