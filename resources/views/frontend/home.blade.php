@extends('layouts.frontend.app')
@section('title','The Best Winning Product Research Tool')
@section('facebook_meta')

    <link rel="canonical" href="{{url()->current()}}"/>
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:site_name" content="{{ config('app.name', 'eButify.com') }}" />
    <meta property="og:title" content="{{ config('app.name', 'eButify.com') }} - The Best Winning Product Research Tool" />
    <meta property="og:description" content="eButify allows you to easily find winning products that are already proven to sell! Only a few clicks - it's time to stop guessing, and start selling!" />
    <meta property="og:image" itemprop="image" content="{{ asset('assets/frontend/')}}/images/social-thumbnail.jpg" />
    <meta name="Description" content="eButify allows you to easily find winning products that are already proven to sell! Only a few clicks - it's time to stop guessing, and start selling!">
    <meta name="keywords" content="product research, winning product research, product research tool, winning product research tool, find winning products, research, product idea, product spy, winning products, untapped product, facebook product research tool, tiktok product research tool, aliexpress product research, amazon product research">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ config('app.name', 'eButify.com') }} - The Best Winning Product Research Tool">
    <meta name="twitter:description" content="eButify allows you to easily find winning products that are already proven to sell! Only a few clicks - it's time to stop guessing, and start selling!">
    <meta name="twitter:image" content="{{ asset('assets/frontend/')}}/images/social-thumbnail.jpg">

