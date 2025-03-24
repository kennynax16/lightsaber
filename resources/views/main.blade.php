<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Anton&family=Manrope:wght@200..800&display=swap"
        rel="stylesheet"
    />

    <style>
        img:is([sizes="auto" i], [sizes^="auto," i]) {
            contain-intrinsic-size: 3000px 1500px;
        }
    </style>

    <title>Home - Lightsaber Studio</title>
    <meta name="robots" content="max-image-preview:large" />
    <link rel="canonical" href="https://lightsaber.studio/" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:site_name" content="Lightsaber Studio -" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Home - Lightsaber Studio" />
    <meta property="og:url" content="https://lightsaber.studio/" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Home - Lightsaber Studio" />
    <style id="classic-theme-styles-inline-css" type="text/css">
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(0.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em;
        }
        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none;
        }
    </style>
    <link rel="shortlink" href="https://lightsaber.studio/" />
    <link
        rel="alternate"
        title="oEmbed (JSON)"
        type="application/json+oembed"
        href="https://lightsaber.studio/wp-json/oembed/1.0/embed?url=https%3A%2F%2Flightsaber.studio%2F"
    />
    <link
        rel="alternate"
        title="oEmbed (XML)"
        type="text/xml+oembed"
        href="https://lightsaber.studio/wp-json/oembed/1.0/embed?url=https%3A%2F%2Flightsaber.studio%2F&#038;format=xml"
    />
    <link
        rel="icon"
        href={{asset('assets/img/icons.jpg')}}
        sizes="32x32"
    />
    <link
        rel="icon"
        href={{asset('assets/img/icons192x192.jpg')}}
        sizes="192x192"
    />
    <link
        rel="apple-touch-icon"
        href={{asset('assets/img/icons180x180.jpg')}}
    />
    <meta
        name="msapplication-TileImage"
        content={{asset('assets/img/icons270x270.jpg')}}
    />
    <link
        rel="stylesheet"
        href={{asset('assets/libs/slick/slick.css')}}
    />
    <link
        rel="stylesheet"
        href={{asset('assets/libs/slick/slick-theme.css')}}
    />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>
<body class="home page-template-default page page-id-12">

<div class="wrapper">
    <header>
        <div class="container">
            <div class="logo_header">
                <a href="https://lightsaber.studio"
                ><img src="{{ asset('assets/img/LightSaber_logo.svg') }}" alt="">
                </a>
            </div>
            <div class="navigation_header">
                <ul>
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="{{ route('contact') }}">CONTACT</a></li>
                </ul>
            </div>
            <div class="search_header">
                <div class="mobile_btn_menu" style="display: none">
                    <div class="mobile_btn_menu_block">
                        <span class="mbm1"></span>
                        <span class="mbm2"></span>
                    </div>
                </div>
                <div class="search_header_btn">
                    <img src="{{ asset('assets/img/search-white-upd.svg_.png') }}" alt="Search">
                    Search
                </div>
            </div>
        </div>
    </header>
    <section class="mobile_menu">
        <div class="mobile_menu_bg"></div>
    </section>
@yield('content')


    <footer>
        <div class="container">
            <div class="footer_left_blocks">
                <div class="footer_nav">
                    <div class="footer_nav_title">Navigation</div>
                    <ul>
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('contact') }}">CONTACT</a></li>
                    </ul>
                </div>

                <div class="footer_nav">
                    <div class="footer_nav_title">Info</div>
                    <ul>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer_right_blocks">
                <div class="footer_nav">
                    <div class="footer_nav_title">Social</div>
                    <ul class="SocialList">
                        <li><a href="#">YOUTUBE</a></li>
                        <li><a href="#">INSTAGRAM</a></li>
                        <li><a href="#">TIKTOK</a></li>
                        <li><a href="#">X</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="footer_boottom_info">
                Copyright © 2025 LIGHTSABER. All Rights Reserved.
            </div>
        </div>
    </footer>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('assets/js/contact-form.js') }}"></script>
<script src="{{ asset('assets/js/jquery.marquee.min.js') }}"></script>
<script src="{{ asset('assets/js/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>
