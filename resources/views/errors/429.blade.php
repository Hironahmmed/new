<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>eButify.com - 429 error Page Too Many Requests!</title>
    <link rel="canonical" href="{{url()->current()}}"/>
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:site_name" content="{{ config('app.name', 'eButify.com') }}" />
    <meta property="og:title" content="{{ config('app.name', 'eButify.com') }} - The Best Winning Product Research Tool For Dropshipping" />
    <meta property="og:description" content="eButify allows you to easily find winning products that are already proven to sell! Only a few clicks - it's time to stop guessing, start selling!" />
    <meta property="og:image" itemprop="image" content="{{ asset('assets/frontend/')}}/images/social-thumbnail.jpg" />
    <meta name="Description" content="eButify allows you to easily find winning products that are already proven to sell! Only a few clicks - it's time to stop guessing, start selling!">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ config('app.name', 'eButify.com') }} - The Best Winning Product Research Tool For Dropshipping">
    <meta name="twitter:description" content="eButify allows you to easily find winning products that are already proven to sell! Only a few clicks - it's time to stop guessing, start selling!">
    <meta name="twitter:image" content="{{ asset('assets/frontend/')}}/images/social-thumbnail.jpg">
    <style type="text/css">
        @import 'https://fonts.googleapis.com/css?family=Inconsolata';

        html {
        min-height: 100%;
        }

        body {
        box-sizing: border-box;
        height: 100%;
        background-color: #000000;
        background-image: radial-gradient(#11581E, #041607);
        font-family: 'Inconsolata', Helvetica, sans-serif;
        font-size: 1.5rem;
        color: rgba(128, 255, 128, 0.8);
        text-shadow:
            0 0 1ex rgba(51, 255, 51, 1),
            0 0 2px rgba(255, 255, 255, 0.8);
        }

        .noise {
        pointer-events: none;
        position: absolute;
        width: 100%;
        height: 100%;
        z-index: -1;
        opacity: .02;
        }

        @keyframes scan {
        0%        { background-position: 0 -100vh; }
        35%, 100% { background-position: 0 100vh; }
        }

        .terminal {
        padding: 4rem;
        }

        .output {
        color: rgba(128, 255, 128, 0.8);
        text-shadow:
            0 0 1px rgba(51, 255, 51, 0.4),
            0 0 2px rgba(255, 255, 255, 0.8);
        }

        .output::before {
        content: "> ";
        }

        a {
        color: #fff;
        text-decoration: none;
        }

        .errorcode {
        color: white;
        }

        .bd-example>.btn, .bd-example>.btn-group {
            margin: .25rem .125rem;
        }

        [type=button]:not(:disabled), [type=reset]:not(:disabled), [type=submit]:not(:disabled), button:not(:disabled) {
            cursor: pointer;
        }
        .btn-primary {
            color: #fff;
            background-color: #000000;
            background-image: radial-gradient(#11581E, #041607);
            border-color: #fff;
        }
        .btn {
            text-align: center;
            text-decoration: none;
            vertical-align: middle;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            border: 1px solid transparent;
            padding: .375rem .75rem;
            font-size: 1rem;
            border-radius: .25rem;
            transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        }

    </style>
</head>
<body>
    <div class="noise"></div>
    <div class="overlay"></div>
    <div class="terminal">
        <code><h1>ERROR<span class="errorcode"> 429</span><sub style="font-size: 1.5rem;"> Page Too Many Requests!</sub></h1></code>
        <code><p class="output">The page you are looking for might have been removed, had its name changed or is temporarily unavailable.</p></code> 
        <p class="output">Please try to <a class="btn btn-primary" href="{{ route('home') }}">GO HOME</a> or <a class="btn btn-primary" href="{{ route('contact-us') }}">CONTACT US</a>.</p>
        <p class="output">Good luck.</p>
    </div>
    <script>
        function type(n, t) {
            var str = document.getElementsByTagName("code")[n].innerHTML.toString();
            var i = 0;
            document.getElementsByTagName("code")[n].innerHTML = "";

            setTimeout(function() {
                var se = setInterval(function() {
                    i++;
                    document.getElementsByTagName("code")[n].innerHTML =
                        str.slice(0, i) + "|";
                    if (i == str.length) {
                        clearInterval(se);
                        document.getElementsByTagName("code")[n].innerHTML = str;
                    }
                }, 80);
            }, t);
        }

        type(0, 0);
        type(1, 600);
        type(2, 1300);
    </script>
</body>
</html>