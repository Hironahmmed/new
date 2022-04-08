@extends('layouts.frontend.app')
@section('title')
{{ $post->title }}
@endsection
@section('facebook_meta')

    <link rel="canonical" href="{{url()->current()}}"/>
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:site_name" content="{{ config('app.name', 'eButify.com') }}" />
    <meta property="og:title" content="{{ config('app.name', 'eButify.com') }} {{ $post->title }}" />
    <meta property="og:description" content="{{ $post->meta_desc }}" />
    <meta property="og:image" itemprop="image" content="{{ Storage::disk('public')->url('post/'.$post->image) }}" />
    <meta property="og:image:width" content="1600" />
    <meta property="og:image:height" content="1066" />
    <meta property="article:published_time" content="{{ $post->created_at }}" />
    <meta property="article:modified_time" content="{{ $post->updated_at }}" />
    <meta name="Description" content="{{ $post->meta_desc }}">
    <meta name="keywords" content="product research, winning product research, product research tool, winning product research tool, find winning products, research, product idea, product spy, winning products, untapped product, facebook product research tool, tiktok product research tool, aliexpress product research, amazon product research">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ config('app.name', 'eButify.com') }} {{ $post->title }}">
    <meta name="twitter:description" content="{{ $post->meta_desc }}">
    <meta name="twitter:image" content="{{ Storage::disk('public')->url('post/'.$post->image) }}">
    <meta name="twitter:label1" content="Written by" />
    <meta name="twitter:data1" content="{{ $post->user->name }}" />
    <meta name="twitter:label2" content="Total View" />
    <meta name="twitter:data2" content="{{ $post->view_count }}" />

