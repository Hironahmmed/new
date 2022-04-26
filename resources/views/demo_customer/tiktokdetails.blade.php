@extends('layouts.backend.customer.demoapp')
@section('title','eButify Dashboard')
@push('css')
<link rel="stylesheet" href="{{ asset('assets/backend/')}}/vendor/libs/datatables-bs5/datatables.bootstrap5.css">
    <link rel="stylesheet" href="{{ asset('assets/backend/')}}/vendor/css/pages/ui-carousel.css" />
    <link rel="stylesheet" href="{{ asset('assets/backend/')}}/vendor/libs/swiper/swiper.css" />
    <link rel="stylesheet" href="{{ asset('assets/backend/')}}/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="{{ asset('assets/backend/')}}/vendor/libs/typeahead-js/typeahead.css" />
@endpush
@section('content')
<div class="container-xxl news-tricker">
    <div class="ticker-wrapper-h">
        <div class="heading">Notice</div>
        
        <ul class="news-ticker-h">
            <li>The demo user has limited access, they can't see new products.</li>
            <li>We provide winning, untapped, and quality products daily.</li>
            <li><a href="{{ route('register') }}">Get Access Now</a></li>
        </ul>
    </div>
</div>
<div class="container-xxl flex-grow-1 container-p-y">

    <div class="card mb-3">
        
        <div class="card-datatable table-responsive dataTables_wrapper dt-bootstrap5">
            <div class="card-header flex-column flex-md-row">
                <h5 class="card-title mb-0">TikTok Ad Details</h5>
                <div class="dt-action-buttons text-end pt-3 pt-md-0">
                    <div class="dt-buttons"> 
                        <a href="{{ $tiktok->tiktok_link }}" data-bs-toggle="modal" data-bs-target="#addNewCCModal" class="dt-button create-new btn btn-label-primary" target="blank"><span><i class="fab fa-tiktok"></i> <span class="d-none d-sm-inline-block" style="padding-left: 10px;">View TikTok Ad</span></span></a>
                    </div>
                </div>
            </div>
    
            <div class="card-body">
            
                <div class="row">
                    <div class="col-md-6 col-xl-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="product_data_wrapper mb-2">
                                    <div class="product_text">
                                        <span class="info-left">
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex align-items-center gap-3">
                                                <div class="avatar">
                                                    <span class="avatar-initial rounded-circle">
                                                        <img style="border-radius: 35%;" src="{{ Storage::disk('public')->url('logo/').$tiktok->page_logo }}">
                                                    </span>
                                                </div>
                                                <div class="card-info">
                                                    <p class="card-title mb-0 me-2"><a data-bs-toggle="modal" data-bs-target="#addNewCCModal" href="{{ $tiktok->ad_link }}">{{ $tiktok->page_name }}</a></p>
                                                    <div>
                                                        <small>
                                                            <a href="https://{{ $tiktok->shopify_website }}" data-bs-toggle="modal" data-bs-target="#addNewCCModal">{{ $tiktok->shopify_website }}</a>
                                                        </small>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </span>
                                        <span><button controlsdata-play="hover" data-bs-toggle="modal" data-bs-target="#addNewCCModal" type="button" class="btn btn-icon rounded-pill btn-outline-success" title="Favorite Product">
                                            <i class="fas fa-heart"></i>
                                            </button></span>
                                    </div>
                                </div>

                                <div class="post-media player mb-2">
                                    @if(!$tiktok->thumbnail)
                                    <div class="download">
                                        <a class="list-group-item rounded my-1 btn-label-success" data-bs-toggle="modal" data-bs-target="#addNewCCModal" target="_blank" href="http://127.0.0.1:8000/download/{{ $tiktok->video }}" role="tab"><i class="fas fa-download"></i> Download</a>
                                    </div>
                                    <video oncontextmenu="return false" data-play="hover" controls="controls" preload="auto" src="{{ Storage::disk('public')->url('video/').$tiktok->video }}" type="video/mp4" class="my-video">
                                        <script>
                                            $('video').each(function(index){
                                                $(this).get(0).play();
                                            });
                                        </script>
                                    </video>
                                    @else
                                    <img style="height: 100%; width: 100%; display: block; object-fit: fill; border-radius: 5px;" src="{{ Storage::disk('public')->url('thumbnail/').$tiktok->thumbnail }}">
                                    @endif

                                </div>

                                <div class="product_data_wrapper mt-3">
                                    <div class="product_text">
                                        <span class="info-left">
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex align-items-center gap-3">
                                                <div class="card-info">
                                                    <p class="card-title mb-0 mt-2" style="font-weight: 700;">{{ $tiktok->title }}</p>
                                                </div>
                                                </div>
                                            </div>
                                        </span>
                                        <span><a href="{{ $tiktok->competitor1 }}" data-bs-toggle="modal" data-bs-target="#addNewCCModal" class="btn btn-outline-primary is-light is-rounded">{{ $tiktok->action }}</a></span>
                                    </div>
                                </div>

                            </div>
                            
                        </div>
                    </div>
        
                    <div class="col-md-6 col-xl-5">
                    <div class="card mb-3">
                        <h5 class="card-header">Facebook Ad Content</h5>
                        <div class="card-body overflow-auto">
                        <p>
                            {{ $tiktok->ad_content }}
                        </p>
                        </div>
                    </div>
                    <div class="card">
                        <h5 class="card-header">Ad Informations</h5>
                        <div class="card-body">
                        <table class="dt-responsive table table-bordered">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Value</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Creation Date</td>
                                <td>{{ $tiktok->ad_create_date }}</td>
                            </tr>
                            <tr>
                                <td>Last Seen Date</td>
                                <td>{{ $tiktok->ad_seen_date }}</td>
                            </tr>
                            <tr>
                                <td>Privacy</td>
                                <td>
                                    {{ $tiktok->privacy }}
                                </td>
                            </tr>
                            <tr>
                                <td>Formate</td>
                                <td>
                                    {{ $tiktok->formate }}
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    </div>
        
                    <div class="col-md-6 col-xl-3">
                    <div class="card mb-3">
                        <h5 class="card-header listing-item">Selling Country</h5>
                        <div class="card-body listing-item country overflow-auto">
                        <ul>
                            <li>{{ $tiktok->country }}</li>
                        </ul>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <h5 class="card-header">Add Data</h5>
                        <div class="card-body">
                            <table class="dt-responsive table table-bordered">
                                <thead>
                                <tr>
                                    <th>View</th>
                                    <th>Days</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>{{ $tiktok->impression }}</td>
                                    <td>{{ $tiktok->days }}</td>
                                </tr>
                                </tbody>
                            </table>
                        
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                        <table class="dt-responsive table table-bordered">
                            <thead>
                            <tr>
                                <th>Ad Cost</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{ $tiktok->ad_cost }}</td>
                                <td>{{ $tiktok->conversation }}</td>
                            </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    </div>
        
                </div>
            </div>
            
        </div>
    </div>
    <div class="card">
        
        <div class="card-datatable table-responsive dataTables_wrapper dt-bootstrap5">
            <div class="card-header flex-column flex-md-row">
                <h5 class="card-title mb-0">Product Details</h5>
                <div class="dt-action-buttons text-end pt-3 pt-md-0">
                    <div class="dt-buttons"> 
                        <a href="{{ $tiktok->shopify_link }}" data-bs-toggle="modal" data-bs-target="#addNewCCModal" class="dt-button create-new btn btn-label-success" target="_blank"><span><i class="fab fa-shopify"></i> <span class="d-none d-sm-inline-block" style="padding-left: 10px;">View Product</span></span></a>
                    </div>
                </div>
            </div>
    
            <div class="card-body">
            
            <div class="row mb-3">
                <div class="col-md-6 col-xl-5">
                    <div class="card card-body">
                        <div id="swiper-gallery">
                            <div class="swiper-container gallery-top">
                                <div class="swiper-wrapper">
                                <div class="swiper-slide" style="background-image:url({{ $tiktok->image_one }})"></div>
                                <div class="swiper-slide" style="background-image:url({{ $tiktok->image_two }})"></div>
                                <div class="swiper-slide" style="background-image:url({{ $tiktok->image_three }})"></div>
                                <div class="swiper-slide" style="background-image:url({{ $tiktok->image_four }})"></div>
                                <div class="swiper-slide" style="background-image:url({{ $tiktok->image_five }})"></div>
                                </div>
                                <div class="swiper-button-next swiper-button-white"></div>
                                <div class="swiper-button-prev swiper-button-white"></div>
                            </div>
                            <div class="swiper-container gallery-thumbs">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide" style="background-image:url({{ $tiktok->image_one }})"></div>
                                    <div class="swiper-slide" style="background-image:url({{ $tiktok->image_two }})"></div>
                                    <div class="swiper-slide" style="background-image:url({{ $tiktok->image_three }})"></div>
                                    <div class="swiper-slide" style="background-image:url({{ $tiktok->image_four }})"></div>
                                    <div class="swiper-slide" style="background-image:url({{ $tiktok->image_five }})"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
    
                <div class="col-md-6 col-xl-7">
                    <div class="row">
        
                        <div class="card mb-2">
                        <div class="card-datatable text-nowrap">
                            <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                            <div class="table-responsive">
                            <table class="mb-0 dt-complex-header table table-bordered dataTable no-footer" id="DataTables_Table_1" role="grid" aria-describedby="DataTables_Table_1_info" style="width: 1346px;">
                            <thead>
                                <tr role="row">
                                <th rowspan="2" class="sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_1" colspan="1" style="width: 152px;" aria-label="Name: activate to sort column descending" aria-sort="ascending">Price</th>
                                
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 232px;" aria-label="E-mail: activate to sort column ascending">Cost</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 158px;" aria-label="City: activate to sort column ascending">Profit</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 219px;" aria-label="Position: activate to sort column ascending">Order</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 71px;" aria-label="Salary: activate to sort column ascending">Sales</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="sorting_1">${{ $tiktok->price }}</td>
                                    <td>${{ $tiktok->cost }}</td>
                                    <td><span class="badge rounded-pill  bg-label-success">${{ $tiktok->profit }}</span></td>
                                    <td>{{ $tiktok->order }}</td>
                                    <td>${{ $tiktok->revinue }}</td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                        </div>
                        </div>
                        </div>
                        
                        <div class="row" style="padding-right: 0px !important;">
                        <div class="col-md-6" style="padding-left: 0px !important; padding-right: 0px !important;">
                            <div class="card mb-3">
                            <h5 class="card-header">Product Research</h5>
                            <div class="card-body">
                                <ul class="list-group list-group-flush list-unstyled prm-list">
                                <li>
                                    <a class="list-group-item rounded my-1 btn-label-danger" href="{{ $tiktok->aliexpress_link }}" role="tab" data-bs-toggle="modal" data-bs-target="#addNewCCModal" target="_blank"><i class="fas fa-shopping-bag"></i> View On Aliexpress</a>
                                </li>
                                
                                <li>
                                    <a class="list-group-item rounded my-1 btn-label-warning" href="{{ $tiktok->amazon }}" role="tab" data-bs-toggle="modal" data-bs-target="#addNewCCModal" target="_blank"><i class="fab fa-amazon"></i> View Product On Amazon</a>
                                </li>
                                <li>
                                    <a class="list-group-item rounded my-1 btn-label-secondary" href="{{ $tiktok->ebay }}" role="tab" data-bs-toggle="modal" data-bs-target="#addNewCCModal" target="_blank"><i class="fab fa-ebay"></i> View Product On eBay</a>
                                </li>
                                <li>
                                    <a class="list-group-item rounded my-1 btn-label-primary" href="{{ $tiktok->tiktok_link }}" role="tab" data-bs-toggle="modal" data-bs-target="#addNewCCModal" target="_blank"><i class="fab fa-facebook"></i> View Facebook Ads</a>
                                </li>
                                <li>
                                    <a class="list-group-item rounded my-1 btn-label-danger" href="{{ $tiktok->youtube_link }}" role="tab" data-bs-toggle="modal" data-bs-target="#addNewCCModal" target="_blank"><i class="fab fa-youtube"></i> View YouTube Review</a>
                                </li>
                                </ul>
        
                            </div>
                            </div>
                        </div>
        
                        <div class="col-md-6" style="padding-right: 0px !important;">
                            <div class="card mb-3">
                            <h5 class="card-header">Shopify Stores</h5>
                            <div class="card-body">
                                <ul class="list-group list-group-flush list-unstyled prm-list">
                                    <li>
                                        <a class="list-group-item rounded my-1 btn-label-success" data-bs-toggle="modal" data-bs-target="#addNewCCModal" target="_blank" href="{{ $tiktok->competitor1 }}" role="tab"><i class="fab fa-shopify"></i> View On Shopify Store</a>
                                    </li>
                                    @if($tiktok->competitor2)
                                    <li>
                                        <a class="list-group-item rounded my-1 btn-label-success" data-bs-toggle="modal" data-bs-target="#addNewCCModal" target="_blank" href="{{ $tiktok->competitor2 }}" role="tab"><i class="fab fa-shopify"></i> View On Shopify Store</a>
                                    </li>
                                    @endif
                                    @if($tiktok->competitor3)
                                    <li>
                                        <a class="list-group-item rounded my-1 btn-label-success" data-bs-toggle="modal" data-bs-target="#addNewCCModal" target="_blank" href="{{ $tiktok->competitor3 }}" role="tab"><i class="fab fa-shopify"></i> View On Shopify Store</a>
                                    </li>
                                    @endif
                                    @if($tiktok->competitor4)
                                    <li>
                                        <a class="list-group-item rounded my-1 btn-label-success" data-bs-toggle="modal" data-bs-target="#addNewCCModal" target="_blank" href="{{ $tiktok->competitor4 }}" role="tab"><i class="fab fa-shopify"></i> View On Shopify Store</a>
                                    </li>
                                    @endif
                                    @if($tiktok->competitor5)
                                    <li>
                                        <a class="list-group-item rounded my-1 btn-label-success" data-bs-toggle="modal" data-bs-target="#addNewCCModal" target="_blank" href="{{ $tiktok->competitor5 }}" role="tab"><i class="fab fa-shopify"></i> View On Shopify Store</a>
                                    </li>
                                    @endif
                                </ul>
                            </div>
                            </div>
                        </div>
                        </div>
        
                    </div>
                </div>
    
            </div>
    
            <div class="row">
                <div class="col-md-6 col-xl-8">
                <div class="card mb-3">
                    <h5 class="card-header">Product Description</h5>
                    <hr class="m-0">
                    <div class="card-body">
                        {!! $tiktok->body !!}
                    </div>
                </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="card card-body">
                        <div class="col-md">
                        <div id="carouselExample-cf" class="carousel carousel-dark slide carousel-fade" data-bs-ride="carousel">
                            <ol class="carousel-indicators">
                            <li data-bs-target="#carouselExample-cf" data-bs-slide-to="0" class="active"></li>
                            <li data-bs-target="#carouselExample-cf" data-bs-slide-to="1"></li>
                            <li data-bs-target="#carouselExample-cf" data-bs-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="download">
                                    <a class="list-group-item rounded my-1 btn-outline-success" data-bs-toggle="modal" data-bs-target="#addNewCCModal" target="_blank" href="http://127.0.0.1:8000/download/{{ $tiktok->gif_one }}" role="tab"><i class="fas fa-download"></i> Download</a>
                                    </div>
                                    <img class="d-block w-100" src="{{ Storage::disk('public')->url('gif/').$tiktok->gif_one }}" alt="First slide" />
                                </div>
                                <div class="carousel-item">
                                    <div class="download">
                                        <a class="list-group-item rounded my-1 btn-outline-success" data-bs-toggle="modal" data-bs-target="#addNewCCModal" target="_blank" href="http://127.0.0.1:8000/download/{{ $tiktok->gif_two }}" role="tab"><i class="fas fa-download"></i> Download</a>
                                    </div>
                                    <img class="d-block w-100" src="{{ Storage::disk('public')->url('gif/').$tiktok->gif_two }}" alt="Second slide" />
                                </div>
                                <div class="carousel-item">
                                    <div class="download">
                                        <a class="list-group-item rounded my-1 btn-outline-success" data-bs-toggle="modal" data-bs-target="#addNewCCModal" target="_blank" href="{{Storage::disk('public')->url('gif/').$tiktok->gif_three}}" role="tab"><i class="fas fa-download"></i> Download</a>
                                    </div>
                                    <img class="d-block w-100" src="{{Storage::disk('public')->url('gif/').$tiktok->gif_three}}" alt="Third slide" />
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExample-cf" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExample-cf" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                            </a>
                        </div>
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
    <script src="{{ asset('assets/backend/')}}/vendor/libs/swiper/swiper.js"></script>
    <script src="{{ asset('assets/backend/')}}/js/ui-carousel.js"></script>
@endpush