@extends('layouts.frontend.app')
@section('title','Affiliate Program')
@section('facebook_meta')

    <link rel="canonical" href="{{url()->current()}}"/>
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:site_name" content="{{ config('app.name', 'eButify.com') }}" />
    <meta property="og:title" content="{{ config('app.name', 'eButify.com') }} - Affiliate Program" />
    <meta property="og:description" content="eButify allows you to easily find winning products that are already proven to sell! Only a few clicks - it's time to stop guessing, start selling!" />
    <meta property="og:image" itemprop="image" content="{{ asset('assets/frontend/')}}/images/social-thumbnail.jpg" />
    <meta name="Description" content="eButify allows you to easily find winning products that are already proven to sell! Only a few clicks - it's time to stop guessing, start selling!">
    <meta name="keywords" content="product research, winning product research, product research tool, winning product research tool, find winning products, research, product idea, product spy, winning products, untapped product, facebook product research tool, tiktok product research tool, aliexpress product research, amazon product research">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ config('app.name', 'eButify.com') }} - Affiliate Program">
    <meta name="twitter:description" content="eButify allows you to easily find winning products that are already proven to sell! Only a few clicks - it's time to stop guessing, start selling!">
    <meta name="twitter:image" content="{{ asset('assets/frontend/')}}/images/social-thumbnail.jpg">

@endsection
@push('css')
<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
<!--============================= REMIX ICONS ===================================-->
<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

