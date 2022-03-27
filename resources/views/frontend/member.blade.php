@extends('layouts.frontend.app')
@section('title')
About our amazing team memebers
@endsection
@section('facebook_meta')

    <link rel="canonical" href="{{url()->current()}}"/>
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:site_name" content="{{ config('app.name', 'eButify.com') }}" />
    <meta property="og:title" content="{{ config('app.name', 'eButify.com') }} - About our amazing team memebers" />
    <meta property="og:description" content="eButify allows you to easily find winning products that are already proven to sell! Only a few clicks - it's time to stop guessing, start selling!" />
    <meta property="og:image" itemprop="image" content="{{ asset('assets/frontend/')}}/images/social-thumbnail.jpg" />
    <meta name="Description" content="eButify allows you to easily find winning products that are already proven to sell! Only a few clicks - it's time to stop guessing, start selling!">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ config('app.name', 'eButify.com') }} - About our amazing team memebers">
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
                    <a href="{{ route('about') }}" class="about-tab">
                        <img src="{{ asset('assets/frontend/')}}/images/info_alt.png" alt="">
                        <span>About eButify</span>
                    </a>

                    <a href="{{ route('member') }}" class="about-tab team_tab">
                        <img src="{{ asset('assets/frontend/')}}/images/member_alt.png" alt="">
                        <span>The Team</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!--============================= CHIEF EXECUTIVE ===================================-->
    <section class="chief">
        <div class="chief_container container grid">
            <div class="chief_data">
                <div class="chief_text">
                    The Team Behind <br>Our Amazing Product Research Tool
                </div>
            </div>

            <div class="chief_content grid">
                <div class="chief_profile">
                    <div class="chief_profile_img">
                        <img src="{{ asset('assets/frontend/')}}/images/07.png" alt="">
                    </div>

                    <div class="chief_profile_data">
                        <h3 class="chief_profile_title">Md Rezaul Islam</h3>
                        <span class="chief_profile_text">CEO & Founder</span>
                    </div>
                </div>

                <div class="chief_profile">
                    <div class="chief_profile_img">
                        <img src="{{ asset('assets/frontend/')}}/images/09.png" alt="">
                    </div>

                    <div class="chief_profile_data">
                        <h3 class="chief_profile_title">Firoza Khatun</h3>
                        <span class="chief_profile_text">Co-Founder</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--============================= TEAM MEMBERS ===================================-->
    <section class="team">
        <div class="team_container container grid">
            <!--============= TEAM MEMBERS 01 ===============-->
            <div class="team_profile">
                <div class="team_profile_img">
                    <img src="{{ asset('assets/frontend/')}}/images/05.png" alt="">
                </div>

                <div class="team_profile_data">
                    <h3 class="team_profile_title">Torikul Islam</h3>
                    <span class="team_profile_text">Team Operator</span>
                </div>
            </div>

            <!--============= TEAM MEMBERS 02 ===============-->
            <div class="team_profile">
                <div class="team_profile_img">
                    <img src="{{ asset('assets/frontend/')}}/images/02.png" alt="">
                </div>

                <div class="team_profile_data">
                    <h3 class="team_profile_title">Md Suman Mia</h3>
                    <span class="team_profile_text">Product Manager</span>
                </div>
            </div>

            <!--============= TEAM MEMBERS 03 ===============-->
            <div class="team_profile">
                <div class="team_profile_img">
                    <img src="{{ asset('assets/frontend/')}}/images/11.png" alt="">
                </div>

                <div class="team_profile_data">
                    <h3 class="team_profile_title">Sheikh Nayan</h3>
                    <span class="team_profile_text">Head Of Development</span>
                </div>
            </div>

            <!--============= TEAM MEMBERS 04 ===============-->
            <div class="team_profile">
                <div class="team_profile_img">
                    <img src="{{ asset('assets/frontend/')}}/images/10.png" alt="">
                </div>

                <div class="team_profile_data">
                    <h3 class="team_profile_title">AR Uddin Shovon</h3>
                    <span class="team_profile_text">Laravel Developer</span>
                </div>
            </div>

            <!--============= TEAM MEMBERS 05 ===============-->
            <div class="team_profile">
                <div class="team_profile_img">
                    <img src="{{ asset('assets/frontend/')}}/images/01.png" alt="">
                </div>

                <div class="team_profile_data">
                    <h3 class="team_profile_title">Robiul Islam</h3>
                    <span class="team_profile_text">Talent Product Researcher</span>
                </div>
            </div>

            <!--============= TEAM MEMBERS 06 ===============-->
            <div class="team_profile">
                <div class="team_profile_img">
                    <img src="{{ asset('assets/frontend/')}}/images/Noyon.png" alt="">
                </div>

                <div class="team_profile_data">
                    <h3 class="team_profile_title">Aowrongojeb Noyon</h3>
                    <span class="team_profile_text">Talent Product Researcher</span>
                </div>
            </div>

            <!--============= TEAM MEMBERS 07 ===============-->
            <div class="team_profile">
                <div class="team_profile_img">
                    <img src="{{ asset('assets/frontend/')}}/images/Sadik.png" alt="">
                </div>

                <div class="team_profile_data">
                    <h3 class="team_profile_title">Sadiqur Islam</h3>
                    <span class="team_profile_text">Product Researcher</span>
                </div>
            </div>

            <!--============= TEAM MEMBERS 08 ===============-->
            <div class="team_profile">
                <div class="team_profile_img">
                    <img src="{{ asset('assets/frontend/')}}/images/03.png" alt="">
                </div>

                <div class="team_profile_data">
                    <h3 class="team_profile_title">Abdul Khalek</h3>
                    <span class="team_profile_text">Product Researcher</span>
                </div>
            </div>

            <!--============= TEAM MEMBERS 09 ===============-->
            <div class="team_profile">
                <div class="team_profile_img">
                    <img src="{{ asset('assets/frontend/')}}/images/04.png" alt="">
                </div>

                <div class="team_profile_data">
                    <h3 class="team_profile_title">Abdul Alim</h3>
                    <span class="team_profile_text">Product Researcher</span>
                </div>
            </div>

            <!--============= TEAM MEMBERS 10 ===============-->
            <div class="team_profile">
                <div class="team_profile_img">
                    <img src="{{ asset('assets/frontend/')}}/images/06.png" alt="">
                </div>

                <div class="team_profile_data">
                    <h3 class="team_profile_title">Biplob Sheikh</h3>
                    <span class="team_profile_text">Product Researcher</span>
                </div>
            </div>

            <!--============= TEAM MEMBERS 11 ===============-->
            <div class="team_profile">
                <div class="team_profile_img">
                    <img src="{{ asset('assets/frontend/')}}/images/Mahin.png" alt="">
                </div>

                <div class="team_profile_data">
                    <h3 class="team_profile_title">Mahin Or Roshid</h3>
                    <span class="team_profile_text">Motion Graphic & Video Editor</span>
                </div>
            </div>

            <!--============= TEAM MEMBERS 12 ===============-->
            <div class="team_profile">
                <div class="team_profile_img">
                    <img src="{{ asset('assets/frontend/')}}/images/Rubel.png" alt="">
                </div>

                <div class="team_profile_data">
                    <h3 class="team_profile_title">Rubel Mahmud</h3>
                    <span class="team_profile_text">Graphics Designer</span>
                </div>
            </div>

            <!--============= TEAM MEMBERS 13 ===============-->
            <div class="team_profile">
                <div class="team_profile_img">
                    <img src="{{ asset('assets/frontend/')}}/images/Joytish.png" alt="">
                </div>

                <div class="team_profile_data">
                    <h3 class="team_profile_title">Jyotish Barman</h3>
                    <span class="team_profile_text">Frontend Designer</span>
                </div>
            </div>

            <!--============= TEAM MEMBERS 14 ===============-->
            <div class="team_profile">
                <div class="team_profile_img">
                    <img src="{{ asset('assets/frontend/')}}/images/Tafsir.png" alt="">
                </div>

                <div class="team_profile_data">
                    <h3 class="team_profile_title">Tafsir</h3>
                    <span class="team_profile_text">Frontend Designer</span>
                </div>
            </div>

            <!--============= TEAM MEMBERS 15 ===============-->
            <div class="team_profile">
                <div class="team_profile_img">
                    <img src="{{ asset('assets/frontend/')}}/images/mehedi.png" alt="">
                </div>

                <div class="team_profile_data">
                    <h3 class="team_profile_title">Mehedi Hasan</h3>
                    <span class="team_profile_text">Frontend Designer</span>
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