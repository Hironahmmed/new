<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="icon" type="image/png" href="{{ asset('assets/frontend/')}}/images/favicon.png">
    <title>{{ config('app.name', 'eButify.com') }} - @yield('title')</title>
    <meta name="google-site-verification" content="d9IRp33pr75pL73aVc0a6FDTx17zY-JvQpPB2J1hsug" />
    <meta name="facebook-domain-verification" content="hlzbm5w6c8qyinias8dpr1kv9nd82e" />
    @yield('facebook_meta')
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/frontend/')}}/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend/')}}/css/wmbox.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@500;600;700&display=swap" rel="stylesheet">
    
    @stack('css')
    <link rel="stylesheet" href="{{ asset('assets/frontend/')}}/css/style.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend/')}}/css/media.css">
    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="870bb0db-1c1d-4fcc-bda0-d87cb20d073f";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MW5NTKD');</script>
    <!-- End Google Tag Manager -->
</head>
<body>

<!--============================= HEADER ===================================-->
@include('layouts.frontend.partial.header')

@yield('content')

<!--============================= FOOTER ===================================-->
@include('layouts.frontend.partial.footer')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="{{ asset('assets/frontend/')}}/js/swiper-bundle.min.js"></script>
<script src="{{ asset('assets/frontend/')}}/js/wmBox.js"></script>
<script src="{{ asset('assets/frontend/')}}/js/jquery-anchorScroll.js"></script>
@stack('js')

<script>
/*=============== SHOW MENU ==================*/
const navMenu = document.getElementById('nav-menu'),
   navToggle = document.getElementById('nav-toggle'),
   navClose = document.getElementById('nav-close')


    /*========= MENU SHOW =========*/
    if(navToggle){
        navToggle.addEventListener('click', () =>{
            navMenu.classList.add('show-menu')
        })
    }

    /*========= MENU HIDE =========*/
    if(navClose){
        navClose.addEventListener('click', () =>{
            navMenu.classList.remove('show-menu')
        })
    }

    /*========= REMOVE MENU MOBILE =========*/
    const navLink = document.querySelectorAll('.nav_link')

    function linkAction(){
            navMenu.classList.remove('show-menu')
    }

    navLink.forEach(n => n.addEventListener('click', linkAction))

    /*========= CHANGE BACKGROUND HEADER =========*/
    function scrollHeader(){
        const header = document.getElementById('header'),
            navImg = document.getElementById('nav-img')

        if(this.scrollY >= 100) header.classList.add('scroll-header'); else header.classList.remove('scroll-header')

        if(this.scrollY >= 100) navImg.src = "{{ asset('assets/frontend/')}}/images/scroll-logo.png"; else navImg.src = "{{ asset('assets/frontend/')}}/images/logo.png"

    }
    window.addEventListener('scroll', scrollHeader)

    /*=============== VIDEO POPUP ==================*/
    // wmbox.js
    $.wmBox();
    
    // swiper.js ==> story
    var swiper = new Swiper(".story_container", {
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        autoplay: true,
        spaceBetween: 32,
        pagination: {
          el: ".swiper-pagination",
          type: "fraction",
        },
        navigation: {
          nextEl: ".story-next",
          prevEl: ".story-prev",
        }
    });

    // swiper.js ==> product slide
    var swiper = new Swiper(".product_slide_container", {
        spaceBetween: 30,
        freeMode: true,
        loop: true,
        breakpoints: {
          425: {
            slidesPerView: 1,
            spaceBetween: 15,
          },
          768: {
            slidesPerView: 3,
            spaceBetween: 15,
          },
          1024: {
            slidesPerView: 4,
            spaceBetween: 15,
          },
        }
    });

    /*==================== DROP SHIPPING ====================*/
    // swiper.js ==> shipping tabs
    var swiper = new Swiper(".shipping_tab", {
        slidesPerView: 5,
        watchSlidesProgress: true,
      });
      var swiper2 = new Swiper(".shipping_section", {
        spaceBetween: 25,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        thumbs: {
          swiper: swiper,
        },
      });

    // anchorScroll
    var anchorScroll = $(document).AnchorScroll({
        speed: 1000
    });

    /*=============== FAQ ==================*/
    const faqContent = document.getElementsByClassName('faq_content'),
            faqHeader = document.querySelectorAll('.faq_header')

    function toggleSkills(){
        let itemClass = this.parentNode.className

        for(i = 0; i < faqContent.length; i++){
            faqContent[i].className = 'faq_content faq_close'
        }
        if(itemClass === 'faq_content faq_close'){
            this.parentNode.className = 'faq_content faq_open'
        }
    }

    faqHeader.forEach((el) =>{
        el.addEventListener('click', toggleSkills)
    })

    /*=============== FEATURED VIDEO ==================*/
    var video = document.getElementById("video_featured");
    video.addEventListener("canplay", function() {
        setTimeout(function() {
            video.play();
        }, 6000);
    });
</script>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MW5NTKD"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
</body>
</html>