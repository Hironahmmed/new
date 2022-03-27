@extends('layouts.frontend.app')
@section('title')
Free Tips and Resources for Dropshippers
@endsection
@section('facebook_meta')

    <link rel="canonical" href="{{url()->current()}}"/>
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:site_name" content="{{ config('app.name', 'eButify.com') }}" />
    <meta property="og:title" content="{{ config('app.name', 'eButify.com') }} - Free Tips and Resources for Dropshippers" />
    <meta property="og:description" content="{{ config('app.name', 'eButify.com') }} - Check out the eButify blog for tips and resources through every stage of your journey. From finding winning products and building a store, to marketing and scaling up" />
    <meta property="og:image" itemprop="image" content="{{ asset('assets/frontend/')}}/images/social-thumbnail.jpg" />
    <meta name="Description" content="{{ config('app.name', 'eButify.com') }} - Check out the eButify blog for tips and resources through every stage of your journey. From finding winning products and building a store, to marketing and scaling up">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ config('app.name', 'eButify.com') }} - Free Tips and Resources for Dropshippers">
    <meta name="twitter:description" content="{{ config('app.name', 'eButify.com') }} - Check out the eButify blog for tips and resources through every stage of your journey. From finding winning products and building a store, to marketing and scaling up">
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

        <div class="blog_container container">
            <div class="blog_banner grid">
                <div class="blog_banner_data">
                    <p class="blog_banner_data_title">eButify Blog</p>
                    <span class="blog_banner_data_text">Join 150,000+ Subscribers</span>

                    <form method="POST" action="{{ route('subscriber.store') }}" class="blog_banner_data_form">
                    @csrf
                        <input type="text" name="email" placeholder="Email Address"  required>
                        <button class="blog_banner_subscribe" type="submit">Subscribe</button>
                    </form>

                    <span class="blog_banner_data_text">Get access to exclusive guides, tips, updates, ebooks, and more.</span>
                </div>

                <div class="blog_banner_content">
                    <img src="{{ asset('assets/frontend/')}}/images/output-onlinepngtools.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <!--============================= BLOG POST ===================================-->
    <section class="post">
        <div class="featured_post_wrapper container">
            @foreach($features as $feature)
            <div class="featured_post">
                <div class="featured_post_content">
                    <a href="" class="featured_post_btn">Featured Post</a>
                    <img src="{{ Storage::disk('public')->url('post/'.$feature->image) }}" alt="">
                </div>

                <div class="featured_post_data">
                    <div class="featured_post_title">
                        <a href="{{ route('post.details',$feature->slug) }}">{{ $feature->title }}</a>
                    </div>

                    <div class="featured_post_text">
                    {!! str_limit($feature->meta_desc,'150') !!}
                    </div>

                    <a href="{{ route('post.details',$feature->slug) }}" class="featured_post_read">
                        <p>Continue Reading</p>
                        <img src="{{ asset('assets/frontend/')}}/images/Group 274.png" alt="">
                    </a>

                    <div class="featured_post_data_author">
                        <div class="featured_post_author">
                            <img src="{{ Storage::disk('public')->url('profile/'.$feature->user->image) }}" alt="">
                            <span>{{ $feature->user->name }}</span>
                        </div>

                        <div class="featured_post_author">
                            <img src="{{ asset('assets/frontend/')}}/images/calender-svgrepo-com.png" alt="">
                            <span>{{ $feature->created_at->toFormattedDateString() }}</span>
                        </div>

                        <div class="featured_post_author">
                            <img src="{{ asset('assets/frontend/')}}/images/XMLID_843_.png" alt="">
                            <span>{{ $feature->view_count }}</span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="post_container container grid">
            <div class="post_wrapper grid">
                @foreach($posts as $post)
                <div class="post_card">
                    <div class="post_card_content">
                        <img src="{{ Storage::disk('public')->url('post/'.$post->image) }}" alt="{{ $post->title }}">
                    </div>

                    <div class="post_card_data">
                        <a href="{{ route('post.details',$post->slug) }}" class="post_card_data_title">{{ $post->title }}</a>

                        <div class="post_card_data_text">
                            {!! str_limit($post->meta_desc,'90') !!}
                        </div>

                        <div class="post_card_data_author">
                            <div class="post_card_author">
                                <img src="{{ Storage::disk('public')->url('profile/'.$post->user->image) }}" alt="">
                                <span>{{ $post->user->name }}</span>
                            </div>

                            <div class="post_card_author">
                                <img src="{{ asset('assets/frontend/')}}/images/calender-svgrepo-com.png" alt="">
                                <span>{{ $post->created_at->toFormattedDateString() }}</span>
                            </div>

                            <div class="post_card_author">
                                <img src="{{ asset('assets/frontend/')}}/images/XMLID_843_.png" alt="">
                                <span>{{ $post->view_count }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            
            <div class="blog_sidebar">
                <div class="popular_post_container grid">
                    <div class="popular_post_title">Most <span>Popular</span></div>
                    <div class="popular_post_wrapper">
                        @foreach($popular as $popular)
                        <a href="{{ route('post.details',$feature->slug) }}">
                        <div class="popular_post">
                            
                            <img src="{{ Storage::disk('public')->url('post/'.$popular->image) }}" alt="">
                            <p>{{ $popular->title,'30' }}</p>
                        </div></a>
                        @endforeach
                    </div>
                </div>

                <div class="tiptricks_container">
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
                            <p>I’ve read and accept the Privacy Policy and Terms *</p>
                        </div>
                        <button type="submit" class="tiptricks_form_btn">Subscribe</button>
                    </form>
                </div>

                <div class="off_container">
                    <img src="{{ asset('assets/frontend/')}}/images/Screenshot_7.png" alt="">
                </div>
            </div>
        </div>

        <div class="blog_pagination">
            <div class="blog_prev">Prev</div>
            <div class="blog_number">1</div>
            <div class="blog_number">2</div>
            <div class="blog_number">3</div>
            <div class="blog_number">4</div>
            <div class="blog_next">Next</div>
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