@extends('layouts.frontend.app')
@section('title')
About Us and Our Company
@endsection
@section('facebook_meta')

    <link rel="canonical" href="{{url()->current()}}"/>
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:site_name" content="{{ config('app.name', 'eButify.com') }}" />
    <meta property="og:title" content="{{ config('app.name', 'eButify.com') }} - About Us and Our Company" />
    <meta property="og:description" content="eButify allows you to easily find winning products that are already proven to sell! Only a few clicks - it's time to stop guessing, start selling!" />
    <meta property="og:image" itemprop="image" content="{{ asset('assets/frontend/')}}/images/social-thumbnail.jpg" />
    <meta name="Description" content="eButify allows you to easily find winning products that are already proven to sell! Only a few clicks - it's time to stop guessing, start selling!">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ config('app.name', 'eButify.com') }} - About Us and Our Company">
    <meta name="twitter:description" content="eButify allows you to easily find winning products that are already proven to sell! Only a few clicks - it's time to stop guessing, start selling!">
    <meta name="twitter:image" content="{{ asset('assets/frontend/')}}/images/social-thumbnail.jpg">

@endsection
@push('css')
<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
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

        <div class="about_container container grid">
            <div class="about_data grid">
                <h2 class="about_title">About Our Amazing Creation</h2>
                <div class="about_tabs">
                    <a href="{{ route('about') }}" class="about-tab eButify_tab">
                        <img src="{{ asset('assets/frontend/')}}/images/info.png" alt="">
                        <span>About eButify</span>
                    </a>

                    <a href="{{ route('member') }}" class="about-tab">
                        <img src="{{ asset('assets/frontend/')}}/images/member.png" alt="">
                        <span>The Team</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!--============================= WHO WE ARE ===================================-->
    <section class="who section">
        <div class="who_container container grid">
            <div class="who_content">
                <img src="{{ asset('assets/frontend/')}}/images/who-we-are-thumb.png" alt="">
            </div>

            <div class="who_data grid">
                <h2 class="who_title"><span>Who</span> We Are</h2>
                <div class="who_text">
                    eButify is the maker of Facebook ads research, Untapped product research, Trending Product Research tools, and AliExpress, Amazon, and Shopify explorer tools. We are atop-rated freelancer on Upwork and innovators who are constantly helping powerful dropshipping businesses and solve any kind of drop shipping problem. Our existence depends on researching products and services that help to scale your dropshipping business.
                </div>
            </div>
        </div>
    </section>

    <!--============================= OUR GOALS ===================================-->
    <section class="goal">
        <div class="goal_container container grid">
            <div class="goal_content">
                <img src="{{ asset('assets/frontend/')}}/images/our-goal-thumb.png" alt="">
            </div>
            
            <div class="goal_data grid">
                <h2 class="goal_title">Our Goal</h2>
                <h2 class="goal_subtitle">We create <span class="goal_subtitle_product">product research Tools</span> <br>to Empower Small <span  class="goal_subtitle_dropshipping">Dropshipping <br>Businesses</span> Around the World</h2>
                <div class="goal_text">
                    Our main focus is to research high-quality and scalable winning products using some secret methods that allow you to spy on other Shopify stores and find guaranteed winning products every day. We mostly focus on our research abilities, the untapped products, and the trending products to help individuals or companies with dropshipping and enterprise solutions. We love simplicity and intuitiveness, so our tools are user-friendly and dynamic.
                </div>
            </div>
        </div>
    </section>

    <!--============================= ORIGIN STORY ===================================-->
    <section class="origin">
        <div class="origin_container container grid">
            <img src="{{ asset('assets/frontend/')}}/images/about_back.png" alt="" class="origin_content">
            
            <div class="origin_data grid">
                <h2 class="origin_title">Origin Story</h2>
                <div class="origin_text">
                    After completing some mind-blowing product research courses from different sources we Initially began our journey as individual freelancers in Upwork, Fiverr, and PeoplePerHour in 2016. After gathering enough experience, we launched a local agency in 2019 that provides winning products, copywriting, store design, theme customization, etc to our local clients. After that, we decided to help people all over the world and made eButify tools in 2020.
                </div>
                <div class="origin_text">
                    eButify now has many amazing products research tools including Facebook ads spy, Untapped product research, Trending product research, AliExpress explorer, Amazon Explorer, and Shopify store explorer. We have 500+ users and businesses using our eButify tool.
                </div>
            </div>
        </div>
    </section>

    <!--============================= SUBSCRIBE ===================================-->
    <section class="subscribe">
        <div class="subscribe_container container grid">            
            <div class="subscribe_data grid">
                <h2 class="subscribe_title">Drop Your Email & Be a Part of Our Family</h2>
                <div class="subscribe_form">
                    <form action="">
                        <input type="email">
                        <button type="submit" class="subscribe_btn">Subscribe Now</button>
                    </form>
                </div>
                <div class="subscribe_text">
                    Get Product Updates, Coupons & More
                </div>
            </div>
        </div>
    </section>

    <!--============================= GLANCE ===================================-->
    <section class="glance">
        <div class="glance_container container grid">            
            <div class="glance_data grid">
                <h2 class="glance_title"><span>eButify</span> at A Glance</h2>
                <div class="glance_text">
                    eButify is a popular name in the dropshipping industry powering up hundreds of Shopify, eBay, and Amazon stores with amazing tools.
                </div>
                <div class="glance_list">
                    <!--============= GLANCE ITEM 01 ===============-->
                    <div class="glance_item">
                        <div class="glance_item_content">
                            <img src="{{ asset('assets/frontend/')}}/images/Group 229.png" alt="">
                        </div>
                        <div class="glance_item_data">
                            <h3 class="glance_item_title">15+</h3>
                            <span class="glance_item_text">Team Members</span>
                        </div>
                    </div>

                    <!--============= GLANCE ITEM 02 ===============-->
                    <div class="glance_item">
                        <div class="glance_item_content">
                            <img src="{{ asset('assets/frontend/')}}/images/Group 230.png" alt="">
                        </div>
                        <div class="glance_item_data">
                            <h3 class="glance_item_title">8+</h3>
                            <span class="glance_item_text">Amazing Services</span>
                        </div>
                    </div>

                    <!--============= GLANCE ITEM 03 ===============-->
                    <div class="glance_item">
                        <div class="glance_item_content">
                            <img src="{{ asset('assets/frontend/')}}/images/Group 228.png" alt="">
                        </div>
                        <div class="glance_item_data">
                            <h3 class="glance_item_title">18M+</h3>
                            <span class="glance_item_text">Available Products</span>
                        </div>
                    </div>

                    <!--============= GLANCE ITEM 04 ===============-->
                    <div class="glance_item">
                        <div class="glance_item_content">
                            <img src="{{ asset('assets/frontend/')}}/images/Group 227.png" alt="">
                        </div>
                        <div class="glance_item_data">
                            <h3 class="glance_item_title">600+</h3>
                            <span class="glance_item_text">Happy Customers</span>
                        </div>
                    </div>

                    <!--============= GLANCE ITEM 05 ===============-->
                    <div class="glance_item">
                        <div class="glance_item_content">
                            <img src="{{ asset('assets/frontend/')}}/images/Group 234.png" alt="">
                        </div>
                        <div class="glance_item_data">
                            <h3 class="glance_item_title">40+</h3>
                            <span class="glance_item_text">Countries Worldwide</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="glance_content">
                <div class="glance_content_data">Our Daily Plan</div>
                <img src="{{ asset('assets/frontend/')}}/images/Group 237.png" alt="">
            </div>
        </div>
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