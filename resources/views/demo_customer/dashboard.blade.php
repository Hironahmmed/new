@extends('layouts.backend.customer.demoapp')
@section('title','Dashboard')
@push('css')
<link rel="stylesheet" href="{{ asset('assets/backend/')}}/vendor/libs/apex-charts/apex-charts.css" />
@endpush
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Cards with few info -->
    <div class="row">
        <div class="col-md-12 col-lg-12 mb-4 order-0">

            <div class="row">
                <div class="col-md-6 col-lg-6 mb-3 order-0">
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="avatar avatar-sm mx-auto mb-3">
                                <span class="avatar-initial rounded-circle bg-label-facebook">
                                <i class="fab fa-facebook-square fs-4"></i></span>
                            </div>
                            <span class="d-block mb-1 text-nowrap">Facebook Ads</span>
                            <h5 class="mb-0">{{ $totalFacebookAd }}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 mb-3 order-0">
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="avatar avatar-sm mx-auto mb-3">
                                <span class="avatar-initial rounded-circle bg-label-success">
                                <i class="fab fa-tiktok fs-5"></i></span>
                            </div>
                            <span class="d-block mb-1 text-nowrap">TikTok Ads</span>
                            <h5 class="mb-0">{{ $totalTiktokAd }}</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-6 order-0">
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="avatar avatar-sm mx-auto mb-3">
                                <span class="avatar-initial rounded-circle bg-label-warning">
                                <i class="fab fa-amazon fs-4"></i></span>
                            </div>
                            <span class="d-block mb-1 text-nowrap">Amazon</span>
                            <h5 class="mb-0">{{ $amazon }}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 order-0">
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="avatar avatar-sm mx-auto mb-3">
                                <span class="avatar-initial rounded-circle bg-label-danger">
                                <i class="fas fa-shopping-bag fs-5"></i></span>
                            </div>
                            <span class="d-block mb-1 text-nowrap">Aliexpress</span>
                            <h5 class="mb-0">{{ $aliexpress }}</h5>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        

    </div>
    <!--/ Cards with few info -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <ul class="nav nav-tabs tabs-line" role="tablist">
                    <li class="nav-item">
                        <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-tabs-line-card-active" aria-controls="navs-tabs-line-card-active" aria-selected="true">Facebook Ad</button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-tabs-line-card-link" aria-controls="navs-tabs-line-card-link" aria-selected="false">TikTok Ad</button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-tabs-line-card-link" aria-controls="navs-tabs-line-card-link" aria-selected="false">Shopify Explore</button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-tabs-line-card-link" aria-controls="navs-tabs-line-card-link" aria-selected="false">Aliexpress Explore</button>
                    </li>
                    
                    <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-tabs-line-card-link" aria-controls="navs-tabs-line-card-link" aria-selected="false">Amazon Explore</button>
                    </li>
                </ul>
                <div class="tab-content">

                    <div class="tab-pane fade show active" id="navs-tabs-line-card-active" role="tabpanel">
                        <div class="row">
                            <div class="col-xl-7">
                                <h4 class="card-title">Use Facebook Ads to discover the hottest selling products</h4>
                                <p>A large number of Facebook ads for e-commerce, branding.</p> 
                                <p>
                                    The latest and hottest ads for e-commerce selling, brand exposure etc. Comprehensive ad search function, intelligent filtering, easy to find the most promising products Extremely informative ad data <strong>(Audiance, Selling Country, Ad Copy, Video Ad, Competitor analysis, Gif images, pricing formula, product description, and so on..)</strong> Scientific analysis of product data (amazon, ebay, google shopping and more ad strategies for ad landing page, etc.)
                                </p> 
                                <h4 class="card-title">Track competitors for more ideas</h4>
                                <p>
                                    Master the ad strategy, selling direction, and hot selling products of the competitors, and quickly follow the product of ads to achieve profit growth faster. Contains the most complete competitors' products, ad materials, ad strategies, ad copy, etc.
                                </p>
                                
                                <a href="" class="btn btn-primary">Go Facebook Ad</a>
                            </div>
                            <div class="col-xl-5">
                                <img src="https://www.pipiads.com/img/jiashao1ying.3e690a49.png">
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="navs-tabs-line-card-link" role="tabpanel">
                        <div class="row">
                            <div class="col-xl-8">
                                <h4 class="card-title">Use TikTok Ads to discover the hottest selling products</h4>
                                <p>a large number of TikTok ads for e-commerce, branding, and gaming applications</p> 
                                <p>The latest and hottest ads for e-commerce selling, brand exposure, games, apps, etc. Comprehensive ad search function,intelligent filtering,easy to find the most promising products Extremely informative ad data (Ad Impressions,days,popularity,ad likes,comments,etc.) Scientific analysis of ad data (ad costs, ad targets, more ad strategies for ad landing page, etc.)</p> 
                                <h4 class="card-title">Track competitors for more ads,products and strategies</h4>
                                <p>
                                    Master the ad strategy, selling direction, and hot selling products of the competitors, and quickly follow the product of ads to achieve profit growth faster. Contains the most complete competitors' products, ad materials, ad strategies, days, ad copy, etc.
                                </p>
                                
                                <a href="" class="btn btn-primary">Go TikTok Ad</a>
                            </div>
                            <div class="col-xl-4">
                                <img src="https://www.pipiads.com/img/jiashao1ying.3e690a49.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        
            
    </div>
        
</div>
@endsection
@push('js')
    <script src="{{ asset('assets/backend/')}}/vendor/libs/apex-charts/apexcharts.js"></script>
    <script src="{{ asset('assets/backend/')}}/js/cards-statistics.js"></script>
@endpush