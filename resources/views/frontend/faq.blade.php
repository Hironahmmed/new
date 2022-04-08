@extends('layouts.frontend.app')
@section('title','Frequently Asked Questions')
@section('facebook_meta')

    <link rel="canonical" href="{{url()->current()}}"/>
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:site_name" content="{{ config('app.name', 'eButify.com') }}" />
    <meta property="og:title" content="{{ config('app.name', 'eButify.com') }} - Frequently Asked Questions" />
    <meta property="og:description" content="eButify allows you to easily find winning products that are already proven to sell! Only a few clicks - it's time to stop guessing, start selling!" />
    <meta property="og:image" itemprop="image" content="{{ asset('assets/frontend/')}}/images/social-thumbnail.jpg" />
    <meta name="Description" content="eButify allows you to easily find winning products that are already proven to sell! Only a few clicks - it's time to stop guessing, start selling!">
    <meta name="keywords" content="product research, winning product research, product research tool, winning product research tool, find winning products, research, product idea, product spy, winning products, untapped product, facebook product research tool, tiktok product research tool, aliexpress product research, amazon product research">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ config('app.name', 'eButify.com') }} - Frequently Asked Questions">
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

        <div class="faq_container container grid">
            <div class="faq_data grid">
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
        </div>
    </section>

    <!--====================== FAQ ============================-->
    <section class="faq section" id="skill">
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
                            <h1 class="faq_title">In which Ecommerce Market can I use eButify products?</h1>
                        </div>

                        <img src="{{ asset('assets/frontend/')}}/images/Line 8.png" alt="" class="faqicon_close faqicon">
                        <img src="{{ asset('assets/frontend/')}}/images/Group 114.png" alt="" class="faqicon_open faqicon">
                    </div>

                    <div class="faq_list grid">
                        <p>
                            The products listed on eButify can be used on any eCommerce market including eBay, Amazon, and your own store using Shopify or Woocommerce.
                        </p>
                    </div>
                </div>

                <!--========== FAQ 03 ============-->
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

                <!--========== FAQ 04 ============-->
                <div class="faq_content faq_close">
                    <div class="faq_header">
                        <div>
                            <h1 class="faq_title">How often the eButify products list is updated?
                            </h1>
                        </div>

                        <img src="{{ asset('assets/frontend/')}}/images/Line 8.png" alt="" class="faqicon_close faqicon">
                        <img src="{{ asset('assets/frontend/')}}/images/Group 114.png" alt="" class="faqicon_open faqicon">
                    </div>

                    <div class="faq_list grid">
                        <p>
                            Everyday! the number of the products we add on a daily basis depends on the quality of the products available on the Ecom Market, we concentrate on the value of the products, not the quantity because the product must match the winning product criteria, Our products list is growing faster every day, and we're working on adding more categories.
                        </p>
                    </div>
                </div>

                <!--========== FAQ 05 ============-->
                <div class="faq_content faq_close">
                    <div class="faq_header">
                        <div>
                            <h1 class="faq_title">What's special about the products found on eButify?</h1>
                        </div>

                        <img src="{{ asset('assets/frontend/')}}/images/Line 8.png" alt="" class="faqicon_close faqicon">
                        <img src="{{ asset('assets/frontend/')}}/images/Group 114.png" alt="" class="faqicon_open faqicon">
                    </div>

                    <div class="faq_list grid">
                        <p>
                            We have a team specialized in product research, before we add any product we make sure it's new and got high engagement on social media and all the products we add are tested and getting hot sales in the best pro Ecom stores.
                        </p>
                    </div>
                </div>

                <!--========== FAQ 06 ============-->
                <div class="faq_content faq_close">
                    <div class="faq_header">
                        <div>
                            <h1 class="faq_title">Can I use your audience data in my campaigns?</h1>
                        </div>

                        <img src="{{ asset('assets/frontend/')}}/images/Line 8.png" alt="" class="faqicon_close faqicon">
                        <img src="{{ asset('assets/frontend/')}}/images/Group 114.png" alt="" class="faqicon_open faqicon">
                    </div>

                    <div class="faq_list grid">
                        <p>
                            Yes, you can use our audience data in your campaigns. Because we collect data from tested ads and our talented freelancer validates the data and lists them manually.
                        </p>
                    </div>
                </div>

                <!--========== FAQ 07 ============-->
                <div class="faq_content faq_close">
                    <div class="faq_header">
                        <div>
                            <h1 class="faq_title">Can I use the product images available on eButify?</h1>
                        </div>

                        <img src="{{ asset('assets/frontend/')}}/images/Line 8.png" alt="" class="faqicon_close faqicon">
                        <img src="{{ asset('assets/frontend/')}}/images/Group 114.png" alt="" class="faqicon_open faqicon">
                    </div>

                    <div class="faq_list grid">
                        <p>
                            Yes, you can, we put clean, high-quality, and descriptive product images ready for you to use in your store and ad campaigns.
                        </p>
                    </div>
                </div>

                <!--========== FAQ 08 ============-->
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

                <!--========== FAQ 09 ============-->
                <div class="faq_content faq_close">
                    <div class="faq_header">
                        <div>
                            <h1 class="faq_title">Can I use your product description?
                            </h1>
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

                <!--========== FAQ 10 ============-->
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

                <!--========== FAQ 11 ============-->
                <div class="faq_content faq_close">
                    <div class="faq_header">
                        <div>
                            <h1 class="faq_title">Can I use your Gif image in my Description?</h1>
                        </div>

                        <img src="{{ asset('assets/frontend/')}}/images/Line 8.png" alt="" class="faqicon_close faqicon">
                        <img src="{{ asset('assets/frontend/')}}/images/Group 114.png" alt="" class="faqicon_open faqicon">
                    </div>

                    <div class="faq_list grid">
                        <p>
                            Yes, you can but sometimes some product has gif images with some watermark and logos. Most of the time we provide fresh gif images that you can use in your description. If you see any product that has gif images with watermark or logos then you can make your own or can use our freelancer to make the best one for you.
                        </p>
                    </div>
                </div>
            </div>

            <div>
                
                <!--========== FAQ 12 ============-->
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

                <!--========== FAQ 13 ============-->
                <div class="faq_content faq_close">
                    <div class="faq_header">
                        <div>
                            <h1 class="faq_title">Can I use the video ads included with the products data in my campaigns?</h1>
                        </div>

                        <img src="{{ asset('assets/frontend/')}}/images/Line 8.png" alt="" class="faqicon_close faqicon">
                        <img src="{{ asset('assets/frontend/')}}/images/Group 114.png" alt="" class="faqicon_open faqicon">
                    </div>

                    <div class="faq_list grid">
                        <p>
                            The videos we put are the ones used to other Stores, we just use them to show the user the engagement rate, and you can use them in your ads, but only if they're not watermarked with the logo of another Store or brand, if it's not the case try to find a clean one, otherwise you'll have to make yours or use a post type other than a video.
                        </p>
                    </div>
                </div>

                <!--========== FAQ 14 ============-->
                <div class="faq_content faq_close">
                    <div class="faq_header">
                        <div>
                            <h1 class="faq_title">Do you offer competitor's store analytics?</h1>
                        </div>

                        <img src="{{ asset('assets/frontend/')}}/images/Line 8.png" alt="" class="faqicon_close faqicon">
                        <img src="{{ asset('assets/frontend/')}}/images/Group 114.png" alt="" class="faqicon_open faqicon">
                    </div>

                    <div class="faq_list grid">
                        <p>
                            Yes, we do. We provide 5 private level competitors to get ideas from them and run your store successfully. This is amazing!
                        </p>
                    </div>
                </div>

                <!--========== FAQ 15 ============-->
                <div class="faq_content faq_close">
                    <div class="faq_header">
                        <div>
                            <h1 class="faq_title">Do you offer an AliExpress supplier Link?</h1>
                        </div>

                        <img src="{{ asset('assets/frontend/')}}/images/Line 8.png" alt="" class="faqicon_close faqicon">
                        <img src="{{ asset('assets/frontend/')}}/images/Group 114.png" alt="" class="faqicon_open faqicon">
                    </div>

                    <div class="faq_list grid">
                        <p>
                            Yes, we do offer AliExpress the best supplier link.
                        </p>
                    </div>
                </div>

                <!--========== FAQ 16 ============-->
                <div class="faq_content faq_close">
                    <div class="faq_header">
                        <div>
                            <h1 class="faq_title">What is Amazon Explorer?
                            </h1>
                        </div>

                        <img src="{{ asset('assets/frontend/')}}/images/Line 8.png" alt="" class="faqicon_close faqicon">
                        <img src="{{ asset('assets/frontend/')}}/images/Group 114.png" alt="" class="faqicon_open faqicon">
                    </div>

                    <div class="faq_list grid">
                        <p>
                            Amazon Explorer is an amazing product research tool. Here we provide amazon best selling products by checking them with Zik Analytics, Jungle Scout, Unicorn Smasher, and Helium 10.
                        </p>
                    </div>
                </div>

                <!--========== FAQ 17 ============-->
                <div class="faq_content faq_close">
                    <div class="faq_header">
                        <div>
                            <h1 class="faq_title">What is AliExpress Explorer?</h1>
                        </div>

                        <img src="{{ asset('assets/frontend/')}}/images/Line 8.png" alt="" class="faqicon_close faqicon">
                        <img src="{{ asset('assets/frontend/')}}/images/Group 114.png" alt="" class="faqicon_open faqicon">
                    </div>

                    <div class="faq_list grid">
                        <p>
                            eButify offers an AliExpress product research tool. Here we added product only that product which is trendy now. Our amazing researcher added products in this section on a daily basis.
                        </p>
                    </div>
                </div>

                <!--========== FAQ 18 ============-->
                <div class="faq_content faq_close">
                    <div class="faq_header">
                        <div>
                            <h1 class="faq_title">What is Shopify Explorer?</h1>
                        </div>

                        <img src="{{ asset('assets/frontend/')}}/images/Line 8.png" alt="" class="faqicon_close faqicon">
                        <img src="{{ asset('assets/frontend/')}}/images/Group 114.png" alt="" class="faqicon_open faqicon">
                    </div>

                    <div class="faq_list grid">
                        <p>
                            eButify offers the Shopify Store product research tool. Here we added top-selling Shopify store and their best-selling 4 product you can see. Also, you can see their monthly visitor, Facebook ads spend, Conversation rate, Facebook official page, And currently running ads.
                        </p>
                    </div>
                </div>

                <!--========== FAQ 19 ============-->
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

                <!--========== FAQ 20 ============-->
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

                <!--========== FAQ 21 ============-->
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

                <!--========== FAQ 22 ============-->
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
