<header class="header" id="header">
    <nav class="nav container">
        <a href="{{ route('home') }}" class="nav_logo"><img src="{{ asset('assets/frontend/')}}/images/logo.png" alt="" class="" id="nav-img"></a>

        <div class="nav_menu" id="nav-menu">
            <ul class="nav_list">
                <li class="nav_item">
                    <a href="{{ route('home') }}#why" class="nav_link active-link">Why eButify</a>
                </li>
                <li class="nav_item">
                    <a href="{{ route('home') }}#price" class="nav_link">Pricing</a>
                </li>
                <li class="nav_item">
                    <a href="{{ route('blog') }}" class="nav_link">Blog</a>
                </li>
            </ul>

            <div class="btn_container">
                <a href="{{ route('login') }}" class="btn_log">Login</a>
                <a href="{{ route('demo.dashboard') }}" class="btn_trial">Demo App</a>
            </div>

            <i class="ri-close-line nav_close" id="nav-close"></i>
        </div>

        <div class="nav_toggle" id="nav-toggle">
            <i class="ri-bar-chart-horizontal-line"></i>
        </div>
    </nav>
</header>