<!--============================= SWIPER ===================================-->
<link rel="stylesheet" href="{{ asset('assets/frontend/')}}/css/swiper-bundle.min.css">
@endpush
@section('content')
<main class="main">
    <!--== GET STARTED ==-->
    <div class="client_get">
        <span class="client_get_number">{{ $users + 670 }}</span>
        <span class="client_get_title">Satisfied Client</span>
        <a href="signup.html" class="get_started_btn">Get Started</a>
    </div>
    
    <!--============================= HOME ===================================-->
    <section class="home" id="home">
        <div class="custom-shape-divider-bottom-1638455351">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M600,112.77C268.63,112.77,0,65.52,0,7.23V120H1200V7.23C1200,65.52,931.37,112.77,600,112.77Z" class="shape-fill"></path>
            </svg>
        </div>

        <div class="affiliate_container container grid">
            <div class="affiliate_banner_data grid">
                <span class="affiliate_data_subtitle">Promote the Best Winning Product Research Tool and..</span>
                <span>
                    <h1 class="affiliate_data_title">Earn 30% Recurring Commission for <br>Every Successful Subscription </h1>
                </span>
                <span class="affiliate_data_text">Join the best affiliate program in the industry and share eButify with Shopify store owners. We pay 30% for every person who signs up to eButify through your affiliate link.</span>
                
                <a href="{{ route('register') }}" class="button">Join And Start Earning Now</a>
                
                <div class="banner_msg">
                    <img src="{{ asset('assets/frontend/')}}/images/Layer 2.png" alt=""><span class="home_data_message"><p>Trusted by 500+ Businesses in 40+ countries over the world</p></span>
                </div>
            </div>

            <div class="affiliate_banner_content">
                <div class="potential_content tab_wrapper">
                    <div class="potential_title">Your potential earnings</div>

                    <ul class="potential_tabs">
                        <li class="potential_tab active">Monthly Plan</li>

                        <li class="potential_tab">Yearly Plan</li>
                    </ul>

                    <div class="potential_data skltbs-panel-group">
                        <!--====== POTENTIAL FORM 01 ========-->
                        <form action="" class="potential_data_form active">
                            <label for="entrie">With this number of entries:</label>

                            <div class="potential_icon">
                                <img src="{{ asset('assets/frontend/')}}/images/reff.png" alt="">
                                <input type="text" id="entrie" value="" onkeyup="fun()" placeholder="0">
                            </div>

                            <span>Number of <span id="refer-no"></span> referral you will earn</span>

                            <p class="earn_data">$<span id="month-cost"></span></p>

                            <button onclick="location.href = '{{ route('register') }}';" type="submit" class="banner_join">Join the programme</button>
                        </form>

                        <!--====== POTENTIAL FORM 02 ========-->
                        <form action="" class="potential_data_form">
                            <label for="entries">With this number of entries:</label>

                            <div class="potential_icon">
                                <img src="{{ asset('assets/frontend/')}}/images/reff.png" alt="">
                                <input type="text" id="entries" value="" onkeyup="funs()" placeholder="0">
                            </div>

                            <span>Number of <span id="refer-nos"></span> referral you will earn</span>

                            <p class="earn_data">$<span id="month-costs"></p>

                            <button onclick="location.href = '{{ route('register') }}';" class="banner_join">Join the programme</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--============================= TESTIMONIAL ===================================-->
    <section class="testimonial section">
        <div class="testimonial_container container grid">
            <div class="testimonial_data">
                <h2 class="testimonial_title">The cream of the crop</h2>

                <div class="testimonial_list">
                    <!--====== 01 =======-->
                    <div class="testimonial_item">
                        <div class="testimonial_item_content">
                            <img src="{{ asset('assets/frontend/')}}/images/Group 220.png" alt="">
                        </div>

                        <div class="testimonial_item_data">
                            30% recurring commissions for life?
                        </div>
                    </div>

                    <!--====== 02 =======-->
                    <div class="testimonial_item">
                        <div class="testimonial_item_content">
                            <img src="{{ asset('assets/frontend/')}}/images/Group 223.png" alt="">
                        </div>

                        <div class="testimonial_item_data">
                            Simple and transparent conversion tracking
                        </div>
                    </div>

                    <!--====== 03 =======-->
                    <div class="testimonial_item">
                        <div class="testimonial_item_content">
                            <img src="{{ asset('assets/frontend/')}}/images/calender.png" alt="">
                        </div>

                        <div class="testimonial_item_data">
                            Monthly payment of commissions
                        </div>
                    </div>

                    <!--====== 04 =======-->
                    <div class="testimonial_item">
                        <div class="testimonial_item_content">
                            <img src="{{ asset('assets/frontend/')}}/images/star.png" alt="">
                        </div>

                        <div class="testimonial_item_data">
                            4.6/5 on Trustpilot
                        </div>
                    </div>
                </div>
            </div>

            <div class="testimonial_content">
                <div class="swiper-wrapper">
                    <!--========= TESTIMONIAL 01 ==========-->
                    <div class="testimonial_content_item swiper-slide">
                        <div class="testimonial_content_title">Testimonial</div>

                        <div class="testimonial_content_profile">
                            <img src="{{ asset('assets/frontend/')}}/images/Mahin.png" alt="">

                            <span>Omi Dengel</span>
                        </div>

                        <div class="testimonial_content_text">
                            "I have never experienced a more comprehensive and profitable affiliate program. eButify is an amazing piece of software and I am proud to promote it to my community."
                        </div>
                    </div>

                    <!--========= TESTIMONIAL 02 ==========-->
                    <div class="testimonial_content_item swiper-slide">
                        <div class="testimonial_content_title">Testimonial</div>

                        <div class="testimonial_content_profile">
                            <img src="{{ asset('assets/frontend/')}}/images/Mahin.png" alt="">

                            <span>Omi Dengel</span>
                        </div>

                        <div class="testimonial_content_text">
                            "I have never experienced a more comprehensive and profitable affiliate program. eButify is an amazing piece of software and I am proud to promote it to my community."
                        </div>
                    </div>

                    <!--========= TESTIMONIAL 03 ==========-->
                    <div class="testimonial_content_item swiper-slide">
                        <div class="testimonial_content_title">Testimonial</div>

                        <div class="testimonial_content_profile">
                            <img src="{{ asset('assets/frontend/')}}/images/Mahin.png" alt="">

                            <span>Omi Dengel</span>
                        </div>

                        <div class="testimonial_content_text">
                            "I have never experienced a more comprehensive and profitable affiliate program. eButify is an amazing piece of software and I am proud to promote it to my community."
                        </div>
                    </div>

                    <!--========= TESTIMONIAL 04 ==========-->
                    <div class="testimonial_content_item swiper-slide">
                        <div class="testimonial_content_title">Testimonial</div>

                        <div class="testimonial_content_profile">
                            <img src="{{ asset('assets/frontend/')}}/images/Mahin.png" alt="">

                            <span>Omi Dengel</span>
                        </div>

                        <div class="testimonial_content_text">
                            "I have never experienced a more comprehensive and profitable affiliate program. eButify is an amazing piece of software and I am proud to promote it to my community."
                        </div>
                    </div>
                </div>

                <div class="test-pagination"></div>
            </div>
        </div>
    </section>

    <!--============================= AFFILIATE PROGRAM ===================================-->
    <section class="program section">
        <div class="program_title">How Our Affiliate Program Works</div>

        <div class="program_container container grid">
            <!--====== PROGRAM 01 =======-->
            <div class="program_item_wrapper">
                <div class="program_item_title">
                    <span class="program_item_no">1</span>
                    <span class="program_item_title_data">Sign-up</span>
                </div>

                <div class="program_item_data">
                    Sign-up with your email address to create your affiliate account and retrieve your own eButify affiliate link. And complete your partner profile before promoting your affiliate link.
                </div>
            </div>

            <!--====== PROGRAM 02 =======-->
            <div class="program_item_wrapper">
                <div class="program_item_title">
                    <span class="program_item_no">2</span>
                    <span class="program_item_title_data">Promote</span>
                </div>

                <div class="program_item_data">
                    Promote eButify to your audience through your content. Use a custom landing page or our official page to receive customers. Also can promoted via YouTube and blog posting. 
                </div>
            </div>

            <!--====== PROGRAM 03 =======-->
            <div class="program_item_wrapper">
                <div class="program_item_title">
                    <span class="program_item_no">3</span>
                    <span class="program_item_title_data">Earn</span>
                </div>

                <div class="program_item_data">
                    Get paid for every referral that converts into a paying customer! You can withdraw your income whatever you want. It's easy to build a passive income with eButify.      
                </div>
            </div>
        </div>

        <button onclick="location.href = '{{ route('register') }}';" class="partner_btn">Become a eButify Affiliate Partner!</button>
    </section>

    <!--============================= AFFILIATE TAB ===================================-->
    <section class="affiliate_tab_section">
        <div class="affiliate_tab_container container">
            <div class="affiliate_tab_title">What makes an awesome eButify Affiliate?</div>

            <div class="affiliate_tab_subtitle">eButify's Affiliate Program is The Best Way to Earn Passive Income If You Are a...</div>

            <div class="affiliate_content_wrapper">
                <div class="affiliate_tabs affiliate_tabs">
                    <div class="affiliate_tab tab_active" data-filter=".youtubers">YouTuber</div>

                    <div class="affiliate_tab" data-filter=".course">Course Creator</div>

                    <div class="affiliate_tab" data-filter=".instagram">Instagram Influencer</div>

                    <div class="affiliate_tab" data-filter=".shopify">Shopify Mentor</div>

                    <div class="affiliate_tab" data-filter=".blog">Blog Writer</div>

                    <div class="affiliate_tab" data-filter=".fb">Facebook Influencer</div>

                    <div class="affiliate_tab" data-filter=".content">Content Creator</div>

                    <div class="affiliate_tab" data-filter=".email">Email Marketer</div>

                    <div class="affiliate_tab" data-filter=".affiliate">Affiliate Marketer</div>
                </div>

                <div class="affiliate_content_container affiliate_active">
                    <!--====== AFFILIATE CONTENT 01 =======-->
                    <div class="affiliate_content element-item youtubers">
                        <img src="{{ asset('assets/frontend/')}}/images/youtube content.png" alt="">

                        <div class="affiliate_content_data">
                            <div class="affiliate_content_data_title"><span>Youtubers</span> and content creators</div>

                            <div class="affiliate_content_data_text">
                                Do you create videos on YouTube about e-commerce or dropshipping? Promote your videos to help your audience find effective products or creatives. On Instagram or TikTok, don't hesitate to ask us for video story formats presenting eButify, ready to be reposted!
                            </div>
                        </div>
                    </div>

                    <!--====== AFFILIATE CONTENT 02 =======-->
                    <div class="affiliate_content element-item course">
                        <img src="{{ asset('assets/frontend/')}}/images/course-creator.png" alt="">

                        <div class="affiliate_content_data">
                            <div class="affiliate_content_data_title"><span>Course</span> Creators</div>

                            <div class="affiliate_content_data_text">
                                Are you a coach or a trainer? We provide special discounts for your students, on request, in addition to the affiliation. We can also help you produce the video content of your training on eButify.
                            </div>
                        </div>
                    </div>

                    <!--====== AFFILIATE CONTENT 03 =======-->
                    <div class="affiliate_content element-item instagram">
                        <img src="{{ asset('assets/frontend/')}}/images/instagram-influencer.png" alt="">

                        <div class="affiliate_content_data">
                            <div class="affiliate_content_data_title"><span>Instagram</span> and content creators</div>

                            <div class="affiliate_content_data_text">
                                Do you have a community on Instagram or TikTok where you share your results? Monetize it by bringing value to it with eButify. Create your product and influencer lists, add your affiliate id, share, and you're done.
                            </div>
                        </div>
                    </div>

                    <!--====== AFFILIATE CONTENT 04 =======-->
                    <div class="affiliate_content element-item shopify">
                        <img src="{{ asset('assets/frontend/')}}/images/shopify mentor.png" alt="">

                        <div class="affiliate_content_data">
                            <div class="affiliate_content_data_title"><span>Youtubers</span> and content creators</div>

                            <div class="affiliate_content_data_text">
                                Do you create videos on YouTube about e-commerce or dropshipping? Promote your videos to help your audience find effective products or creatives. On Instagram or TikTok, don't hesitate to ask us for video story formats presenting eButify, ready to be reposted!
                            </div>
                        </div>
                    </div>

                    <!--====== AFFILIATE CONTENT 05 =======-->
                    <div class="affiliate_content element-item blog">
                        <img src="{{ asset('assets/frontend/')}}/images/blog writer.png" alt="">

                        <div class="affiliate_content_data">
                            <div class="affiliate_content_data_title"><span>Ecommerce</span> Blogs</div>

                            <div class="affiliate_content_data_text">
                                Do you have an ecommerce blog? Write an article on Minea and benefit from one of the highest possible passive incomes
                            </div>
                        </div>
                    </div>

                    <!--====== AFFILIATE CONTENT 06 =======-->
                    <div class="affiliate_content element-item fb">
                        <img src="{{ asset('assets/frontend/')}}/images/facebook-influencer.png" alt="">

                        <div class="affiliate_content_data">
                            <div class="affiliate_content_data_title"><span>Youtubers</span> and content creators</div>

                            <div class="affiliate_content_data_text">
                                Do you create videos on YouTube about e-commerce or dropshipping? Promote your videos to help your audience find effective products or creatives. On Instagram or TikTok, don't hesitate to ask us for video story formats presenting eButify, ready to be reposted!
                            </div>
                        </div>
                    </div>

                    <!--====== AFFILIATE CONTENT 07 =======-->
                    <div class="affiliate_content element-item content">
                        <img src="{{ asset('assets/frontend/')}}/images/content creator.png" alt="">

                        <div class="affiliate_content_data">
                            <div class="affiliate_content_data_title"><span>Youtubers</span> and content creators</div>

                            <div class="affiliate_content_data_text">
                                Do you create videos on YouTube about e-commerce or dropshipping? Promote your videos to help your audience find effective products or creatives. On Instagram or TikTok, don't hesitate to ask us for video story formats presenting eButify, ready to be reposted!
                            </div>
                        </div>
                    </div>

                    <!--====== AFFILIATE CONTENT 08 =======-->
                    <div class="affiliate_content element-item email">
                        <img src="{{ asset('assets/frontend/')}}/images/email-merketing.png" alt="">

                        <div class="affiliate_content_data">
                            <div class="affiliate_content_data_title"><span>Youtubers</span> and content creators</div>

                            <div class="affiliate_content_data_text">
                                Do you create videos on YouTube about e-commerce or dropshipping? Promote your videos to help your audience find effective products or creatives. On Instagram or TikTok, don't hesitate to ask us for video story formats presenting eButify, ready to be reposted!
                            </div>
                        </div>
                    </div>

                    <!--====== AFFILIATE CONTENT 09 =======-->
                    <div class="affiliate_content element-item affiliate">
                        <img src="{{ asset('assets/frontend/')}}/images/affiliate marketer.png" alt="">

                        <div class="affiliate_content_data">
                            <div class="affiliate_content_data_title"><span>Youtubers</span> and content creators</div>

                            <div class="affiliate_content_data_text">
                                Do you create videos on YouTube about e-commerce or dropshipping? Promote your videos to help your audience find effective products or creatives. On Instagram or TikTok, don't hesitate to ask us for video story formats presenting eButify, ready to be reposted!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--============================= JOIN SECTION ===================================-->
    <section class="circle">
        <svg xmlns="http://www.w3.org/2000/svg" class="circle_img" viewBox="0 0 1440 320"><path fill="#F7F7F7" fill-opacity="1" d="M0,32L120,58.7C240,85,480,139,720,138.7C960,139,1200,85,1320,58.7L1440,32L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg>

        <div class="circle_container container grid">
            <div class="circle_content grid">
                <div class="circle_content_img">
                    <img src="{{ asset('assets/frontend/')}}/images/dddrs.png" alt="">
                </div>

                <div class="circle_content_data grid">
                    <div class="circle_content_data_title">You win, they win, we win</div>

                    <div class="circle_content_data_text">With 30% commission on all customers you bring to us, for life, you are more than an affiliate, you are a partner.</div>

                    <a href="{{ route('register') }}" class="circle_content_data_btn">Join the programme</a>
                </div>
            </div>

            <div class="circle_data">
                <div class="circle_data_title">A virtuous value circle</div>

                <div class="circle_data_text">We believe that eButify is the best product search tool and is changing the lives of thousands of e-tailers, so when you tell your audience about eButify, that's a huge amount of value you're bringing them.</div>

                <div class="circle_data_text">By bringing them that value, you bring us customers, and we reward you with 1/3 of what each customer generates. This is the virtuous circle of value that we believe in at eButify.</div>
            </div>

            <div class="circle_glance">
                <div class="circle_glance_title">At a Glance</div>
                
                <div class="circle_glance_list">
                    <div class="circle_glance_item">
                        <div class="circle_glance_item_no">600+</div>
                        <div class="circle_glance_item_data">Registration on eButify</div>
                    </div>

                    <div class="circle_glance_item">
                        <div class="circle_glance_item_no">$15,650+</div>
                        <div class="circle_glance_item_data">Amount distributed to members</div>
                    </div>

                    <div class="circle_glance_item">
                        <div class="circle_glance_item_no">14%</div>
                        <div class="circle_glance_item_data">Average increase in retention, each month</div>
                    </div>
                </div>
            </div>
        </div>

        <a href="{{ route('register') }}" class="circle_glance_btn">Join the programme</a>
    </section>

    <!--============================= AUDIENCE ===================================-->
    <section class="audience">
        <div class="audience_container container">
            <div class="audience_title">What makes Minea exceptional, for <br>you and your audience</div>

            <div class="audience_content_wrapper grid">
                <!--====== AUDIENCE 01 ======-->
                <div class="audience_content">
                    <div class="audience_content_title">The most complete tool</div>

                    <div class="audience_content_text">One complete tool, and excellent in all areas.</div>
                </div>

                <!--====== AUDIENCE 02 ======-->
                <div class="audience_content">
                    <div class="audience_content_title">Modern, fast, intuitive</div>

                    <div class="audience_content_text">An understandable and modern interface.</div>
                </div>

                <!--====== AUDIENCE 03 ======-->
                <div class="audience_content">
                    <div class="audience_content_title">24/7 support</div>

                    <div class="audience_content_text">Support in English available every day.</div>
                </div>

                <!--====== AUDIENCE 04 ======-->
                <div class="audience_content">
                    <div class="audience_content_title">Facebook Adspy</div>

                    <div class="audience_content_text">15 thousand ads listed since 2020</div>
                </div>

                <!--====== AUDIENCE 05 ======-->
                <div class="audience_content">
                    <div class="audience_content_title">Pinterest Adspy</div>

                    <div class="audience_content_text">5 thousand ads listed since 2020</div>
                </div>

                <!--====== AUDIENCE 06 ======-->
                <div class="audience_content">
                    <div class="audience_content_title">Instagram Adspy</div>

                    <div class="audience_content_text">8 thousand ads listed since 2020</div>
                </div>

                <!--====== AUDIENCE 07 ======-->
                <div class="audience_content">
                    <div class="audience_content_title">TikTok Adspy</div>

                    <div class="audience_content_text">2 thousand ads listed since 2020</div>
                </div>

                <!--====== AUDIENCE 08 ======-->
                <div class="audience_content">
                    <div class="audience_content_title">Monthly updates</div>

                    <div class="audience_content_text">A team 100% dedicated to the constant improvement of eButify</div>
                </div>

                <!--====== AUDIENCE 09 ======-->
                <div class="audience_content">
                    <div class="audience_content_title">Handpicked products</div>

                    <div class="audience_content_text">A daily selection of the best products by an AI.</div>
                </div>
            </div>
        </div>
    </section>

    <!--====================== FAQ ============================-->
    <section class="faq_home section" id="skill">
        <div class="faq_data container grid">
            <h1 class="faq_data_title">Frequently Asked Questions</h1>
            <span class="faq_data_subtitle">We know you have some questions in mind, we’ve tried to list the most important ones!</span>
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

                <!--========== FAQ 03 ============-->
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

                <!--========== FAQ 04 ============-->
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

                <!--========== FAQ 05 ============-->
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
            </div>

            <div>
                <!--========== FAQ 06 ============-->
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

                <!--========== FAQ 07 ============-->
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

                <!--========== FAQ 08 ============-->
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

                <!--========== FAQ 09 ============-->
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

                <!--========== FAQ 10 ============-->
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
<script src="{{ asset('assets/frontend/')}}/js/isotope.min.js"></script>
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

    /*========= COST =========*/
    function fun(){
        var price = 7.50;
        var member = document.getElementById("entrie").value;
        var calculate = price * member;
        var ausgabe = (calculate);
        document.getElementById("month-cost").innerHTML = ausgabe;

        document.getElementById("refer-no").innerHTML = member;
    }

    function funs(){
        var prices = 27;
        var members = document.getElementById("entries").value;
        var calculates = prices * members;
        var ausgabes = (calculates);
        document.getElementById("month-costs").innerHTML = ausgabes;

        document.getElementById("refer-nos").innerHTML = members;
    }

    
    /*=============== TESTIMONIAL ==================*/
    var swiper = new Swiper(".testimonial_content", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        autoplay: true,
        pagination: {
          el: ".test-pagination",
        },
    });

    /*=============== AFFILIATE TAB ==================*/
    $(document).ready(function(){
        $(".affiliate_tab").on('click', function(){
            $(this).siblings().removeClass('tab_active');
            $(this).addClass('tab_active');
        })
    })

    /*==================== ISOTOPE ====================*/
    // init Isotope
    var $grid = $('.affiliate_active').isotope({
    // options
    });
    // filter items on button click
    $('.affiliate_tabs').on( 'click', 'div', function() {
    var filterValue = $(this).attr('data-filter');
    $grid.isotope({ filter: filterValue });
    });

    $grid.isotope({ filter: '.youtubers' });

    const tabs = document.querySelectorAll(".potential_tabs li");
    const contents = document.querySelectorAll(".potential_data_form");

    tabs.forEach((tab, index) => {
        tab.addEventListener("click", () => {

            tabs.forEach(tab => tab.classList.remove("active"));

            tab.classList.add("active");

            contents.forEach((c) => c.classList.remove("active"));

            contents[index].classList.add("active");
        })
    })
</script>
@endpush
