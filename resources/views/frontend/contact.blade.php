@extends('layouts.frontend.app')
@section('title','Contact Us')
@section('facebook_meta')

    <link rel="canonical" href="{{url()->current()}}"/>
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:site_name" content="{{ config('app.name', 'eButify.com') }}" />
    <meta property="og:title" content="{{ config('app.name', 'eButify.com') }} - Contact Us" />
    <meta property="og:description" content="eButify allows you to easily find winning products that are already proven to sell! Only a few clicks - it's time to stop guessing, start selling!" />
    <meta property="og:image" itemprop="image" content="{{ asset('assets/frontend/')}}/images/social-thumbnail.jpg" />
    <meta name="Description" content="eButify allows you to easily find winning products that are already proven to sell! Only a few clicks - it's time to stop guessing, start selling!">
    <meta name="keywords" content="product research, winning product research, product research tool, winning product research tool, find winning products, research, product idea, product spy, winning products, untapped product, facebook product research tool, tiktok product research tool, aliexpress product research, amazon product research">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ config('app.name', 'eButify.com') }} - Contact Us">
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

        <div class="contact_container container">
            <div class="home_data">
                <h1 class="contact_title">Contact Us</h1>
            </div>

            <div class="contact_content">
                <div class="contact_form_container">
                    @if(Session::has('message_sent'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('message_sent')}}
                    </div>
                    @endif
                    <form action="{{route('emails')}}" method="POST" class="contact_form grid" enctype="multipart/form-data">
                    @csrf
                        <div class="contact_form_wrapper grid">
                            <div class="contact_input_wrapper grid">
                                <div class="contact_input_container">
                                    <label for="full_name">Your Name*</label>
                                    <input type="text" placeholder="Enter your full name" id="name" name="name" required>
                                </div>
        
                                <div class="contact_input_container">
                                    <label for="email_address">Your Email*</label>
                                    <input type="email" placeholder="Enter your valid email" id="email_address" name="email" required>
                                </div>
        
                                <div class="contact_input_container">
                                    <label for="phone_no">Your Phone*</label>
                                    <input type="number" placeholder="Enter your phone number" id="phone" name="phone" required>
                                </div>
                            </div>

                            <div class="input_wrapper">
                                <div class="contact_input_container">
                                    <label for="feedback_msg">Your Message*</label>
                                    <textarea name="message" id="feedback_msg" cols="30" rows="10" placeholder="Start writing your message here..." required></textarea>
                                </div>
                            </div>
                        </div>
                        

                        <div class="contact_btn_wrapper">
                            <button type="submit">Send Message</button>
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