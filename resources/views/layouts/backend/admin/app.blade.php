<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-default" data-assets-path="{{ asset('assets/backend/')}}/" data-template="vertical-menu-template">
<head>
    <meta charset="utf-8" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>@yield('title') - {{ config('app.name', 'eButify') }}</title>
 
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/backend/')}}/img/site/favicon.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('assets/backend/')}}/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="{{ asset('assets/backend/')}}/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="{{ asset('assets/backend/')}}/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/backend/')}}/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets/backend/')}}/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('assets/backend/')}}/css/style.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets/backend/')}}/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="{{ asset('assets/backend/')}}/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">


    <!-- Page CSS -->
    @stack('css')
    <!-- Vendors JS -->
    <script src="{{ asset('assets/backend/')}}/vendor/js/helpers.js"></script>
    <script src="{{ asset('assets/backend/')}}/js/config.js"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
        dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'GA_MEASUREMENT_ID');
    </script>

</head>

<body>

  <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar  ">
        <div class="layout-container">

            <!-- Sidebar Menu -->
            @include('layouts.backend.admin.partial.sidebar')
            <!-- / Sidebar Menu -->

            <!-- Layout container -->
            <div class="layout-page">

                <!-- Navbar -->
                @include('layouts.backend.admin.partial.header')
                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">

                    <!-- Content -->
                    @yield('content')
                    <!-- / Content -->

                    <!-- Footer -->
                    @include('layouts.backend.admin.partial.footer')
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
        <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
        
        <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <script src="{{ asset('assets/backend/')}}/vendor/libs/jquery/jquery.js"></script>
    <script src="{{ asset('assets/backend/')}}/vendor/libs/popper/popper.js"></script>
    <script src="{{ asset('assets/backend/')}}/vendor/js/bootstrap.js"></script>
    <script src="{{ asset('assets/backend/')}}/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="{{ asset('assets/backend/')}}/vendor/libs/hammer/hammer.js"></script>
    <script src="{{ asset('assets/backend/')}}/vendor/libs/i18n/i18n.js"></script>
    <script src="{{ asset('assets/backend/')}}/vendor/libs/typeahead-js/typeahead.js"></script>
    <script src="{{ asset('assets/backend/')}}/vendor/js/menu.js"></script>
    <script src="{{ asset('assets/backend/')}}/js/main.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    
    <!-- Page JS -->
    @stack('js')
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
</body>
</html>
