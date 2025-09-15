<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <style>
        .top-bar {
            background: linear-gradient(135deg, #d65656ff, #eea334ff);
            padding: 0.5rem 0;
            font-size: 0.875rem;
            color: #ffffff;
            box-shadow: 0 2px 10px rgba(0, 0, 128, 0.2);
        }

        .top-bar .contact-info,
        .top-bar .social-media {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .top-bar .contact-info li,
        .top-bar .social-media li {
            display: inline-block;
            margin-right: 1rem;
        }

        .top-bar .social-media li:last-child {
            margin-right: 0;
        }

        .top-bar .social-media a {
            color: #fff;
            transition: all 0.3s ease-in-out;
        }

        .top-bar .social-media a:hover {
            color: #ee9734ff;
            transform: translateY(-2px);
        }

        



        .main-header {
            background: linear-gradient(135deg, #ffffff, #f8f9fa);
            box-shadow: 0 4px 20px rgba(0, 0, 128, 0.1);
            position: sticky;
            top: 0;
            z-index: 1020;
            border-bottom: 1px solid rgba(192, 192, 192, 0.2);
        }

        .main-header .navbar-brand img {
            height: 50px;
        }

        .main-header .nav-link {
            color: #4A4A4A;
            font-weight: 600;
            transition: all 0.3s ease-in-out;
            position: relative;
        }

        .main-header .nav-link::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(135deg, #ee9734ff, #f59e0b);
            transition: width 0.3s ease;
        }

        .main-header .nav-link:hover {
            color: #ee9734ff;
            background-color: rgba(217, 119, 6, 0.1);
            border-radius: 4px;
        }

        .main-header .nav-link:hover::after {
            width: 100%;
        }

        .main-header .btn-warning {
            background: linear-gradient(135deg, #ee9734ff, #f59e0b);
            color: #ffffff;
            font-weight: 600;
            border: none;
            transition: all 0.3s ease-in-out;
            box-shadow: 0 4px 15px rgba(217, 119, 6, 0.3);
        }

        .main-header .btn-warning:hover {
            background: linear-gradient(135deg, #f59e0b, #ee9734ff);
            color: #ffffff;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(217, 119, 6, 0.4);
        }
        h1, h2, h3, h4, h5, h6 {
            color:  #f59e0b;
            font-weight: 700;
            font-family: 'Inter', sans-serif;
        }

        h1 {
            background: linear-gradient(135deg, #f59e0b, #ee9734ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .card {
            transition: all 0.4s ease-in-out;
            border: 1px solid rgba(192, 192, 192, 0.2);
            background: linear-gradient(135deg, #ffffff, #f8f9fa);
        }

        .card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 12px 30px rgba(0, 0, 128, 0.15) !important;
            background: linear-gradient(135deg, #ffffff, #e8f0ff);
            border-color: rgba(65, 105, 225, 0.3);
        }
        .hero-section {
            background-color: #f8f9fa;
            padding: 100px 0;
        }

        .hero-section h1 {
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .hero-section p {
            font-size: 20px;
            margin-bottom: 30px;
        }

        .search-form {
            background-color: #fff;
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .search-form .nav-tabs .nav-link {
            color: #000;
        }

        .search-form .nav-tabs .nav-link.active {
            background-color: #ee9734ff;
            color: #000;
            font-weight: bold;
        }

        .search-form .form-control {
            margin-bottom: 1rem;
        }

        .search-form .btn {
            background-color: #ee9734ff;
            color: #000;
            font-weight: bold;
            width: 100%;
        }

        .services-section {
            background-color: #f8f9fa;
        }

        .service-item {
            background-color: #fff;
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-bottom: 2rem;
            transition: all 0.3s ease-in-out;
        }

        .service-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        .service-item p {
            text-align: left;
        }

        .service-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        .service-item .icon {
            font-size: 3rem;
            color: #ee9734ff;
            margin-bottom: 1rem;
        }

        .service-item h4 {
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .why-choose-us-section {
            background-color: #fff;
        }

        .feature-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 2rem;
            transition: all 0.3s ease-in-out;

        }

        .feature-item:hover {
            transform: translateX(10px);
        }

        .feature-item .icon {
            font-size: 1.5rem;
            color: #ee9734ff;
            margin-right: 1rem;
        }

        .feature-item h4 {
            font-weight: bold;
            margin-bottom: 0.5rem;
        }

        .immigration-programs-section {
            background-color: #f8f9fa;
            padding: 4rem 0;
        }

        .program-item {
            background-color: #fff;
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-bottom: 2rem;
            transition: all 0.3s ease-in-out;
        }

        .program-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        .program-item .icon {
            font-size: 3rem;
            color: #ee9734ff;
            margin-bottom: 1rem;
        }

        .program-item h4 {
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .testimonials-section {
            background-color: #f8f9fa;
            padding: 50px 0;
        }
        .testimonial-slider .testimonial-item {
            background: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.05);
        }
        .testimonial-quote-icon {
            font-size: 30px;
            color: #ee9734ff;
            margin-bottom: 20px;
        }
        .testimonial-text {
            font-size: 16px;
            line-height: 1.7;
            color: #666;
            font-style: italic;
        }
        .testimonial-author .author-name {
            font-size: 18px;
            font-weight: bold;
            color: #333;
            margin-top: 20px;
            margin-bottom: 5px;
        }
        .testimonial-author .author-location {
            font-size: 14px;
            color: #888;
        }
        .owl-dots {
            text-align: center;
            margin-top: 30px;
        }
        .owl-dot {
            display: inline-block;
            width: 12px;
            height: 12px;
            background: #ddd;
            border-radius: 50%;
            margin: 0 5px;
            transition: background 0.3s;
        }
        .owl-dot.active {
            background: #ee9734ff;
        }

        .recent-news-section {
            background-color: #f8f9fa;
            padding: 4rem 0;
        }

        .news-item {
            background-color: #fff;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 2rem;
            transition: all 0.3s ease-in-out;
        }

        .news-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        .news-item img {
            width: 100%;
            border-top-left-radius: 0.5rem;
            border-top-right-radius: 0.5rem;
        }

        .news-content {
            padding: 1.5rem;
        }

        .news-content .date {
            color: #6c757d;
            font-size: 0.875rem;
        }

        .news-content h4 a {
            color: #000;
            font-weight: bold;
            text-decoration: none;
        }

        .news-content .read-more {
            color: #ee9734ff;
            font-weight: bold;
            text-decoration: none;
        }

        .company-logos-section {
            background-color: #fff;
        }

        .company-logos-section img {
            max-width: 100%;
            height: auto;
            opacity: 0.6;
            transition: opacity 0.3s ease;
        }

        .company-logos-section img:hover {
            opacity: 1;
        }

        .visa-carousel-section {
            position: relative;
            z-index: 1;
            margin-top:-80px;
        }

        .visa-item {
            background-color: #fff;
            padding: 1.5rem;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin: 0 15px;
            height: 180px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .visa-item .flag {
            margin-bottom: 1rem;
        }

        .visa-item .flag img {
            max-width: 100px;
            border-radius: 0.5rem;
        }

        .visa-item h4 {
            font-weight: bold;
            font-size: 1.1rem;
        }

        .footer {
            background-color: linear-gradient(135deg, #d65656ff, #eeeb34ff)
            background-size: cover;
            background-position: center;
            color: #000000;
        }

        .footer h5 {
            font-weight: bold;
            margin-bottom: 1.5rem;
        }

        .footer p {
            color: #000000;
            font-weight: bold;
        }

        .footer .social-icons a {
            color: #fff;
            margin-right: 1rem;
            font-size: 1.2rem;
            transition: all 0.3s ease-in-out;
        }

        .footer .social-icons a:hover {
            color: #ee9734ff;
            transform: translateY(-2px);
        }

        .footer .list-unstyled li {
            margin-bottom: 1rem;
        }

        .footer .list-unstyled a {
            color: #ccc;
            text-decoration: none;
        }

        .footer .list-unstyled a:hover {
            color: #fff;
        }

        .footer .input-group .form-control {
            background-color: rgba(255, 255, 255, 0.2);
            border: none;
            color: #fff;
        }

        .footer .input-group .form-control::placeholder {
            color: #ccc;
        }

        .footer .btn-warning {
            background: linear-gradient(135deg, #000080, #4169E1);
            border-color: #000000;
            color: #ffffff;
            font-weight: bold;
        }

        .footer-bottom {
            background-color: #1a1a1a;
        }

        .footer-bottom p {
            margin-bottom: 0;
            color: #ffffffff;
        }

        .hero-slider .hero-item {
            height: 80vh;
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            color: #fff;
        }

        .hero-slider .owl-nav {
            position: absolute;
            top: 50%;
            width: 100%;
            transform: translateY(-50%);
            display: flex;
            justify-content: space-between;
            padding: 0 2rem;
        }

        .hero-slider .owl-nav button {
            background: rgba(0,0,0,0.5) !important;
            color: #fff !important;
            width: 50px;
            height: 50px;
            border-radius: 50% !important;
            font-size: 2rem !important;
        }

        .hero-slider .owl-dots {
            position: absolute;
            bottom: 2rem;
            width: 100%;
            text-align: center;
        }

        .hero-slider .owl-dots .owl-dot {
            width: 12px;
            height: 12px;
            background: #fff !important;
            border-radius: 50%;
            margin: 0 5px;
            opacity: 0.7;
        }

        .hero-slider .owl-dots .owl-dot.active {
            opacity: 1;
        }
    </style>
</head>
<body>
    <div id="app">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="contact-info">
                            <li><i class="fas fa-phone"></i> +971-56-939-8472</li>
                            <li><i class="fas fa-phone"></i> +971-4-265-4627</li>
                            <li><i class="fas fa-envelope"></i> info@wahegurutravels.com</li>
                        </ul>
                    </div>
                    <div class="col-md-6 text-end">
                        <ul class="social-media">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <header class="main-header">
            <nav class="container navbar navbar-expand-md">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('img/logo.png') }}" alt="Rapid Visa Logo" style="height: 70px;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('visas') }}">Visas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('testimonials') }}">Testimonials</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://waheguruholidays.com/">Holidays</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                               <a class="nav-link" href="{{ route('login') }}" style="height: 32px;"><img src="{{ asset('img/icons/usericon.svg') }}" alt="User Icon" style="height: 32px;"></a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('dashboard') }}">
                                        {{ __('Dashboard') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        <li class="nav-item">
                            <a class="btn btn-warning" href="#">GET A QUOTE</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <main>
            @if(session('success'))
                <div class="container mt-3">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            @endif

            @if($errors->any())
                <div class="container mt-3">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            @endif
            @yield('content')
        </main>

        <footer class="footer" style="background-image: url('https://jthemes.net/themes/wp/Rapid Visa/wp-content/uploads/2019/03/footer-bg.jpg');">
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <img src="{{ asset('img/logo.png') }}" alt="Rapid Visa Logo" style="height: 100px; margin-bottom: 1rem;">
                        <p style="background: linear-gradient(135deg, #d65656ff, #eea334ff); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; font-weight: 600;">Your trusted partner for visa solutions. From application to approval, we handle every step with professionalism and care, making your travel and immigration process stress-free.</p>
                        <div class="social-icons mt-4">
                            <a href="#" class="me-3" style="background: linear-gradient(135deg, #d65656ff, #eea334ff); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="me-3" style="background: linear-gradient(135deg, #d65656ff, #eea334ff); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="me-3" style="background: linear-gradient(135deg, #d65656ff, #eea334ff); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#" class="me-3" style="background: linear-gradient(135deg, #d65656ff, #eea334ff); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <h5 style="background: linear-gradient(135deg, #000000, #000000); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; font-weight: bold;">Contact Us</h5>
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-start mb-3">
                                <i class="fas fa-map-marker-alt me-3 mt-1" style="background: linear-gradient(135deg, #d65656ff, #eea334ff); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;"></i>
                                <span style="background: linear-gradient(135deg, #d65656ff, #eea334ff); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; font-weight: 600;">Office 603, 06th Floor Umm Al Quwain Bank Building, <br> Bank Street, Bur Dubai. Dubai, P.O.BOX : 243173, Dubai, UAE</span>
                            </li>
                            <li class="d-flex align-items-start mb-3">
                                <i class="fas fa-phone me-3 mt-1" style="background: linear-gradient(135deg, #d65656ff, #eea334ff); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;"></i>
                                <span style="background: linear-gradient(135deg, #d65656ff, #eea334ff); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; font-weight: 600;"> +971-56-939-8472</span>
                            </li><li class="d-flex align-items-start mb-3">
                                <i class="fas fa-phone me-3 mt-1" style="background: linear-gradient(135deg, #d65656ff, #eea334ff); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;"></i>
                                <span style="background: linear-gradient(135deg, #d65656ff, #eea334ff); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; font-weight: 600;"> +971-4-265-4627</span>
                            </li>
                            <li class="d-flex align-items-start">
                                <i class="fas fa-envelope me-3 mt-1" style="background: linear-gradient(135deg, #d65656ff, #eea334ff); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;"></i>
                                <span style="background: linear-gradient(135deg, #d65656ff, #eea334ff); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; font-weight: 600;">info@wahegurutravels.com</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 mb-4">
                        <h5 style="background: linear-gradient(135deg, #000000, #000000); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; font-weight: bold;">Subscribe</h5>
                        <p style="background: linear-gradient(135deg, #d65656ff, #eea334ff); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; font-weight: 600;">Subscribe to our newsletter for the latest updates.</p>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Your Email" style="background: linear-gradient(135deg, #d65656ff, #eea334ff); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
                            <button class="btn btn-warning" type="button">Subscribe</button>
                        </div>
                        <small style="background: linear-gradient(135deg, #d65656ff, #eea334ff); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">We never share your email with anyone else.</small>
                    </div>
                </div>
            </div>
            <div class="footer-bottom text-center py-3" style="background: linear-gradient(135deg, #000080, #4169E1);">
                <p class="mb-0" style="background: #ffffff; -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; font-weight: 600; font-size: 1.1rem;">&copy; 2025 Rapid Visa | All Rights Reserved. | &copy; Developed By wahegurutravels.com</p>
            </div>
        </footer>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        AOS.init();
        $(document).ready(function(){
            $(".visa-carousel").owlCarousel({
                loop:true,
                margin:10,
                nav:false,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:5
                    }
                }
            });

            $(".company-logos-carousel").owlCarousel({
                loop: true,
                margin: 20,
                nav: false,
                dots: false,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                responsive:{
                    0:{
                        items:2
                    },
                    600:{
                        items:4
                    },
                    1000:{
                        items:6
                    }
                }
            });

            $(".testimonial-slider").owlCarousel({
                items: 1,
                loop: true,
                nav: false,
                dots: true,
                autoplay: true,
                autoplayTimeout: 5000,
                smartSpeed: 450,
            });

            $(".hero-slider").owlCarousel({
                items: 1,
                loop: true,
                autoplay: true,
                autoplayTimeout: 3000,
                smartSpeed: 1500,
                nav: false,
                dots: true
            });
        });
    </script>
    @stack('scripts')
</body>
</html>