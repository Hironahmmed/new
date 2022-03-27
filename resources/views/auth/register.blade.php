@extends('layouts.frontend.app')
@section('title','User Registration')
@section('facebook_meta')

    <link rel="canonical" href="{{url()->current()}}"/>
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:site_name" content="{{ config('app.name', 'eButify.com') }}" />
    <meta property="og:title" content="{{ config('app.name', 'eButify.com') }} - User Registration" />
    <meta property="og:description" content="eButify allows you to easily find winning products that are already proven to sell! Only a few clicks - it's time to stop guessing, start selling!" />
    <meta property="og:image" itemprop="image" content="{{ asset('assets/frontend/')}}/images/social-thumbnail.jpg" />
    <meta name="Description" content="eButify allows you to easily find winning products that are already proven to sell! Only a few clicks - it's time to stop guessing, start selling!">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ config('app.name', 'eButify.com') }} - User Registration">
    <meta name="twitter:description" content="eButify allows you to easily find winning products that are already proven to sell! Only a few clicks - it's time to stop guessing, start selling!">
    <meta name="twitter:image" content="{{ asset('assets/frontend/')}}/images/social-thumbnail.jpg">

@endsection
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

        <div class="signin_page_container container grid">
            <div class="signin_data">
                <h1 class="signin_title">Start your Journey <br>With eButify</h1>
                <span class="signin_text">
                    <ul class="signinlist">
                        <li class="signin_item">
                            <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="">
                            <span>Save hours a day in researching products.</span>
                        </li>
                        <li class="signin_item">
                            <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="">
                            <span>Make money by only promoting proven winners</span>
                        </li>
                        <li class="signin_item">
                            <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="">
                            <span>Learn in our Dropshipping Success Academy</span>
                        </li>
                        <li class="signin_item">
                            <img src="{{ asset('assets/frontend/')}}/images/check-mark.png" alt="">
                            <span>It’s very easy to try! Nothing to lose, and everything to gain!</span>
                        </li>
                    </ul>
                </span>
            </div>

            <div class="signin_content">
                <img src="{{ asset('assets/frontend/')}}/images/Page-1.png" alt="" class="form_img">

                <div class="signin_form_container">
                    <form method="POST" action="{{ route('register') }}" class="signin_form grid">
                        @csrf
                        <h2 class="signin_form_title">Complete Your <span>Account</span></h2>

                        <div class="progress">
                            <div class="fill step"></div>
                        </div>

                        <span class="signin_form_text">Join thousands of ecom entrepreneurs <br>achieving Dropshipping success</span>

                        <div class="signin_content_item">
                            <input id="name" type="text" name="name" value="{{ old('name') }}" placeholder="Enter your full name" required autocomplete="name" autofocus>
                            <input id="username" type="text" name="username" value="{{ old('username') }}" placeholder="Enter your username" required autocomplete="username" autofocus>
                            <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="Enter your email" required autocomplete="email">
                            <input id="password" type="password" name="password" placeholder="Enter password" required autocomplete="new-password">
                            <input id="password-confirm" type="password" name="password_confirmation" placeholder="Confirm password" required autocomplete="new-password">
                        </div>

                        <div class="signin_flex">
                            <div>
                                <button type="submit" class="register_btn">Register</button>
                            </div>
                            
                            <div>
                                <span>Already a member? <a href="{{ route('login') }}" class="login_now">Login Now</a></span>
                            </div>
                        </div>
                    </form>
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
                <a href="signup.html" class="button_journey shake">Start 7 Day Free Trial</a>
            </div>
        </div>
    </section>
</main>

@endsection
