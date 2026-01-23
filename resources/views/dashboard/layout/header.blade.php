<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @if (isset($seo_data['seo_title']))
        <title>{{ $seo_data['seo_title'] }}</title>
    @endif

    @if (isset($seo_data['seo_description']))
        <meta name="description" content="{{ $seo_data['seo_description'] }}" />
    @endif

    @if (isset($seo_data['keywords']))
        <meta name="keywords" content="{{ $seo_data['keywords'] }}" />
    @endif


    <meta property="og:title" content="{{ $seo_data['seo_title'] }}">
    <meta property="og:site_name" content="Codepin">

    @if (isset($canocial))
        <meta property="og:url" content="{{ $canocial }}">
    @endif

    <meta property="og:description" content="{{ $seo_data['seo_description'] }}">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ url('uploads/' . $seo_data['seo_image']) }}">

    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">
</head>
<style>
    <style>.goog-te-banner-frame.skiptranslate {
        display: none !important;
    }

    body {
        top: 0px !important;
    }

    .goog-logo-link,
    .goog-te-gadget {
        display: none !important;
    }

    .lang-menu {
        display: none;
    }

    .lang-menu.show {
        display: block;
    }
</style>

</style>

<body>


    <header>
        <div id="myHeader" class="">
            <div class="container">
                <div class="headermn">
                    <nav class="navbar navbar-expand-lg p-0 align-items-center">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img src="{{ asset('assets/images/logo.png') }}" alt="Logo">
                        </a>

                        <!-- <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">

                            <img src="assets/images/image.png" alt="Menu" class="menu-icon">
                        </button> -->
                        <div class="search-bar mx-lg-4">
                            <form class="search-form" autocomplete="off">
                                <input type="search" name="s" placeholder="Search products..."
                                    class="search-input" id="searchInput">

                                <!-- Suggestion Box -->
                                <div class="search-suggestions" id="suggestionBox"></div>
                            </form>
                        </div>

                        <div class="header-actions">

                            <!-- Language Dropdown -->
                            <div class="lang-dropdown">
                                <a href="javascript:void(0)" class="lang-btn" id="langToggle">
                                    <span class="lang-text">Language</span>
                                    <i class="fa-solid fa-chevron-down"></i>
                                </a>

                                <ul class="lang-menu">
                                    <li><a href="#" data-lang="en">English</a></li>
                                    <li><a href="#" data-lang="hi">Hindi</a></li>
                                    <li><a href="#" data-lang="fr">French</a></li>
                                </ul>
                            </div>

                            <!-- Hidden Google Translate -->
                            <div id="google_translate_element" style="display:none;"></div>


                            <!-- Notification -->
                            <a href="#" class="icon-btn notification-btn">
                                <img src="{{ asset('assets/images/bell.png') }}" alt="Notifications">
                                <span class="badge">3</span>
                            </a>



                        </div>



                        <!-- <div class="offcanvas offcanvas-end d-none" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                                    <img src="assets/images/logo/logo.png" alt="">
                                </h5>
                                <button class="offcanvas-close-btn" type="button" data-bs-dismiss="offcanvas" aria-label="Close">
                                    <img src="assets/images/remove.png" alt="">
                                </button>
                            </div>

                            <div class="offcanvas-body align-items-center">
                                <ul class="navbar-nav justify-content-center flex-grow-1">



                                </ul>


                            </div>

                        </div> -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    {{-- HEADER.BLADE.PHP --}}
