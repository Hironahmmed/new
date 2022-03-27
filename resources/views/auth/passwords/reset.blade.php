@extends('layouts.frontend.app')
@section('title','Chnage Password')
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

        <div class="login_page_container container grid">
            <div class="login_data">
                <h1 class="login_title">Benefits to Joining</h1>
                <span class="login_text">
                    <ul class="loginlist">
                        <li class="login_item">Access to Unlimited Products</li>
                        <li class="login_item">Download Fresh Thumbnail & Ads Videos</li>
                        <li class="login_item">Access to Facebook Audience Research</li>
                        <li class="login_item">Explore AliExpress, Amazon, and Shopify Store</li>
                        <li class="login_item">Manage Orders & Subscription</li>
                    </ul>
                </span>
            </div>

            <div class="login_content">
                <img src="{{ asset('assets/frontend/')}}/images/Page-1.png" alt="" class="form_img">

                <div class="login_form_container">
                    <form action="{{ route('password.update') }}" class="login_form grid" method="POST" >
                        @csrf
                        <h2 class="login_form_title">Change Your <span>Password</span></h2>
                        @if (session('error'))
                        <div class="alert alert-danger">
                            <span>{{ session('error') }}</span>
                        </div>
                        @endif
                        <div class="login_content_item">
                            <label for="email">Email</label>

                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <div class="login_content_item">
                            <label for="log_pass">New Password</label>
                            <input id="password" type="password" name="password" placeholder="Enter New password" required autocomplete="new-password">
                        </div>

                        <div class="login_content_item">
                            <label for="log_pass">Confirm Password</label>

                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm password" required autocomplete="new-password">
                            
                        </div>


                        <div class="login_flex">
                            <div>
                                <button type="submit" class="login_btn">Chnage Password</button>
                            </div>
                            
                            <div>
                                <span>New user to eButify? <a href="{{ route('register') }}" class="sign_now">Sign Up Now</a></span>
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
