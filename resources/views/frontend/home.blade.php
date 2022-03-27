@extends('layouts.frontend.app')
@section('title')
The Best Winning Product Research Tool For Dropshipping
@endsection
@section('facebook_meta')

    <link rel="canonical" href="{{url()->current()}}"/>
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:site_name" content="{{ config('app.name', 'eButify.com') }}" />
    <meta property="og:title" content="{{ config('app.name', 'eButify.com') }} - The Best Winning Product Research Tool For Dropshipping" />
    <meta property="og:description" content="eButify allows you to easily find winning products that are already proven to sell! Only a few clicks - it's time to stop guessing, start selling!" />
    <meta property="og:image" itemprop="image" content="{{ asset('assets/frontend/')}}/images/social-thumbnail.jpg" />
    <meta name="Description" content="eButify allows you to easily find winning products that are already proven to sell! Only a few clicks - it's time to stop guessing, start selling!">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ config('app.name', 'eButify.com') }} - The Best Winning Product Research Tool For Dropshipping">
    <meta name="twitter:description" content="eButify allows you to easily find winning products that are already proven to sell! Only a few clicks - it's time to stop guessing, start selling!">
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
                <span class="home_data_text">We are manually adding winning products on a daily basis. Stop wasting money on bad products. eButify is a curation of the best new products, every day. Wanna be a successful store owner? Subscribe now and get access to our full winning products list with a kickass detailed analytics.</span>
                <div class="home_btn">
                    <a href="{{ route('register') }}" class="button">Start Free Trial</a>
                    <a href="#" class="button button_link wmBox" data-popup="{{ asset('assets/frontend/')}}/video/video.mp4"><img src="{{ asset('assets/frontend/')}}/images/Group 7.png" alt=""> Watch Demo</a>
                </div>
                
                <div class="banner_msg">
                    <img src="{{ asset('assets/frontend/')}}/images/Layer 2.png" alt=""><span class="home_data_message"><p>Trusted by 500+ Businesses in 40+ countries over the world</p></span>
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
        <img src="{{ asset('assets/frontend/')}}/images/Home-Page-Design---WeDevs-U3.png" alt="" class="story_background">
        <div class="story_nav_container container">
            <div class="story_head">
                <div class="linear_story">
                    <h2 class="story_title">Success Stories</h2>
                </div>

                <div class="story_nav">
                    <div class="swiper-pagination"></div>
                    <div class="story_navigation">
                        <div class="story-prev">
                            <img src="{{ asset('assets/frontend/')}}/images/Group 20.png" alt="">
                        </div>

                        <div class="story-next">
                            <img src="{{ asset('assets/frontend/')}}/images/Group 21.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="story_container container">
            <div class="swiper-wrapper">
                <!--=================== STORY 01 ========================-->
                <div class="story_card swiper-slide">
                    <div class="story_data">
                        <span class="story_text">eButify is the product search tool that has been missing for years. Thanks to eButify's Adspy, I can find the best products to pitch on all traffic sources in just a few clicks.</span>
                        <span class="half_container">
                            <span class="half_text">Edi Medi</span>
                            <span class="half_text">Member Since 2021</span>
                        </span>
                    </div>
        
                    <div class="story_content">
                        <img src="{{ asset('assets/frontend/')}}/images/ricardo.jpg" alt="">
                    </div>
                </div>
                
                <!--=================== STORY 02 ========================-->
                <div class="story_card swiper-slide">
                    <div class="story_data">
                        <span class="story_text">I am projecting products I have found on the site to generate $40,000 in sales by the end of this month. Cheers to eButify for serving as a platform to easily find winning products.</span>
                        <span class="half_container">
                            <span class="half_text">Riccardo Pasi</span>
                            <span class="half_text">Member Since 2020</span>
                        </span>
                    </div>
        
                    <div class="story_content">
                        <img src="{{ asset('assets/frontend/')}}/images/ricardo.jpg" alt="">
                    </div>
                </div>

                <!--=================== STORY 03 ========================-->
                <div class="story_card swiper-slide">
                    <div class="story_data">
                        <span class="story_text">If you're struggling to find that (winning) product, this is by far the easiest, quickest way that I've found so far".Use eButify to find winning products to sell in your store in minutes. They have really good software!</span>
                        <span class="half_container">
                            <span class="half_text">James Pheils</span>
                            <span class="half_text">Member Since 2021</span>
                        </span>
                    </div>
        
                    <div class="story_content">
                        <img src="{{ asset('assets/frontend/')}}/images/James.jpg" alt="">
                    </div>
                </div>
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
                            Untapped Product
                        </div>
    
                        <div class="shipping_button swiper-slide">
                            Trending Product
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
                        <div class="swiper-button-next"><img src="{{ asset('assets/frontend/')}}/images/Group 42.png" alt=""></div>
                        <div class="swiper-button-prev"><img src="{{ asset('assets/frontend/')}}/images/Group 40.png" alt=""></div>
    
                        <div class="swiper-wrapper">
                            <!--=== DROP SHIPPING PART 01 ===-->
                            <div class="shipping_content swiper-slide">
                                <div class="shipping_data">
                                    <video id="video_fb_ad" muted autoplay loop>
                                        <source src="{{ asset('assets/frontend/')}}/video/Facebook_AD.mp4" type="video/mp4"    >
                                    </video>
        
                                    <span>
                                        We provide 15+ best-performing winning ads on social media. Our top-rated product researchers pick them on a daily basis. We analyze the products with our master formula using different methods but not only basis on ad engagement. With the Facebook ad, we also provide 5 private level competitor links, AliExpress best supplier product link, Amazon link, eBay link, Youtube short review link, 1 to 3 Copywrite free gif images, handwritten product descriptions, We also provide freshly downloadable square product images and 2 product video for Facebook ad. For marketing purposes, we provide product audience size, ad content, and much more information on the detail page which will help you to scale your business. No need to hire someone for the research because we provide everything you need to start your dropshipping business. So, why you are waiting for?
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
                                        We provide 3 to 5 untapped products depending on the dropshipping market. Our top-rated product researchers pick them on a daily basis. We analyze the products with our master formula using different methods but not only basis on ad engagement. With the Facebook ad, we also provide 5 private level competitor links, AliExpress best supplier product link, Amazon link, eBay link, Youtube short review link, 1 to 3 Copywrite free gif images, handwritten product descriptions, We also provide freshly downloadable square product images and 2 product video for Facebook ad. For marketing purposes, we provide product audience size, ad content, and much more information on the detail page which will help you to scale your business.No need to hire someone for the research because we provide everything you need to start your dropshipping business. So, why you are waiting for?
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
                                        We provide 3 to 5 trending products depending on the dropshipping market which is viral now on social media. Our top-rated product researchers pick them on a daily basis. We analyze the products with our master formula using different methods but not only basis on ad engagement. With the Facebook ad, we also provide 5 private level competitor links, AliExpress best supplier product link, Amazon link, eBay link, Youtube short review link, 1 to 3 Copywrite free gif images, handwritten product descriptions, We also provide freshly downloadable square product images and 2 product video for Facebook ad. For marketing purposes, we provide product audience size, ad content, and much more information on the detail page which will help you to scale your business. No need to hire someone for the research because we provide everything you need to start your dropshipping business. So, why you are waiting for?
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
        <h1 class="scroll_btn_title">Find , Sell, Scale And Succeed <br>All With One Smart Theme</h1>
        <div class="scroll_btn_container container">
            <a href="#research" class="scroll_btn_link">
                <div class="scroll_btn_wrapper">
                    <img src="{{ asset('assets/frontend/')}}/images/searching.png" alt="">

                    <span>Research</span>
                </div>
            </a>

            <a href="#sell" class="scroll_btn_link">
                <div class="scroll_btn_wrapper">
                    <img src="{{ asset('assets/frontend/')}}/images/trade.png" alt="">

                    <span>Sell</span>
                </div>
            </a>

            <a href="#scale" class="scroll_btn_link">
                <div class="scroll_btn_wrapper">
                    <img src="{{ asset('assets/frontend/')}}/images/sales.png" alt="">

                    <span>Scale</span>
                </div>
            </a>

            <a href="#success" class="scroll_btn_link">
                <div class="scroll_btn_wrapper">
                    <img src="{{ asset('assets/frontend/')}}/images/goal.png" alt="">

                    <span>Success</span>
                </div>
            </a>
        </div>
    </div>

    <!--====================== RESEARCH ============================-->
    <div class="research_section section"  id="research">
        <div class="research_container container">
            <div class="research_title_section">
                <img src="{{ asset('assets/frontend/')}}/images/searching.png" alt="">

                <span>Research</span>
            </div>

            <div class="research_wrapper grid">   
                <div class="research_content">
                    <img src="{{ asset('assets/frontend/')}}/images/research.png" alt="">
                </div>

                <div class="research_data">
                    <h2 class="research_title">Validate A Product Idea And See If <br>It'll Be Successful Or Not</h2>

                    <span class="research_text">
                        The process of deciding which products might be successful. Product research is how you validate a product idea and see if it'll be successful or not. It's a part of the product development process that helps identify customer needs and if your idea can meet market demand. The result is a better return on investment on your product.
                    </span>

                    <a href="{{ route('register') }}" class="research_btn shake">Start 7 Days Free Trial</a>
                </div>
            </div>
        </div>
    </div>

    <!--====================== SELL ============================-->
    <div class="sell_section section"  id="sell">
        <div class="sell_container container">
            <div class="sell_title_section">
                <img src="{{ asset('assets/frontend/')}}/images/trade.png" alt="">

                <span>Sell</span>
            </div>

            <div class="sell_wrapper grid">
                <div class="sell_content">
                    <img src="{{ asset('assets/frontend/')}}/images/Sell.png" alt="">
                </div>

                <div class="sell_data">
                    <h2 class="research_title">Select A Potential Hot Selling Product And <br>Sell Like Crazy</h2>

                    <span class="sell_text">
                        Say goodbye to bad products and find the potential hot selling product and sells like hotcakes. It's something your target audience REALLY wants to buy. Don't waste your money, you can get the Facebook viral ad, Untapped product, Trending product in one place. Find winning products easily and sell them like crazy. 
                    </span>

                    <a href="{{ route('register') }}" class="sell_btn shake">Start 7 Days Free Trial</a>
                </div>
            </div>
        </div>
    </div>

    <!--====================== SCALE ============================-->
    <div class="scale_section section"  id="scale">
        <div class="scale_container container">
            <div class="scale_title_section">
                <img src="{{ asset('assets/frontend/')}}/images/sales.png" alt="">

                <span>Scale</span>
            </div>

            <div class="scale_wrapper grid">  
                <div class="scale_content">
                    <img src="{{ asset('assets/frontend/')}}/images/Sceal.png" alt="">
                </div>

                <div class="scale_data">
                    <h2 class="scale_title">Get Marketing Ideas From Our Tools <br>and Scale Your Business</h2>

                    <span class="scale_text">
                        eButify provides the Facebook audience idea and the marketing plan for every product. You can see in detail just click on the view details button check them apply the strategies and Don't stop at Facebook or Google Ads. Get more traffic, more sales, and more freedom.
                    </span>

                    <a href="{{ route('register') }}" class="scale_btn shake">Start 7 Days Free Trial</a>
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
                <a href="{{ route('register') }}" class="try_ebutify_btn">Try eButify For free</a>
                <a href="customer_feedback.html" class="customer_feed_btn">View Customer Feedback</a>
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
                <img src="{{ asset('assets/frontend/')}}/images/goal.png" alt="">

                <span>Success</span>
            </div>

            <div class="success_wrapper grid">
                <div class="success_content">
                    <img src="{{ asset('assets/frontend/')}}/images/Success.png" alt="">
                </div>

                <div class="success_data">
                    <h2 class="research_title">Focus On Your Research Not Your Theme</h2>

                    <span class="success_text">
                        Platforms and tactics may change over time. But marketing principles stay forever. We’re rolling out new masterclass content to give you both timeless strategies and the latest tactics that work today.
                    </span>

                    <a href="{{ route('register') }}" class="success_btn shake">Start 7 Days Free Trial</a>
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
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="">
                                <span>Live Facebook Ads</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="">
                                <span>Facebook Winning Ads</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="">
                                <span>Facebook Ads Research</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="">
                                <span>Facebook Ads Content</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="">
                                <span>Facebook Audience Research</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="">
                                <span>Trending Product Research</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="">
                                <span>Untapped Product Research</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="">
                                <span>Competitor Research</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="">
                                <span>5 Competitors Link</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="">
                                <span>Ads Copy</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="">
                                <span>Targeting People</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="">
                                <span>Hand Written Description</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="">
                                <span>Download Fresh Images</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="">
                                <span>Download Gif Images</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="">
                                <span>Download Product Video</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="">
                                <span>AliExpress Trend Explorer</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="">
                                <span>Amazon Trend Explore</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="">
                                <span>Shopify Store Explore</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="">
                                <span>Best Ali Supplier Link</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="">
                                <span>eBay Product Link</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="">
                                <span>Amazon Product Link</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="">
                                <span>Phone Call Support</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="">
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
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="">
                                <span>Live Facebook Ads</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="">
                                <span>Facebook Winning Ads</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="">
                                <span>Facebook Ads Research</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="">
                                <span>Facebook Ads Content</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="">
                                <span>Facebook Audience Research</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="">
                                <span>Trending Product Research</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="">
                                <span>Untapped Product Research</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="">
                                <span>Competitor Research</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="">
                                <span>5 Competitors Link</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="">
                                <span>Ads Copy</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="">
                                <span>Targeting People</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="">
                                <span>Hand Written Description</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="">
                                <span>Download Fresh Images</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="">
                                <span>Download Gif Images</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="">
                                <span>Download Product Video</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="">
                                <span>AliExpress Trend Explorer</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="">
                                <span>Amazon Trend Explore</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="">
                                <span>Shopify Store Explore</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="">
                                <span>Best Ali Supplier Link</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="">
                                <span>eBay Product Link</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="">
                                <span>Amazon Product Link</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="">
                                <span>Phone Call Support</span>
                            </li>
                            <li class="pricing_content_features_item">
                                <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="">
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
                <img src="{{ asset('assets/frontend/')}}/images/money-back-guarantee.png" alt="">
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

                        <img src="{{ asset('assets/frontend/')}}/images/Line 8.png" alt="" class="faqicon_close faqicon">
                        <img src="{{ asset('assets/frontend/')}}/images/Group 114.png" alt="" class="faqicon_open faqicon">
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

                        <img src="{{ asset('assets/frontend/')}}/images/Line 8.png" alt="" class="faqicon_close faqicon">
                        <img src="{{ asset('assets/frontend/')}}/images/Group 114.png" alt="" class="faqicon_open faqicon">
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

                        <img src="{{ asset('assets/frontend/')}}/images/Line 8.png" alt="" class="faqicon_close faqicon">
                        <img src="{{ asset('assets/frontend/')}}/images/Group 114.png" alt="" class="faqicon_open faqicon">
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

                        <img src="{{ asset('assets/frontend/')}}/images/Line 8.png" alt="" class="faqicon_close faqicon">
                        <img src="{{ asset('assets/frontend/')}}/images/Group 114.png" alt="" class="faqicon_open faqicon">
                    </div>

                    <div class="faq_list grid">
                        <p>
                            Yes, you can use our product description. We provide handmade product descriptions by our talented copywriter.
                        </p>
                    </div>
                </div>

                <!--========== FAQ 05 ============-->
                <div class="faq_content faq_close">
                    <div class="faq_header">
                        <div>
                            <h1 class="faq_title">Do you offer gif images?</h1>
                        </div>

                        <img src="{{ asset('assets/frontend/')}}/images/Line 8.png" alt="" class="faqicon_close faqicon">
                        <img src="{{ asset('assets/frontend/')}}/images/Group 114.png" alt="" class="faqicon_open faqicon">
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

                        <img src="{{ asset('assets/frontend/')}}/images/Line 8.png" alt="" class="faqicon_close faqicon">
                        <img src="{{ asset('assets/frontend/')}}/images/Group 114.png" alt="" class="faqicon_open faqicon">
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

                        <img src="{{ asset('assets/frontend/')}}/images/Line 8.png" alt="" class="faqicon_close faqicon">
                        <img src="{{ asset('assets/frontend/')}}/images/Group 114.png" alt="" class="faqicon_open faqicon">
                    </div>

                    <div class="faq_list grid">
                        <p>
                            Yes, we currently offer a 7-day free trial plan. After that, you can a choice to renew your plan.
                        </p>
                    </div>
                </div>

                <!--========== FAQ 08 ============-->
                <div class="faq_content faq_close">
                    <div class="faq_header">
                        <div>
                            <h1 class="faq_title">How much eButify membership costs?</h1>
                        </div>

                        <img src="{{ asset('assets/frontend/')}}/images/Line 8.png" alt="" class="faqicon_close faqicon">
                        <img src="{{ asset('assets/frontend/')}}/images/Group 114.png" alt="" class="faqicon_open faqicon">
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

                        <img src="{{ asset('assets/frontend/')}}/images/Line 8.png" alt="" class="faqicon_close faqicon">
                        <img src="{{ asset('assets/frontend/')}}/images/Group 114.png" alt="" class="faqicon_open faqicon">
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

                        <img src="{{ asset('assets/frontend/')}}/images/Line 8.png" alt="" class="faqicon_close faqicon">
                        <img src="{{ asset('assets/frontend/')}}/images/Group 114.png" alt="" class="faqicon_open faqicon">
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
                <img src="{{ asset('assets/frontend/')}}/images/Journey.png" alt="">
            </div>
            
            <div class="journey_data grid">
                <h1 class="featured_title">Start your journey today!</h1>
                <span class="journey_text">Find potential hot selling product in a minute by using eButify product research tool. </span>
                <a href="{{ route('register') }}" class="button_journey shake">Start 7 Day Free Trial</a>
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