@endsection
@push('css')
<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
@endpush
@section('content')
<main class="main">
    <!--============================= HOME ===================================-->
    <section class="home" id="home">
        <div class="custom-shape-divider-bottom-1638455351">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M600,112.77C268.63,112.77,0,65.52,0,7.23V120H1200V7.23C1200,65.52,931.37,112.77,600,112.77Z" class="shape-fill"></path>
            </svg>
        </div>
        <div class="single_container container grid">
            
        </div>
    </section>

    <!--============================= BLOG SINGLE POST =======================-->
    <section class="single_post">
        <div class="single_post_container container grid">
            <div class="single_post_content">
                <img src="{{ Storage::disk('public')->url('post/'.$post->image) }}" alt="" class="single_post_content_img">
            </div>

            <div class="share_post">
                <div class="share_post_title">Share Now</div>

                <a href="https://www.facebook.com/share.php?u={{ route('post.details',$post->slug) }}" class="share_post_btn fb_share" target="blank">
                    <img src="{{ asset('assets/frontend/')}}/images/icon-footer-facebook.png" alt="">
                </a>

                <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ route('post.details',$post->slug) }}" class="share_post_btn linkdin_share" target="blank">
                    <img src="{{ asset('assets/frontend/')}}/images/icon-footer-linkdin.png" alt="">
                </a>

                <a href="https://pinterest.com/pin/create/bookmarklet/?media={{ Storage::disk('public')->url('post/'.$post->image) }}&url={{ route('post.details',$post->slug) }}&is_video=false&description={!! str_limit($post->meta_desc,'180') !!}" class="share_post_btn printerest_share" target="blank">
                    <img src="{{ asset('assets/frontend/')}}/images/icon-footer-pintrest.png" alt="">
                </a>
                
                <a href="https://twitter.com/intent/tweet?url={{ route('post.details',$post->slug) }}" class="share_post_btn twitter_share" target="blank">
                    <img src="{{ asset('assets/frontend/')}}/images/icon-footer-twitter.png" alt="">
                </a>
            </div>

            <div class="single_post_wrapper grid">
                <div class="single_post_data grid">
                    <div class="single_post_headline">{{ $post->title }}</div>
    
                    <div class="single_post_card_data_author">
                        <div class="single_post_card_author">
                            <img src="{{ Storage::disk('public')->url('profile/'.$post->user->image) }}" alt="{{ $post->user->name }}">
                            <span>{{ $post->user->name }}</span>
                        </div>
    
                        <div class="single_post_card_author">
                            <img src="{{ asset('assets/frontend/')}}/images/calender-svgrepo-com.png" alt="">
                            <span>{{ $post->created_at->diffForHumans() }}</span>
                        </div>
    
                        <div class="single_post_card_author">
                            <img src="{{ asset('assets/frontend/')}}/images/XMLID_843_.png" alt="">
                            <span>{{ $post->view_count }}</span>
                        </div>
                    </div>
    
                    <div class="single_post_card_text grid">
                        {!! $post->body !!}
                    </div>
                </div>
                
                <div class="blog_sidebar sidebar">
                    <div class="tiptricks_container theiaStickySidebar">
                        <img src="{{ asset('assets/frontend/')}}/images/subscribe_widget_bg.png" alt="">
    
                        <div class="tiptricks_subtitle">Subscribe to get</div>
    
                        <div class="tiptricks_title">
                            <span class="tiptricks_title_span1">Inspiration</span>Tips & Tricks<span class="tiptricks_title_span2">Updates</span>
                        </div>
    
                        <form method="POST" action="{{ route('subscriber.store') }}" class="tiptricks_form">
                        @csrf
                            <input type="text" name="email" placeholder="Email Address" required>
                            <div class="check_wrapper">
                                <input type="checkbox" required>
                                <p>I've read and accept the Privacy Policy and Terms *</p>
                            </div>
                            <button type="submit" class="tiptricks_form_btn">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--============================= SINGLE PAGE AUTHOR ===================================-->
    <section class="author_section">
        <div class="container">
            <div class="author_banner_wrapper grid">
                <div class="author_banner">
                    <div class="author_banner_content">
                        <img src="{{ Storage::disk('public')->url('profile/'.$post->user->image) }}" alt="{{ $post->user->name }}">
                    </div>
    
                    <div class="author_banner_data">
                        <span class="author_banner_data_text">Name: {{ $post->user->name }}</span>
    
                        <span class="author_banner_data_text">Role: {{ $post->user->role->name }}</span>
    
                        <span class="author_banner_data_text">Total Post: {{ $post->user->posts->count() }}</span>
    
                        <div class="author_banner_data_details">
                            {{ $post->user->about }}
                        </div>
                    </div>
                </div>

                <div class="author_get">
                    <span class="author_get_number">{{ $users + 670 }}</span>
                    <span class="author_get_title">Satisfied Client</span>
                    <a href="{{ route('register') }}" class="author_started_btn">Get Started</a>
                </div>
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
<script src="{{ asset('assets/frontend/')}}/js/ResizeSensor.min.js"></script>
<script src="{{ asset('assets/frontend/')}}/js/theia-sticky-sidebar.min.js"></script>
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

    /*========= CHANGE BACKGROUND HEADER =========*/
    function scrollHeader(){
            const header = document.getElementById('header'),
                navImg = document.getElementById('nav-img')

            if(this.scrollY >= 100) header.classList.add('scroll-header'); else header.classList.remove('scroll-header')

            if(this.scrollY >= 100) navImg.src = "images/scroll-logo.png"; else navImg.src = "images/logo.png"

        }
        window.addEventListener('scroll', scrollHeader)
       /*=============== ACTIVE PAGINATION ==================*/
       $(document).ready(function(){
        $(".blog_number").on('click', function(){
            $(this).siblings().removeClass('page_active');
            $(this).addClass('page_active');
        })

        $(".blog_prev").on('click', function(){
            $(this).siblings().removeClass('page_active');
            $(this).addClass('page_active');
        })

        $(".blog_next").on('click', function(){
            $(this).siblings().removeClass('page_active');
            $(this).addClass('page_active');
        })
    })


    jQuery(document).ready(function() {
    jQuery('.sidebar').theiaStickySidebar({
            // Settings
            additionalMarginTop: 90
        });
    });
</script>
@endpush