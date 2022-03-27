@extends('layouts.backend.admin.app')
@section('title','Dashboard')
@push('css')
<link rel="stylesheet" href="{{ asset('assets/backend/')}}/vendor/libs/apex-charts/apex-charts.css" />
@endpush
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">

    <div class="row g-4 mb-4">
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span>Customer</span>
                            <div class="d-flex align-items-end mt-2">
                                <h4 class="mb-0 me-2">{{ $users->count() }}</h4>
                                <small class="text-success">(+29%)</small>
                            </div>
                            <small>Total Users</small>
                        </div>
                        <span class="badge bg-label-primary rounded p-2">
                        <i class="bx bx-user bx-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span>Paid Customer</span>
                            <div class="d-flex align-items-end mt-2">
                                <h4 class="mb-0 me-2">{{ DB::table('users')->where('stripe_id','!=',null)->count() }}</h4>
                                <small class="text-success">(+18%)</small>
                            </div>
                            <small>Life Time </small>
                        </div>
                        <span class="badge bg-label-danger rounded p-2">
                        <i class="bx bx-user-plus bx-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span>Active Customer</span>
                            <div class="d-flex align-items-end mt-2">
                                <h4 class="mb-0 me-2">{{ $active }}</h4>
                                <small class="text-danger">(-14%)</small>
                            </div>
                            <small>Life Time</small>
                        </div>
                        <span class="badge bg-label-success rounded p-2">
                        <i class="bx bx-group bx-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span>Pending Customer</span>
                            <div class="d-flex align-items-end mt-2">
                                <h4 class="mb-0 me-2">{{ DB::table('users')->where('stripe_id',null)->count() }}</h4>
                                <small class="text-success">(+42%)</small>
                            </div>
                            <small>Life Time</small>
                        </div>
                        <span class="badge bg-label-warning rounded p-2">
                        <i class="bx bx-user-voice bx-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">

  <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <div class="d-flex align-items-center gap-3">
            <div class="avatar">
              <span class="avatar-initial rounded-circle bg-label-success"><i class='bx bx-dollar fs-4'></i></span>
            </div>
            <div class="card-info">
              <h5 class="card-title mb-0 me-2">${{ $total_income }}</h5>
              <small class="text-muted">Total Income</small>
            </div>
          </div>
          <div id="incomeChart"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <div class="d-flex align-items-center gap-3">
            <div class="avatar">
              <span class="avatar-initial rounded-circle bg-label-success"><i class='bx bx-dollar fs-4'></i></span>
            </div>
            <div class="card-info">
              <h5 class="card-title mb-0 me-2">${{ $this_month_income }}</h5>
              <small class="text-muted">This Month</small>
            </div>
          </div>
          <div id="profitChart"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <div class="d-flex align-items-center gap-3">
            <div class="avatar">
              <span class="avatar-initial rounded-circle bg-label-danger"><i class='bx bx-dollar fs-4'></i></span>
            </div>
            <div class="card-info">
              <h5 class="card-title mb-0 me-2">${{ $this_last_income }}</h5>
              <small class="text-muted">Last Month</small>
            </div>
          </div>
          <div id="expensesLineChart"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <div class="d-flex align-items-center gap-3">
            <div class="avatar">
              <span class="avatar-initial rounded-circle bg-label-primary"><i class='bx bx-dollar fs-4'></i></span>
            </div>
            <div class="card-info">
              <h5 class="card-title mb-0 me-2">${{ $two_month_income }}</h5>
              <small class="text-muted">Two Months</small>
            </div>
          </div>
          <div id="conversationChart"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ Cards with few info -->


    <div class="row">
        <!-- Gamification Card -->
        <div class="col-lg-4 col-md-6 col-12 mb-4">
        <div class="card h-100">
            <div class="card-header">
            <h3 class="card-title mb-2">Congratulations {{ Auth::user()->name }}!</h3>
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
                <span class="d-block text-nowrap">Facebook Ads</span>
                <h2 class="mb-0">{{ $facebooks }}</h2>
                </div>
            </div>
            </div>
            <div class="col-6 col-md-3 col-lg-6 mb-4">
            <div class="card h-100">
                <div class="card-body text-center">
                <div class="avatar mx-auto mb-2">
                    <span class="avatar-initial rounded-circle bg-label-danger"><i class="bx bx-cart fs-4"></i></span>
                </div>
                <span class="d-block text-nowrap">Tiktok Ads</span>
                <h2 class="mb-0">{{ $tiktoks }}</h2>
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
                <h2 class="mb-0">{{ $shopify }}</h2>
                </div>
            </div>
            </div>
            <div class="col-6 col-md-3 col-lg-6 mb-4">
            <div class="card h-100">
                <div class="card-body text-center">
                <div class="avatar mx-auto mb-2">
                    <span class="avatar-initial rounded-circle bg-label-danger"><i class="bx bx-cart fs-4"></i></span>
                </div>
                <span class="d-block text-nowrap">Aliexpress Product</span>
                <h2 class="mb-0">{{ $aliexpress }}</h2>
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
            <h1 class="display-6 fw-normal mb-0">{{ $totalProduct }}</h1>
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
                    <span class="fw-semibold">{{ $tiktoks }}</span>
                </div>
                </li>
                <li class="mb-2 d-flex justify-content-between">
                <div class="d-flex align-items-center lh-1 me-3">
                    <span class="badge badge-dot bg-danger me-2"></span> Facebook Ads
                </div>
                <div class="d-flex gap-3">
                    <span class="fw-semibold">{{ $facebooks }}</span>
                </div>
                </li>
                <li class="mb-2 d-flex justify-content-between">
                <div class="d-flex align-items-center lh-1 me-3">
                    <span class="badge badge-dot bg-info me-2"></span> Aliexpress Products
                </div>
                <div class="d-flex gap-3">
                    <span class="fw-semibold">{{ $aliexpress }}</span>
                </div>
                </li>
                <li class="mb-2 d-flex justify-content-between">
                <div class="d-flex align-items-center lh-1 me-3">
                    <span class="badge badge-dot bg-primary me-2"></span> Amazon Products
                </div>
                <div class="d-flex gap-3">
                    <span class="fw-semibold">{{ $amazon }}</span>
                </div>
                </li>
                <li class="d-flex justify-content-between">
                <div class="d-flex align-items-center lh-1 me-3">
                    <span class="badge badge-dot bg-warning me-2"></span> Shopify Store
                </div>
                <div class="d-flex gap-3">
                    <span class="fw-semibold">{{ $shopify }}</span>
                </div>
                </li>
            </ul>
            </div>
        </div>
        </div>
        <!--/ Product cards & Total upload Chart -->

        <!-- Blog Posts -->
        
        <!--/ Blog Posts -->

    </div>

</div>
@endsection
@push('js')
    <script src="{{ asset('assets/backend/')}}/vendor/libs/apex-charts/apexcharts.js"></script>
    <script src="{{ asset('assets/backend/')}}/js/cards-statistics.js"></script>
@endpush