<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">

    <script src='https://cdn.jsdelivr.net/npm/tesseract.js@5/dist/tesseract.min.js'></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        body {
            animation: fadeIn 1s ease-in-out;
        }

        .card, .btn {
            transition: transform 0.3s ease;
        }

        .card:hover, .btn:hover {
            transform: scale(1.05);
        }

        [data-aos] {
            opacity: 0;
            transition-property: opacity, transform;
        }
    </style>

    <style>
        .top-bar {
            background-color: #000;
            padding: 0.5rem 0;
            font-size: 0.875rem;
            color: #fff;
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
            color: #ECAB1D;
            transform: translateY(-2px);
        }

        .main-header {
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1020;
        }

        .main-header .navbar-brand img {
            height: 50px;
        }

        .main-header .nav-link {
            color: #000;
            font-weight: 500;
            transition: all 0.3s ease-in-out;
        }

        .main-header .nav-link:hover {
            color: #ECAB1D;
        }

        .main-header .btn-warning {
            background-color: #ECAB1D;
            color: #000;
            font-weight: bold;
            transition: all 0.3s ease-in-out;
        }

        .main-header .btn-warning:hover {
            background-color: #000;
            color: #fff;
        }
        h1, h2, h3, h4, h5, h6 {
            color: #ECAB1D;
            font-weight: bold;
        }
        .card {
            transition: all 0.3s ease-in-out;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1) !important;
        }
        .hero-section {
            background-image: url("{{ asset('img/slider1.webp') }}");
            background-size: cover;
            background-position: center;
            color: #fff;
            padding: 10rem 0;
        }

        .hero-section h1 {
            font-size: 3.5rem;
            font-weight: bold;
        }

        .hero-section p {
            font-size: 1.25rem;
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
            background-color: #ECAB1D;
            color: #000;
            font-weight: bold;
        }

        .search-form .form-control {
            margin-bottom: 1rem;
        }

        .search-form .btn {
            background-color: #ECAB1D;
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
            text-align: left;
            margin-bottom: 2rem;
            transition: all 0.3s ease-in-out;
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
            color: #ECAB1D;
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
        }

        .feature-item .icon {
            font-size: 1.5rem;
            color: #ECAB1D;
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
            color: #ECAB1D;
            margin-bottom: 1rem;
        }

        .program-item h4 {
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .testimonials-section {
            background-color: #fff;
            padding: 4rem 0;
        }

        .testimonial-item {
            background-color: #f8f9fa;
            padding: 2rem;
            border-radius: 0.5rem;
            margin-bottom: 2rem;
        }

        .testimonial-content p {
            font-style: italic;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            margin-top: 1.5rem;
        }

        .testimonial-author img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            margin-right: 1rem;
        }

        .testimonial-author h4 {
            font-weight: bold;
            margin-bottom: 0.25rem;
        }

        .testimonial-author span {
            color: #6c757d;
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
            color: #ECAB1D;
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
            background-color: #000;
            background-size: cover;
            background-position: center;
            color: #fff;
        }

        .footer h5 {
            font-weight: bold;
            margin-bottom: 1.5rem;
        }

        .footer p {
            color: #ccc;
        }

        .footer .social-icons a {
            color: #fff;
            margin-right: 1rem;
            font-size: 1.2rem;
            transition: all 0.3s ease-in-out;
        }

        .footer .social-icons a:hover {
            color: #ECAB1D;
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
            background-color: #ECAB1D;
            border-color: #ECAB1D;
            color: #000;
            font-weight: bold;
        }

        .footer-bottom {
            background-color: #1a1a1a;
        }

        .footer-bottom p {
            margin-bottom: 0;
            color: #ccc;
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

        <footer class="footer" style="background-image: url('https://jthemes.net/themes/wp/Rapid Visa/wp-content/uploads/2019/03/footer-bg.jpg'); color: #fff;">
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <img src="{{ asset('img/logo.png') }}" alt="Rapid Visa Logo" style="height: 100px; margin-bottom: 1rem;">
                        <p>Your trusted partner for visa solutions. From application to approval, we handle every step with professionalism and care, making your travel and immigration process stress-free.</p>
                        <div class="social-icons mt-4">
                            <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-white me-3"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#" class="text-white me-3"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <h5>Contact Us</h5>
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-start mb-3">
                                <i class="fas fa-map-marker-alt me-3 mt-1"></i>
                                <span>Office 603, 06th Floor Umm Al Quwain Bank Building, <br> Bank Street, Bur Dubai. Dubai, P.O.BOX : 243173, Dubai, UAE</span>
                            </li>
                            <li class="d-flex align-items-start mb-3">
                                <i class="fas fa-phone me-3 mt-1"></i>
                                <span> +971-56-939-8472</span>
                            </li><li class="d-flex align-items-start mb-3">
                                <i class="fas fa-phone me-3 mt-1"></i>
                                <span> +971-4-265-4627</span>
                            </li>
                            <li class="d-flex align-items-start">
                                <i class="fas fa-envelope me-3 mt-1"></i>
                                <span>info@wahegurutravels.com</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 mb-4">
                        <h5>Subscribe</h5>
                        <p>Subscribe to our newsletter for the latest updates.</p>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Your Email">
                            <button class="btn btn-warning" type="button">Subscribe</button>
                        </div>
                        <small>We never share your email with anyone else.</small>
                    </div>
                </div>
            </div>
            <div class="footer-bottom text-center py-3" style="background-color: #1a1a1a;">
                <p class="mb-0">&copy; 2025 Rapid Visa. All Rights Reserved.</p>
            </div>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
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
        });
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>