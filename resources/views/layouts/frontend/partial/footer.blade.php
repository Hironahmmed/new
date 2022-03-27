<footer class="footer">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="footer_curve"><path fill="#081C2A" fill-opacity="1" d="M0,128L120,106.7C240,85,480,43,720,42.7C960,43,1200,85,1320,106.7L1440,128L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg>
    
    <div class="footer_container container">
        <!--=================== NEWSLETTER ========================-->
        <div class="footer_newsletter">
            <div class="footer_newsletter_data">
                <img src="{{ asset('assets/frontend/')}}/images/graph_mail.png" alt="">
                <span>600+ brand owners reading the eButify newsletter</span>
            </div>

            <div class="footer_newsletter_content">
                <form method="POST" action="{{ route('subscriber.store') }}" class="footer_newsletter_form">
                    @csrf
                    <div class="foot_form_input_container">
                        <input type="email" name="email" placeholder="Enter Your Email Address" required>
                        <button class="footer_newsletter_btnpc" type="submit" name="subscribe">Subscribe</button>
                    </div>
                    <span class="footer_checkbox">
                        <input type="checkbox" required><span>I agree to receive regular updates from eButify. <a href="{{ route('privacy') }}">View Privacy Policy here.</a></span>
                    </span>
                    <button class="footer_newsletter_btn" type="submit" name="subscribe">Subscribe</button>
                </form>
            </div>
        </div>

        <!--=================== LINKS ========================-->
        <div class="footer_main grid">
            <div class="footer_main_content">
                <img src="{{ asset('assets/frontend/')}}/images/logo.png" alt="">

                <div class="social_content">
                    <ul class="social_list">
                        <li class="social_item">
                            <a href="https://www.facebook.com/ebutify" class="social_link"><i class="ri-facebook-fill social_icon"></i></a>
                        </li>
                        <li class="social_item">
                            <a href="https://www.instagram.com/ebutify" class="social_link"><i class="ri-instagram-fill social_icon"></i></a>
                        </li>
                        <li class="social_item">
                            <a href="https://www.linkedin.com/company/ebutify" class="social_link"><i class="ri-linkedin-fill social_icon"></i></a>
                        </li>
                        <li class="social_item">
                            <a href="https://www.pinterest.com/ebutify" class="social_link"><i class="ri-pinterest-line social_icon"></i></a>
                        </li>
                        <li class="social_item">
                            <a href="https://twitter.com/eButify" class="social_link"><i class="ri-twitter-fill social_icon"></i></a>
                        </li>
                        <li class="social_item">
                            <a href="https://www.youtube.com/results?search_query=ebutify+product+research+tool" class="social_link"><i class="ri-youtube-fill social_icon"></i></a>
                        </li>
                    </ul>
                </div>

                <div class="footer_contact"><i class="ri-phone-fill"></i><span>+8801722-722690</span></div>

                <div class="copyright">Copyright 2021 eButify Inc. All rights reserved.</div>
            </div>

            <div class="footer_company">
                <span>Company</span>

                <ul class="company_list">
                    <li class="company_item">
                        <a href="{{ route('about') }}" class="company_link">About Us</a>
                    </li>
                    <li class="company_item">
                        <a href="{{ route('contact-us') }}" class="company_link">Contact Us</a>
                    </li>
                    <li class="company_item">
                        <a href="{{ route('affiliate') }}" class="company_link">Affiliate</a>
                    </li>
                </ul>
            </div>

            <div class="footer_company">
                <span>Resources</span>

                <ul class="company_list">
                    <li class="company_item">
                        <a href="{{ route('privacy') }}" class="company_link">Privacy Policy</a>
                    </li>
                    <li class="company_item">
                        <a href="{{ route('terms') }}" class="company_link">Terms of Service</a>
                    </li>
                    <li class="company_item">
                        <a href="{{ route('faq') }}" class="company_link">FAQ</a>
                    </li>
                </ul>
            </div>
        </div>

        <!--=================== BOOK BUTTON ========================-->
        <div class="footer_book">
            <a href="{{ route('register') }}" class="footer_booking_button">Book Appointment</a>

            <img src="{{ asset('assets/frontend/')}}/images/shopify-partner.png" alt="">
        </div>
    </div>
</footer>