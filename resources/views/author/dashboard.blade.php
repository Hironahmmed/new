@extends('layouts.backend.author.app')
@section('title','Dashboard')
@push('css')
<link rel="stylesheet" href="{{ asset('assets/backend/')}}/vendor/libs/apex-charts/apex-charts.css" />
@endpush
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    
    <div class="row">
        <!-- Gamification Card -->
        <div class="col-lg-4 col-md-6 col-12 mb-4">
        <div class="card h-100">
            <div class="card-header">
            <h3 class="card-title mb-2">Congratulations Rezaul!</h3>
            <span class="d-block mb-4 text-nowrap">Total Product Research!</span>
            </div>
            <div class="card-body">
            <div class="row align-items-end">
                <div class="col-6">
                <h1 class="display-6 text-primary mb-2 pt-4 pb-1">$89k</h1>
                <small class="d-block mb-3">You are doing good<br>Focus on work and get bonus!</small>
                </div>
                <div class="col-6">
                <img src="{{ asset('assets/backend/')}}/img/illustrations/prize-light.png" width="140" height="150" class="rounded-start" alt="View Sales" data-app-light-img="illustrations/prize-light.png" data-app-dark-img="illustrations/prize-dark.html">
                </div>
            </div>
            </div>
        </div>
        </div>
        <!--/ Gamification Card -->

        <!-- Total Product Samary -->
        <div class="col-lg-4 col-12">
        <div class="row">
            <!-- Statistics Cards -->
            <div class="col-6 col-md-3 col-lg-6 mb-4">
            <div class="card h-100">
                <div class="card-body text-center">
                <div class="avatar mx-auto mb-2">
                    <span class="avatar-initial rounded-circle bg-label-success"><i class="bx bx-purchase-tag fs-4"></i></span>
                </div>
                <span class="d-block text-nowrap">Untapped Product</span>
                <h2 class="mb-0">65</h2>
                </div>
            </div>
            </div>
            <div class="col-6 col-md-3 col-lg-6 mb-4">
            <div class="card h-100">
                <div class="card-body text-center">
                <div class="avatar mx-auto mb-2">
                    <span class="avatar-initial rounded-circle bg-label-danger"><i class="bx bx-cart fs-4"></i></span>
                </div>
                <span class="d-block text-nowrap">Trending Product</span>
                <h2 class="mb-0">40</h2>
                </div>
            </div>
            </div>
            <div class="col-6 col-md-3 col-lg-6 mb-4">
            <div class="card h-100">
                <div class="card-body text-center">
                <div class="avatar mx-auto mb-2">
                    <span class="avatar-initial rounded-circle bg-label-danger"><i class="bx bx-cart fs-4"></i></span>
                </div>
                <span class="d-block text-nowrap">Shopify Store</span>
                <h2 class="mb-0">40</h2>
                </div>
            </div>
            </div>
            <div class="col-6 col-md-3 col-lg-6 mb-4">
            <div class="card h-100">
                <div class="card-body text-center">
                <div class="avatar mx-auto mb-2">
                    <span class="avatar-initial rounded-circle bg-label-danger"><i class="bx bx-cart fs-4"></i></span>
                </div>
                <span class="d-block text-nowrap">TikTok Ads</span>
                <h2 class="mb-0">40</h2>
                </div>
            </div>
            </div>
            <!--/ Statistics Cards -->
            
        </div>
        </div>
        <!--/ Total Product Samary -->

        <!-- Product cards & Total upload Chart -->
        <div class="col-lg-4 col-12">
        <div class="card">
            <div class="card-header">
            <h5 class="card-title mb-2">Total Products</h5>
            <h1 class="display-6 fw-normal mb-0">8,634,820</h1>
            </div>
            <div class="card-body">
            <span>Current Activity</span>
            <div class="progress progress-stacked mb-2" style="height:8px;">
                <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                <div class="progress-bar bg-danger" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                <div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                <div class="progress-bar bg-primary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                <div class="progress-bar bg-warning" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <ul class="p-0 m-0">
                <li class="mb-2 d-flex justify-content-between">
                <div class="d-flex align-items-center lh-1 me-3">
                    <span class="badge badge-dot bg-success me-2"></span> TikTok Ad
                </div>
                <div class="d-flex gap-3">
                    <span class="fw-semibold">29k</span>
                </div>
                </li>
                <li class="mb-2 d-flex justify-content-between">
                <div class="d-flex align-items-center lh-1 me-3">
                    <span class="badge badge-dot bg-danger me-2"></span> Untapped Products
                </div>
                <div class="d-flex gap-3">
                    <span class="fw-semibold">12k</span>
                </div>
                </li>
                <li class="mb-2 d-flex justify-content-between">
                <div class="d-flex align-items-center lh-1 me-3">
                    <span class="badge badge-dot bg-info me-2"></span> Trending Products
                </div>
                <div class="d-flex gap-3">
                    <span class="fw-semibold">30k</span>
                </div>
                </li>
                <li class="mb-2 d-flex justify-content-between">
                <div class="d-flex align-items-center lh-1 me-3">
                    <span class="badge badge-dot bg-primary me-2"></span> Amazon Products
                </div>
                <div class="d-flex gap-3">
                    <span class="fw-semibold">12k</span>
                </div>
                </li>
                <li class="d-flex justify-content-between">
                <div class="d-flex align-items-center lh-1 me-3">
                    <span class="badge badge-dot bg-warning me-2"></span> Aliexpress Products
                </div>
                <div class="d-flex gap-3">
                    <span class="fw-semibold">7k</span>
                </div>
                </li>
            </ul>
            </div>
        </div>
        </div>
        <!--/ Product cards & Total upload Chart -->

        <!-- Weekly Order Summary -->
        <div class="col-xl-8 col-12 mb-4">
        <div class="card">
            <div class="row row-bordered m-0">
            <!-- Order Summary -->
            <div class="col-md-8 col-12 px-0">
                <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">Weekly Order Summary</h5>
                
                </div>
                <div class="card-body p-0">
                <div id="orderSummaryChart"></div>
                </div>
            </div>
            <!-- Sales History -->
            <div class="col-md-4 col-12 px-0">
                <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">Sales Overview</h5>
                
                </div>
                <div class="card-body">
                <h6 class="mt-1">Last Week</h6>
                <p class="mb-4">Performance 45% 🤩 better compare to last month</p>
                <ul class="list-unstyled m-0 pt-0">
                    <li class="mb-4">
                    <div class="d-flex align-items-center mb-2">
                        <div class="avatar avatar-sm flex-shrink-0 me-2">
                        <span class="avatar-initial rounded bg-label-primary"><i class="bx bx-trending-up"></i></span>
                        </div>
                        <div>
                        <p class="mb-0 lh-1 text-muted text-nowrap">Earnings This Month</p>
                        <small class="fw-semibold text-nowrap">$84,789</small>
                        </div>
                    </div>
                    <div class="progress" style="height:6px;">
                        <div class="progress-bar bg-primary" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    </li>
                    <li>
                    <div class="d-flex align-items-center mb-2">
                        <div class="avatar avatar-sm flex-shrink-0 me-2">
                        <span class="avatar-initial rounded bg-label-success"><i class="bx bx-dollar"></i></span>
                        </div>
                        <div>
                        <p class="mb-0 lh-1 text-muted text-nowrap">Average Daily Sales</p>
                        <small class="fw-semibold text-nowrap">$12,398</small>
                        </div>
                    </div>
                    <div class="progress" style="height:6px;">
                        <div class="progress-bar bg-success" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    </li>
                </ul>
                </div>
            </div>
            </div>
        </div>
        </div>
        <!--/ Weekly Order Summary -->

        <!-- Blog Posts -->
        <div class="col-md-6 col-lg-6 col-xl-4 col-xl-4 mb-4">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between mb-2">
            <h5 class="card-title mb-0">Blog Posts</h5>
            </div>
            <div class="card-body">
            <ul class="p-0 m-0">
                <li class="d-flex mb-4">
                <div class="avatar avatar-sm flex-shrink-0 me-3">
                    <span class="avatar-initial rounded-circle bg-label-primary"><i class='bx bx-cube'></i></span>
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                    <div class="me-2">
                    <p class="mb-0 lh-1">Total Products</p>
                    <small class="text-muted">Post in our site</small>
                    </div>
                    <div class="item-progress">10 Post</div>
                </div>
                </li>
                <li class="d-flex mb-4">
                <div class="avatar avatar-sm flex-shrink-0 me-3">
                    <span class="avatar-initial rounded-circle bg-label-info"><i class='bx bx-pie-chart-alt'></i></span>
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                    <div class="me-2">
                    <p class="mb-0 lh-1">Total Active</p>
                    <small class="text-muted">Active post is our site</small>
                    </div>
                    <div class="item-progress">7 Post</div>
                </div>
                </li>
                <li class="d-flex mb-4">
                <div class="avatar avatar-sm flex-shrink-0 me-3">
                    <span class="avatar-initial rounded-circle bg-label-danger"><i class='bx bx-credit-card'></i></span>
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                    <div class="me-2">
                    <p class="mb-0 lh-1">Total Pending</p>
                    <small class="text-muted">Pending post for approval</small>
                    </div>
                    <div class="item-progress">3 Post</div>
                </div>
                </li>
                <li class="d-flex">
                <div class="avatar avatar-sm flex-shrink-0 me-3">
                    <span class="avatar-initial rounded-circle bg-label-success"><i class='bx bx-dollar'></i></span>
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                    <div class="me-2">
                    <p class="mb-0 lh-1">Total Deleted</p>
                    <small class="text-muted">Deleted post</small>
                    </div>
                    <div class="item-progress">5 Post</div>
                </div>
                </li>
            </ul>
            </div>
        </div>
        </div>
        <!--/ Blog Posts -->

    </div>

</div>
@endsection
@push('js')
    <script src="{{ asset('assets/backend/')}}/vendor/libs/apex-charts/apexcharts.js"></script>
    <script src="{{ asset('assets/backend/')}}/js/cards-statistics.js"></script>
@endpush