@endsection
@push('css')
<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
<link rel="stylesheet" href="{{ asset('assets/backend/')}}/vendor/fonts/fontawesome.css" />
@endpush
@section('content')
<main class="main">
    <!--== GET STARTED ==-->
    <div class="client_get">
        <span class="client_get_number">{{ $users + 670 }}</span>
        <span class="client_get_title">Satisfied Client</span>
        <a href="{{ route('register') }}" class="get_started_btn">Get Started</a>
    </div>
    
    <!--============================= HOME ===================================-->
    <section class="home" id="home">
        <div class="custom-shape-divider-bottom-1638455351">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M600,112.77C268.63,112.77,0,65.52,0,7.23V120H1200V7.23C1200,65.52,931.37,112.77,600,112.77Z" class="shape-fill"></path>
            </svg>
        </div>

        <div class="home_container container grid">
            <div class="home_data grid">
                <span class="home_data_subtitle">Are you looking for Winning Product?</span>
                <span>
                    <h1 class="home_data_title">eButify to Empowering</h1>
                    <span class="home_data_subtitle">Dropshipping Businesses</span>
                </span>
                <span class="home_data_text">We are manually adding winning products on a daily basis. Stop wasting money on bad products. eButify is a curation of the best new products, every day. Want to be a successful store owner? Subscribe now and get access to our full winning products list with a kickass detailed analytics.</span>
                <div class="home_btn">
                    <a href="{{ route('demo.dashboard') }}" class="button">Try Demo</a>
                    <a href="#" class="button button_link wmBox" data-popup="{{ asset('assets/frontend/')}}/video/video.mp4"><img src="{{ asset('assets/frontend/')}}/images/Group 7.png" alt="eButify Demo Video"> Watch Demo</a>
                </div>
                
                <div class="banner_msg">
                    <img src="{{ asset('assets/frontend/')}}/images/Layer 2.png" alt="eButify Trust"><span class="home_data_message"><p>Trusted by 500+ Businesses in 40+ countries over the world</p></span>
                </div>
            </div>

            <div class="home_content">
                <video id="video_banner" muted autoplay loop>
                    <source src="{{ asset('assets/frontend/')}}/video/Banner.mp4" type="video/mp4"    >
                </video>
            </div>
        </div>
    </section>

    <!--============================= FEATURED VIDEO ===================================-->
    <section class="featured section">
        <div class="featured_container container">
            <div class="featured_data">
                <h1 class="featured_title">The Platform</h1>
                <span class="featured_subtitle">Where Ecommerce Success Happens</span>
                <span class="featured_text">E-commerce is changing. Find winning products from all traffic sources and launch them in unsaturated markets and channels. eButify scans all networks continuously and worldwide to ensure that you are always up to date and don't miss any winning products. We provide everything from the winning product to the targeting audience .. all in one place</span>
                <a href="{{ route('register') }}" class="button_featured shake">Access Now</a>
            </div>

            <div class="featured_content">
                <video id="video_featured" muted loop>
                    <source src="{{ asset('assets/frontend/')}}/video/video.mp4" type="video/mp4">
                </video>
            </div>
        </div>
    </section>

    <!--============================= STORY ===================================-->
    <section class="story section">
        <img src="{{ asset('assets/frontend/')}}/images/Home-Page-Design---WeDevs-U3.png" alt="eButify Success" class="story_background">
        <div class="story_nav_container container">
            <div class="story_head">
                <div class="linear_story">
                    <h2 class="story_title">Success Stories</h2>
                </div>

                <div class="story_nav">
                    <div class="swiper-pagination"></div>
                    <div class="story_navigation">
                        <div class="story-prev">
                            <img src="{{ asset('assets/frontend/')}}/images/Group 20.png" alt="Preview">
                        </div>

                        <div class="story-next">
                            <img src="{{ asset('assets/frontend/')}}/images/Group 21.png" alt="Next">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="story_container container">
            <div class="swiper-wrapper">

                @foreach($reviews as $review)
                <!--=================== STORY 01 ========================-->
                <div class="story_card swiper-slide">
                    <div class="story_data">
                        <span class="story_text">{{ $review->body }}</span>
                        <hr>
                        <span class="half_container">
                            <span class="half_text">{{ $review->name }}</span>
                            <span class="half_text">{{ $review->designation }}</span>
                            <span class="half_text">Rated: {{ $review->rating }}</span>
                            <span class="half_text">Reviewed at: {{ $review->created_at->diffForHumans() }}</span>
                        </span>
                    </div>
        
                    <div class="story_content">
                        <img src="{{Storage::disk('public')->url('review/').$review->image}}" alt="{{ $review->name }}">
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!--====================== DROP SHIPPING ============================-->
    <section class="shipping section" id="why">
        <div class="shipping_container container">
            <h2 class="shipping_title">All-in-One <br>Dropshipping Solution</h2>
            <div class="shipping_wrapper">
                <div class="shipping_tab">
                    <div class="shipping_tabs swiper-wrapper">
                        <div class="shipping_button swiper-slide">
                            Facebook Ad
                        </div>
        
                        <div class="shipping_button swiper-slide">
                            TikTok Ad
                        </div>
    
                        <div class="shipping_button swiper-slide">
                            Shopify Explore
                        </div>
    
                        <div class="shipping_button swiper-slide">
                            AliExpress Explore
                        </div>
    
                        <div class="shipping_button swiper-slide">
                            Amazon Explore
                        </div>
                    </div>
                </div>
                
                <div class="shipping_padding">
                    <div class="shipping_section">
                        <div class="swiper-button-next"><img src="{{ asset('assets/frontend/')}}/images/Group 42.png" alt="Next"></div>
                        <div class="swiper-button-prev"><img src="{{ asset('assets/frontend/')}}/images/Group 40.png" alt="Previous"></div>
    
                        <div class="swiper-wrapper">
                            <!--=== DROP SHIPPING PART 01 ===-->
                            <div class="shipping_content swiper-slide">
                                <div class="shipping_data">
                                    <video id="video_fb_ad" muted autoplay loop>
                                        <source src="{{ asset('assets/frontend/')}}/video/Facebook_AD.mp4" type="video/mp4"    >
                                    </video>
        
                                    <span>
                                    <h1 class="section_heading section_heading_border"><strong>What Facebook Ads</strong> can do for you?</h1>
                                        eButify Facebook tool is designed for dropshippers and online retailers that they can find winning products by spying on successful ads with social proof. It allows you to discover your competitors’ ads and check your niches. The tool also allows you to spy on the most successful shops of the moment and discover their hot products. Moreover, for Dropshipping product advertisements, you have access to product details, product photos, gif images, product descriptions, shop data, and much more. eButify Facebook Tool offers the most search options of any Ad Intelligence Tool, so you can find the data you want. Be as rigorous as you need to: search or filter by trending product, Untapped Product, Winning product, By technology,  By eCommerce platform - whatever helps you find the information you can work with.
                                    </span>
                                </div>
                            </div>
    
                            <!--=== DROP SHIPPING PART 02 ===-->
                            <div class="shipping_content swiper-slide">
                                <div class="shipping_data">
                                    <video id="video_untap" muted autoplay loop>
                                        <source src="{{ asset('assets/frontend/')}}/video/Untaped.mp4" type="video/mp4"    >
                                    </video>
        
                                    <span>
                                        <h1 class="section_heading section_heading_border"><strong>What TikTok Ads</strong> can do for you?</h1>
                                        Contains a large number of TikTok ads for e-commerce, and branding. The latest and hottest ads for e-commerce selling, brand exposure, etc. Comprehensive ad search function, intelligent filtering, easy to find the most promising products.  Extremely informative ad data (Ad Impressions,days,popularity,ad likes,comments,etc.) <br><br> Analysis of ad data (ad costs, ad targets, more ad strategies for ad landing page, etc.) Master the ad strategy, selling direction, and hot selling products of the competitors, and quickly follow the product of ads to achieve profit growth faster. Contains the most complete competitors' products, ad materials, ad strategies, days, ad copy, etc.
                                    </span>
                                </div>
                            </div>
    
                            <!--=== DROP SHIPPING PART 03 ===-->
                            <div class="shipping_content swiper-slide">
                                <div class="shipping_data">
                                    <video id="video_trend" muted autoplay loop>
                                        <source src="{{ asset('assets/frontend/')}}/video/Trending.mp4" type="video/mp4"    >
                                    </video>
        
                                    <span>
                                        <h1 class="section_heading section_heading_border"><strong>What Shopify Explore</strong> can do for you?</h1>
                                        eButify provides the most popular Shopify store data so new dropshipper can get ideas from them. Also, have 4 hot selling products for every store we analyze for you. We decide on a popular store after verifying several examinations. We check daily sales history, and monthly income by using our AI tools to get the most recent result for a store. Also, check the global search rank and SEO score. Every day we check hundreds of stores to place our tools, but only we put that store that passes all verification to be a successful dropshipping store. <br><br> We just want to share the best to get success in dropshipping business with our customers. 
                                    </span>
                                </div>
                            </div>
    
                            <!--=== DROP SHIPPING PART 04 ===-->
                            <div class="shipping_content swiper-slide">
                                <div class="shipping_data">
                                    <video id="video_ali" muted autoplay loop>
                                        <source src="{{ asset('assets/frontend/')}}/video/Ali_ex.mp4" type="video/mp4"    >
                                    </video>
        
                                    <span>
                                    <h1 class="section_heading section_heading_border"><strong>What AliExpress Explore</strong> can do for you?</h1>
                                        We provide 10 to 20 AliExpress best-selling products depending on the AliExpress dropship market and which products are best performing on the AliExpress market. Our top-rated product researchers pick them on a daily basis. We analyze the products with our master formula using different methods. Here we only list the product which has a wow factor effect that will catch your customer's eye contact to push them to buy the product. Also, most of the products will solve at least one problem. We pick the products which have the ability to be the next winner. No need to hire someone for the research because we provide everything you need to start your dropshipping business. So, why you are waiting for?
                                    </span>
                                </div>
                            </div>
    
                            <!--=== DROP SHIPPING PART 05 ===-->
                            <div class="shipping_content swiper-slide">
                                <div class="shipping_data">
                                    <video id="video_amazon" muted autoplay loop>
                                        <source src="{{ asset('assets/frontend/')}}/video/Amazon.mp4" type="video/mp4"    >
                                    </video>
        
                                    <span>
                                    <h1 class="section_heading section_heading_border"><strong>What Amazon Explore</strong> can do for you?</h1>
                                        We provide 5 to 10 Amazon best-selling products depending on the Amazon dropship market and which products are best performing on the Amazon market. Our top-rated product researchers pick them on a daily basis. We analyze the products with our master formula using different methods. Here we only list the product which has a wow factor effect that will catch your customer's eye contact to push them to buy the product. Also, most of the products will solve at least one problem. We pick the products which have the ability to be the next winner. No need to hire someone for the research because we provide everything you need to start your dropshipping business. So, why you are waiting for?
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====================== PRODUCT SLIDE ============================-->
    <section class="product_section section">
        <div class="product_container container">
            <div class="product_title_nav">
                <h3 class="product_section_title">Find Hot Products To Sell</h3>
            </div>

            <div class="product_slide_container slider">
                <div class="swiper-wrapper product_slide slide_track">
                    @foreach($facebook as $loadad)
                        <div class="product_card swiper-slide slide">
                            <div class="product_data">

                                <div class="product_data_wrapper mb-2">
                                    <div class="product_text">
                                        <span class="info-left">
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex align-items-center gap-3">
                                                <div class="avatar">
                                                    <span class="avatar-initial rounded-circle"><img style="border-radius: 50%;" src="{{ Storage::disk('public')->url('logo/').$loadad->page_logo }}"></span>
                                                </div>
                                                <div class="card-info">
                                                    <p class="card-title mb-0 me-2"> <a href="{{ route('customer.facebook.details',$loadad->slug) }}" target="_blank"> {{ $loadad->page_name }}</a></p>
                                                    <div>
                                                        <small><a href="{{ route('customer.facebook.details',$loadad->slug) }}" target="_blank">{{ $loadad->shopify_website }}</a> </small>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </span>
                                        <span>
                                            <a href="{{ route('customer.facebook.details',$loadad->slug) }}" target="_blank" controlsdata-play="hover" type="button" class="btn btn-icon rounded-pill btn-outline-success" data-bs-toggle="tooltip" data-bs-offset="0,8" data-bs-placement="top" data-color="black" title="Click to see FB ad"><i class="fab fa-facebook-f"></i></a>
                                        </span>
                                    </div>
                                </div>

                                <div class="product_content post-media player">
                                    <div class="download">
                                        <span class="badge rounded-pills bg-danger"><i class="bx bx-trending-up" style="margin-right: .5rem;"></i>Selling on <span style="font-weight: 700; font-size: large;">{{ $loadad->sell_on }}</span> Shopify Store</span>
                                    </div>
                                    <img src="{{ $loadad->image_one }}" alt="eButify.com">
                                </div>
                                <div class="product_data_wrapper">

                                    <div class="product_data_wrapper mb-2">
                                        <div class="product_text">
                                            <span class="info-left">
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex align-items-center gap-3">
                                                    <div class="card-info">
                                                        <a href="{{ route('customer.facebook.details',$loadad->slug) }}" class="text-black"><small class="card-title mb-0 me-2">{{ str_limit($loadad->title,'20') }}</small></a>
                                                        <div>
                                                            <small><i class="far fa-calendar-alt" style="margin-right: 0.5rem;"></i>{{ $loadad->ad_create_date }}</small>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </span>
                                            <span><a href="{{ route('customer.facebook.details',$loadad->slug) }}" class="btn btn-outline-primary is-light is-rounded" style="color: #ffffff;">{{ $loadad->action }}</a></span>
                                        </div>
                                    </div>

                                    <div class="product_data_wrapper mb-2">
                                        <div class="product_text">
                                            <span class="info-left">
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex align-items-center gap-3">
                                                    <div class="card-info">
                                                        <a href="" class="text-black"><small class="card-title mb-0 me-2">{{ $loadad->order }}</small></a>
                                                        <div>
                                                            <small>Order</small>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </span>
                                            <span class="info-left">
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex align-items-center gap-3">
                                                    <div class="card-info">
                                                        <a href="" class="text-black"><small class="card-title mb-0 me-2">${{ $loadad->price }}</small></a>
                                                        <div>
                                                            <small>Price</small>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </span>
                                            <span class="info-left">
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex align-items-center gap-3">
                                                    <div class="card-info">
                                                        <a href="" class="text-black"><small class="card-title mb-0 me-2">${{ $loadad->cost }}</small></a>
                                                        <div>
                                                            <small>Cost</small>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </span>
                                            <span class="info-left">
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex align-items-center gap-3">
                                                    <div class="card-info">
                                                        <a href="" class="text-black"><small class="card-title mb-0 me-2">${{ $loadad->profit }}</small></a>
                                                        <div>
                                                            <small>Profit</small>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </span>
                                        </div>
                                    </div>
                            
                                    <a href="{{ route('customer.facebook.details',$loadad->slug) }}" target="blank" class="product_details_btn">View Product Details</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!--====================== SCROLL BUTTON ============================-->
    <div class="scroll_btn_section section">
        <h1 class="scroll_btn_title">Find , Sell, Scale And Succeed <br>All With One Smart Tool</h1>
        <div class="scroll_btn_container container">
            <a href="#research" class="scroll_btn_link">
                <div class="scroll_btn_wrapper">
                    <img src="{{ asset('assets/frontend/')}}/images/searching.png" alt="Winning Product Research Tool">

                    <span>Research</span>
                </div>
            </a>

            <a href="#sell" class="scroll_btn_link">
                <div class="scroll_btn_wrapper">
                    <img src="{{ asset('assets/frontend/')}}/images/trade.png" alt="Winning Product Research Tool">

                    <span>Sell</span>
                </div>
            </a>

            <a href="#scale" class="scroll_btn_link">
                <div class="scroll_btn_wrapper">
                    <img src="{{ asset('assets/frontend/')}}/images/sales.png" alt="Winning Product Research Tool">

                    <span>Scale</span>
                </div>
            </a>

            <a href="#success" class="scroll_btn_link">
                <div class="scroll_btn_wrapper">
                    <img src="{{ asset('assets/frontend/')}}/images/goal.png" alt="Winning Product Research Tool">

                    <span>Success</span>
                </div>
            </a>
        </div>
    </div>

    <!--====================== RESEARCH ============================-->
    <div class="research_section section"  id="research">
        <div class="research_container container">
            <div class="research_title_section">
                <img src="{{ asset('assets/frontend/')}}/images/searching.png" alt="Product Research">

                <span>Research</span>
            </div>

            <div class="research_wrapper grid">   
                <div class="research_content">
                    <img src="{{ asset('assets/frontend/')}}/images/research.png" alt="Product Spy">
                </div>

                <div class="research_data">
                    <h2 class="research_title">Validate A Product Idea And See If <br>It'll Be Successful Or Not</h2>

                    <span class="research_text">
                        The process of deciding which products might be successful. Product research is how you validate a product idea and see if it'll be successful or not. It's a part of the product development process that helps identify customer needs and if your idea can meet market demand. The result is a better return on investment on your product.
                    </span>

                    <a href="{{ route('demo.dashboard') }}" class="research_btn shake">View Demo App</a> 
                </div>
            </div>
        </div>
    </div>

    <!--====================== SELL ============================-->
    <div class="sell_section section"  id="sell">
        <div class="sell_container container">
            <div class="sell_title_section">
                <img src="{{ asset('assets/frontend/')}}/images/trade.png" alt="Product Sourch">

                <span>Sell</span>
            </div>

            <div class="sell_wrapper grid">
                <div class="sell_content">
                    <img src="{{ asset('assets/frontend/')}}/images/Sell.png" alt="Dropshipping Product Research">
                </div>

                <div class="sell_data">
                    <h2 class="research_title">Select A Potential Hot Selling Product And <br>Sell Like Crazy</h2>

                    <span class="sell_text">
                        Say goodbye to bad products and find the potential hot selling product and sells like hotcakes. It's something your target audience REALLY wants to buy. Don't waste your money, you can get the Facebook viral ad, Untapped product, Trending product in one place. Find winning products easily and sell them like crazy. 
                    </span>

                    <a href="{{ route('register') }}" class="sell_btn shake">Access Now!</a>
                </div>
            </div>
        </div>
    </div>

    <!--====================== SCALE ============================-->
    <div class="scale_section section"  id="scale">
        <div class="scale_container container">
            <div class="scale_title_section">
                <img src="{{ asset('assets/frontend/')}}/images/sales.png" alt="Scale Business">

                <span>Scale</span>
            </div>

            <div class="scale_wrapper grid">  
                <div class="scale_content">
                    <img src="{{ asset('assets/frontend/')}}/images/Sceal.png" alt="Scale Your Business">
                </div>

                <div class="scale_data">
                    <h2 class="scale_title">Get Marketing Ideas From Our Tools <br>and Scale Your Business</h2>

                    <span class="scale_text">
                        eButify provides the Facebook audience idea and the marketing plan for every product. You can see in detail just click on the view details button check them apply the strategies and Don't stop at Facebook or Google Ads. Get more traffic, more sales, and more freedom.
                    </span>

                    <a href="{{ route('demo.dashboard') }}" class="scale_btn shake">View Demo App</a>
                </div>
            </div>
        </div>
    </div>

    <!--====================== TRY EBUTIFY ============================-->
    <section class="try_ebutify section">
        <div class="try_ebutify_container container grid">
            <div class="try_ebutify_data">
                <h2 class="try_ebutify_title">Join Hundreds  Of Brand Owners <br>Using eButify</h2>
                <span class="try_ebutify_text">
                    Start Finding Potential hot selling product today using eButify Product research tool
                </span>
            </div>

            <div class="try_ebutify_btn_wrapper">
                <a href="{{ route('register') }}" class="try_ebutify_btn">Try eButify</a>
                <a href="{{ route('register') }}" class="customer_feed_btn">View Customer Feedback</a>
            </div>

            <div class="try_ebutify_tag">
                <span>Get Daily Product Update</span>
                <span>Get Free Marketing eBook</span>
            </div>
        </div>
    </section>

    <!--====================== SUCCESS ============================-->
    <div class="success_section section"  id="success">
        <div class="success_container container">
            <div class="success_title_section">
                <img src="{{ asset('assets/frontend/')}}/images/goal.png" alt="Winning Product">

                <span>Success</span>
            </div>

            <div class="success_wrapper grid">
                <div class="success_content">
                    <img src="{{ asset('assets/frontend/')}}/images/Success.png" alt="Dropshipping Success">
                </div>

                <div class="success_data">
                    <h2 class="research_title">Focus On Your Research Not Your Theme</h2>

                    <span class="success_text">
                        Platforms and tactics may change over time. But marketing principles stay forever. We’re rolling out new masterclass content to give you both timeless strategies and the latest tactics that work today.
                    </span>

                    <a href="{{ route('demo.dashboard') }}" class="success_btn shake">Try Demo</a>
                </div>
            </div>
        </div>
    </div>

    <!--====================== PRICING ============================-->
    <section class="pricing section" id="price">
        <div class="pricing_container container grid">
            <div class="pricing_data">
                <h2 class="pricing_title">The only product research tool with <br>flexible pricing</h2>
                <span class="pricing_text_1">
                    No surprises. No hidden fees, No questions, no contracts, cancel at any time with one click, 100% risk-free.
                </span>
                <span class="pricing_text_2">
                    Whether you're starting out, looking for a potential winner product, or scaling your brand — we've got you covered. Simply choose the plan that you like most. 
                </span>
            </div>

            <div class="pricing_content_wrapper">
                <!--===== PRICING PLAN 01 =====-->
                <div class="pricing_content">
                    <div class="pricing_off">
                        <div class="pricing_off_title">40%</div>
                        <div class="pricing_off_data">Discount</div>
                    </div>
                    <div class="pricing_content_title">Build Monthly</div>

                    <div class="pricing_content_data">
                        <div class="pricing_content_data_title">
                            <span>$25.00</span>
                            $15.99/Month
                        </div>

                        <div class="pricing_content_data_text">
                            <span>Reach greater heights with your marketplace</span>
                            <span>No questions, no contracts, cancel at any time with one click, 100% risk free.</span>
                        </div>
                    </div>

                    <div class="pricing_content_features grid">
                        <ul class="pricing_content_features_list">
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="Live Facebook Ads">
                                <span>Live Facebook Ads</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="Facebook Winning Ads">
                                <span>Facebook Winning Ads</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="Facebook Ads Research">
                                <span>Facebook Ads Research</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="Facebook Ads Content">
                                <span>Facebook Ads Content</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="Facebook Audience Research">
                                <span>Facebook Audience Research</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="Trending Product Research">
                                <span>Trending Product Research</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="Untapped Product Research">
                                <span>Untapped Product Research</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="Competitor Research">
                                <span>Competitor Research</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="Competitors Link">
                                <span>5 Competitors Link</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="Ads Copy">
                                <span>Ads Copy</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="Targeting People">
                                <span>Targeting People</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="Hand Written Description">
                                <span>Hand Written Description</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="Download Fresh Images">
                                <span>Download Fresh Images</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="Download Gif Images">
                                <span>Download Gif Images</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="Download Product Video">
                                <span>Download Product Video</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="Trend Explorer">
                                <span>AliExpress Trend Explorer</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="Trend Explorer">
                                <span>Amazon Trend Explore</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="Trend Explorer">
                                <span>Shopify Store Explore</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="Trend Explorer">
                                <span>Best Ali Supplier Link</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="eBay Product">
                                <span>eBay Product Link</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="Amazon Product">
                                <span>Amazon Product Link</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="Support">
                                <span>Phone Call Support</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="Support">
                                <span>24/7 Email Support</span>
                            </li>
                        </ul>

                        <a href="{{ route('register') }}" class="pricing_btn">Buy Now</a>
                    </div>
                </div>

                <!--===== PRICING PLAN 02 =====-->
                <div class="pricing_content">
                    <div class="pricing_off">
                        <div class="pricing_off_title">70%</div>
                        <div class="pricing_off_data">Discount</div>
                    </div>
                    <div class="pricing_content_title">Build Annnually</div>

                    <div class="pricing_content_data">
                        <div class="pricing_content_data_title">
                            <span>$25.00</span>
                            $7.99/Month
                        </div>

                        <div class="pricing_content_data_text">
                            <span>Reach greater heights with your marketplace</span>
                            <span>No questions, no contracts, cancel at any time with one click, 100% risk free.</span>
                        </div>
                    </div>

                    <div class="pricing_content_features grid">
                        <ul class="pricing_content_features_list">
                        <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="Live Facebook Ads">
                                <span>Live Facebook Ads</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="Facebook Winning Ads">
                                <span>Facebook Winning Ads</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="Facebook Ads Research">
                                <span>Facebook Ads Research</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="Facebook Ads Content">
                                <span>Facebook Ads Content</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="Facebook Audience Research">
                                <span>Facebook Audience Research</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="Trending Product Research">
                                <span>Trending Product Research</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="Untapped Product Research">
                                <span>Untapped Product Research</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="Competitor Research">
                                <span>Competitor Research</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="Competitors Link">
                                <span>5 Competitors Link</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="Ads Copy">
                                <span>Ads Copy</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="Targeting People">
                                <span>Targeting People</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="Hand Written Description">
                                <span>Hand Written Description</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="Download Fresh Images">
                                <span>Download Fresh Images</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="Download Gif Images">
                                <span>Download Gif Images</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="Download Product Video">
                                <span>Download Product Video</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="Trend Explorer">
                                <span>AliExpress Trend Explorer</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="Trend Explorer">
                                <span>Amazon Trend Explore</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="Trend Explorer">
                                <span>Shopify Store Explore</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="Trend Explorer">
                                <span>Best Ali Supplier Link</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="eBay Product">
                                <span>eBay Product Link</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="Amazon Product">
                                <span>Amazon Product Link</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="Support">
                                <span>Phone Call Support</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="Support">
                                <span>24/7 Email Support</span>
                            </li>
                        </ul>

                        <a href="{{ route('register') }}" class="pricing_btn">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====================== RETURN POLICY ============================-->
    <section class="return_policy section">
        <div class="return_container container">
            <div class="return_content">
                <img src="{{ asset('assets/frontend/')}}/images/money-back-guarantee.png" alt="eButify Refund Policy">
            </div>

            <div class="return_data">
                <h2 class="return_title">Our Fair Refund Policy</h2>
                <span class="return_text">
                    We guarantee 100% satisfaction with our product research tools & support service. However, if our tools still doesn’t meet your needs, we’ll happily refund 100% of your money within 14 days of your purchase. No questions will be asked. Please note that, we do not refund if the product has been purchased on discount. 
                    <a href="{{ route('faq') }}">Read More</a>
                </span>
            </div>
        </div>
    </section>

    <!--====================== FAQ ============================-->
    <section class="faq_home section" id="skill">
        <div class="faq_data container grid">
            <h1 class="faq_data_title">Frequently Asked Questions</h1>
            <span class="faq_data_subtitle">We know you have some questions in mind, we’ve tried to list the most important ones!</span>
            <div class="faq_form">
                <form action="">
                    <input type="text" placeholder="Search">
                    <i class="ri-search-line faq_search_icon"></i>
                    <button type="submit" class="faq_form_btn" name="search">Search</button>
                </form>  
            </div>
        </div>

        <div class="faq_content_container container grid">
            <div>
                <!--========== FAQ 01 ============-->
                <div class="faq_content faq_close">
                    <div class="faq_header">
                        <div>
                            <h1 class="faq_title">What services does eButify provides?</h1>
                        </div>

                        <img src="{{ asset('assets/frontend/')}}/images/Line 8.png" alt="eButify" class="faqicon_close faqicon">
                        <img src="{{ asset('assets/frontend/')}}/images/Group 114.png" alt="eButify" class="faqicon_open faqicon">
                    </div>

                    <div class="faq_list grid">
                        <p>
                            eButify is updating new products on a daily basis - All uploaded products are hand-picked by our top-rated expert product researchers. The products data listed eButify includes Selling Price, Product Cost, Profit, Total sales, Total Order, Google Trends, Google keyword research value, Top 5 private level competitors, Facebook Engagement, Facebook Ads, Product Video, and Facebook Targeting. We put all this Valuable content together for our users so they can find their winning products. Our goal is for you to succeed!
                        </p>
                    </div>
                </div>

                <!--========== FAQ 02 ============-->
                <div class="faq_content faq_close">
                    <div class="faq_header">
                        <div>
                            <h1 class="faq_title">Do you have some kind of community?</h1>
                        </div>

                        <img src="{{ asset('assets/frontend/')}}/images/Line 8.png" alt="eButify" class="faqicon_close faqicon">
                        <img src="{{ asset('assets/frontend/')}}/images/Group 114.png" alt="eButify" class="faqicon_open faqicon">
                    </div>

                    <div class="faq_list grid">
                        <p>
                            Yes! eButify is a big family, we put a lot of work to keep it this way. Every member is family and we want to help him succeed! after you sign up we will send you an email with our group link or simply search for us on Facebook - "eButify Official".
                        </p>
                    </div>
                </div>

                <!--========== FAQ 03 ============-->
                <div class="faq_content faq_close">
                    <div class="faq_header">
                        <div>
                            <h1 class="faq_title">Do you offer product descriptions?</h1>
                        </div>

                        <img src="{{ asset('assets/frontend/')}}/images/Line 8.png" alt="eButify" class="faqicon_close faqicon">
                        <img src="{{ asset('assets/frontend/')}}/images/Group 114.png" alt="eButify" class="faqicon_open faqicon">
                    </div>

                    <div class="faq_list grid">
                        <p>
                            Yes, we provide handmade product descriptions for every product.
                        </p>
                    </div>
                </div>

                <!--========== FAQ 04 ============-->
                <div class="faq_content faq_close">
                    <div class="faq_header">
                        <div>
                            <h1 class="faq_title">Can I use your product description?</h1>
                        </div>

                        <img src="{{ asset('assets/frontend/')}}/images/Line 8.png" alt="eButify" class="faqicon_close faqicon">
                        <img src="{{ asset('assets/frontend/')}}/images/Group 114.png" alt="eButify" class="faqicon_open faqicon">
                    </div>

                    <div class="faq_list grid">
                        <p>
                            Yes, you can use our product description. We provide handmade product descriptions by our talented copyright.
                        </p>
                    </div>
                </div>

                <!--========== FAQ 05 ============-->
                <div class="faq_content faq_close">
                    <div class="faq_header">
                        <div>
                            <h1 class="faq_title">Do you offer gif images?</h1>
                        </div>

                        <img src="{{ asset('assets/frontend/')}}/images/Line 8.png" alt="eButify" class="faqicon_close faqicon">
                        <img src="{{ asset('assets/frontend/')}}/images/Group 114.png" alt="eButify" class="faqicon_open faqicon">
                    </div>

                    <div class="faq_list grid">
                        <p>
                            Yes, we offer gif images for every product. Our specialists collect the gif images from different sources. We provide a maximum of 3 gif images for each product.
                        </p>
                    </div>
                </div>
            </div>

            <div>
                <!--========== FAQ 06 ============-->
                <div class="faq_content faq_close">
                    <div class="faq_header">
                        <div>
                            <h1 class="faq_title">Do you offer videos for ads?</h1>
                        </div>

                        <img src="{{ asset('assets/frontend/')}}/images/Line 8.png" alt="eButify" class="faqicon_close faqicon">
                        <img src="{{ asset('assets/frontend/')}}/images/Group 114.png" alt="eButify" class="faqicon_open faqicon">
                    </div>

                    <div class="faq_list grid">
                        <p>
                            Yes, we provide 2 videos for your ads and campaign. One video is from AliExpress or a different source and another video is from social media.
                        </p>
                    </div>
                </div>

                <!--========== FAQ 07 ============-->
                <div class="faq_content faq_close">
                    <div class="faq_header">
                        <div>
                            <h1 class="faq_title">Do you offer a free trial?</h1>
                        </div>

                        <img src="{{ asset('assets/frontend/')}}/images/Line 8.png" alt="eButify" class="faqicon_close faqicon">
                        <img src="{{ asset('assets/frontend/')}}/images/Group 114.png" alt="eButify" class="faqicon_open faqicon">
                    </div>

                    <div class="faq_list grid">
                        <p>
                            No, we don't have any free trial, we offer a demo version for you to check out tool that who it works and how it's look like.
                        </p>
                    </div>
                </div>

                <!--========== FAQ 08 ============-->
                <div class="faq_content faq_close">
                    <div class="faq_header">
                        <div>
                            <h1 class="faq_title">How much eButify membership costs?</h1>
                        </div>

                        <img src="{{ asset('assets/frontend/')}}/images/Line 8.png" alt="eButify" class="faqicon_close faqicon">
                        <img src="{{ asset('assets/frontend/')}}/images/Group 114.png" alt="eButify" class="faqicon_open faqicon">
                    </div>

                    <div class="faq_list grid">
                        <p>
                            Our pricing plans are really simple to make it easier. We have two plans for our customers. The monthly plan and yearly plan are available now in our system. Only $25 USD for the monthly plan and $300 USD for the yearly plan. We are currently offering a 40% discounted price instead of $25 only $15 monthly for early adopters and a 70% discounted price instead of $300 only $90 yearly for early adopters.
                        </p>
                    </div>
                </div>

                <!--========== FAQ 09 ============-->
                <div class="faq_content faq_close">
                    <div class="faq_header">
                        <div>
                            <h1 class="faq_title">What is your refund policy?</h1>
                        </div>

                        <img src="{{ asset('assets/frontend/')}}/images/Line 8.png" alt="eButify" class="faqicon_close faqicon">
                        <img src="{{ asset('assets/frontend/')}}/images/Group 114.png" alt="eButify" class="faqicon_open faqicon">
                    </div>

                    <div class="faq_list grid">
                        <p>
                            We do have a 14-day money-back guarantee for Our service. Our 14-day money-back guarantee gives you peace of mind that our services will meet the expectations set out in the TOS. If more than 14 days from the date of Payment have passed, we encourage you to contact the eButify Support Team to resolve any issues you may be encountering. We are available 24/7 to give you assistance.
                        </p>
                    </div>
                </div>

                <!--========== FAQ 10 ============-->
                <div class="faq_content faq_close">
                    <div class="faq_header">
                        <div>
                            <h1 class="faq_title">Can I cancel any time?</h1>
                        </div>

                        <img src="{{ asset('assets/frontend/')}}/images/Line 8.png" alt="eButify" class="faqicon_close faqicon">
                        <img src="{{ asset('assets/frontend/')}}/images/Group 114.png" alt="eButify" class="faqicon_open faqicon">
                    </div>

                    <div class="faq_list grid">
                        <p>
                            Yes, you can cancel anytime when you want. 
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <a href="{{ route('faq') }}" class="faq_more_view_btn">See More</a>
    </section>

    <!--============================= FIXED JOURNEY ===================================-->
    <section class="journey">
        <div class="journey_container container">
            <div class="journey_content">
                <img src="{{ asset('assets/frontend/')}}/images/Journey.png" alt="eButify">
            </div>
            
            <div class="journey_data grid">
                <h1 class="featured_title">Start your journey today!</h1>
                <span class="journey_text">Find potential hot selling product in a minute by using eButify product research tool. </span>
                <a href="{{ route('register') }}" class="button_journey shake">Get Full Access Now</a>
            </div>
        </div>
    </section>
</main>
@endsection
@push('js')
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{!! Toastr::message() !!}
<script type="text/javascript">
    @if($errors->any())
        @foreach($errors->all() as $error)
        toastr.error('{{ $error }}','Error',{
            closeButton:true,
            progressBar:true,
        })
        @endforeach

    @endif
</script>
@endpush