@extends('layouts.backend.customer.app')
@section('title','Saved TikTok')
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/backend/')}}/vendor/libs/bootstrap-select/bootstrap-select.css" />
    <link rel="stylesheet" href="{{ asset('assets/backend/')}}/vendor/libs/flatpickr/flatpickr.css" />
    <link rel="stylesheet" href="{{ asset('assets/backend/')}}/vendor/libs/select2/select2.css" />
@endpush
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">

    <div class="row">
        @forelse($tiktok as $tiktok)
        <div class="col-md-6 col-xl-4">
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
                                        <p class="card-title mb-0 me-2"><a href="{{ $tiktok->tiktok_link }}"> {{ $tiktok->page_name }}</a></p>
                                        <div>
                                            <small><a href="https://{{ $tiktok->shopify_website }}">{{ $tiktok->shopify_website }}</a></small>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </span>
                            <span>
                                <a href="javascript:void(0);" onclick="document.getElementById('favorite-form-{{ $tiktok->id }}').submit()" class="btn btn-icon rounded-pill {{ !Auth::user()->favorite_tiktoks->where('pivot.tiktok_id',$tiktok->id)->count() == 0 ? 'btn-success' : 'btn-outline-success' }}" data-bs-toggle="tooltip" data-bs-offset="0,8" data-bs-placement="top" data-color="black" title="Add to favorite list">
                                    <i class="fas fa-heart"></i>
                                </a>
 
                                <form id="favorite-form-{{ $tiktok->id }}" method="POST" action="{{ route('customer.tiktok.favorite',$tiktok->id) }}" style="display: none;">
                                    @csrf
                                </form>

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
                                    <a href="{{ route('customer.tiktok.details',$tiktok->slug) }}" class="text-black"><small class="card-title mb-0 me-2">{{ str_limit($tiktok->title,'28') }}</small></a>
                                        <div>
                                            <small data-bs-toggle="tooltip" data-bs-offset="0,8" data-bs-placement="top" data-color="black" title="Ad Create Date"><i class="far fa-calendar-alt" style="margin-right: 0.5rem;"></i>{{ $tiktok->ad_create_date }}</small>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </span>
                            <span><a href="{{ route('customer.tiktok.details',$tiktok->slug) }}" class="btn btn-outline-primary is-light is-rounded">View Details</a></span>
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
        <span class="text-center text-danger h2" >You don't have any favorite ads yet..</span>
        <span class="text-center text-danger">Browse Ads and add to favorite Now<br><a href="{{ route('customer.tiktok') }}" type="button" class="btn btn-primary mt-3">View TikTok Ad</a></span>
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