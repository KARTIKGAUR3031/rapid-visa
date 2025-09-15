@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
    .hero-slider .hero-item {
        height: 70vh;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: #fff;
        position: relative;
    }
    .hero-slider .hero-item h1 {
        font-size: 4rem;
        font-weight: 700;
        margin-bottom: 1rem;
    }
    .hero-slider .hero-item p {
        font-size: 1.5rem;
    }

    .search-form {
        display: flex;
        justify-content: center;
        margin-top: 30px;
    }
    .search-form input {
        width: 300px;
        padding: 15px;
        border: 2px solid #4A4A4A;
        border-radius: 8px 0 0 8px;
        background-color: rgba(255, 255, 255, 0.9);
        color: #4A4A4A;
        font-size: 1rem;
    }
    .search-form input:focus {
        outline: none;
        border-color: #4169E1;
        box-shadow: 0 0 0 3px rgba(65, 105, 225, 0.2);
    }
    .search-form button {
        padding: 15px 30px;
        border: none;
        background: #000080;
        color: white;
        border-radius: 0 8px 8px 0;
        cursor: pointer;
        font-weight: 600;
        transition: all 0.3s ease;
    }
    .search-form button:hover {
        background: #4169E1;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 0, 128, 0.3);
    }

    .service-box, .country-box {
        transition: transform 0.4s ease, box-shadow 0.4s ease, background-color 0.3s ease;
        background: #ffffff;
        border: 1px solid #e0e0e0;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 128, 0.08);
    }
    .service-box:hover, .country-box:hover {
        transform: translateY(-8px) scale(1.02);
        box-shadow: 0 12px 30px rgba(0, 0, 128, 0.15);
        background: #e8f0ff;
    }
    .future-section {
        position: relative;
        background: #000080;
        color: #ffffff;
    }
    .future-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 128, 0.8);
        z-index: 1;
    }
    .future-section .container {
        position: relative;
        z-index: 2;
    }
    .future-section h2, .future-section h3 {
        color: #ffffff;
        text-shadow: 0 2px 4px rgba(0, 0, 128, 0.3);
    }
    .future-section p {
        color: #e8f0ff;
        font-weight: 400;
    }

    /* Animation Styles */
    .animate-on-scroll {
        opacity: 0;
        transform: translateY(50px);
        transition: all 0.6s ease-out;
    }
    
    .animate-on-scroll.animated {
        opacity: 1;
        transform: translateY(0);
    }
    
    .slide-in-left {
        transform: translateX(-100px);
    }
    
    .slide-in-left.animated {
        transform: translateX(0);
    }
    
    .slide-in-right {
        transform: translateX(100px);
    }
    
    .slide-in-right.animated {
        transform: translateX(0);
    }
    
    .fade-in {
        opacity: 0;
        transform: translateY(30px);
    }
    
    .fade-in.animated {
        opacity: 1;
        transform: translateY(0);
    }
    
    .zoom-in {
        opacity: 0;
        transform: scale(0.8);
    }
    
    .zoom-in.animated {
        opacity: 1;
        transform: scale(1);
    }
    
    .stagger-animation > * {
        opacity: 0;
        transform: translateY(20px);
        transition: all 0.5s ease-out;
    }
    
    .stagger-animation.animated > *:nth-child(1) { transition-delay: 0.1s; opacity: 1; transform: translateY(0); }
    .stagger-animation.animated > *:nth-child(2) { transition-delay: 0.2s; opacity: 1; transform: translateY(0); }
    .stagger-animation.animated > *:nth-child(3) { transition-delay: 0.3s; opacity: 1; transform: translateY(0); }
    .stagger-animation.animated > *:nth-child(4) { transition-delay: 0.4s; opacity: 1; transform: translateY(0); }
    .stagger-animation.animated > *:nth-child(5) { transition-delay: 0.5s; opacity: 1; transform: translateY(0); }
    .stagger-animation.animated > *:nth-child(6) { transition-delay: 0.6s; opacity: 1; transform: translateY(0); }

    /* Hero Slider Animations - Professional like rapidvisas.com */
    @keyframes kenBurns {
        0% {
            transform: scale(1.1) translateX(-2%);
            opacity: 0.8;
        }
        100% {
            transform: scale(1.2) translateX(2%);
            opacity: 1;
        }
    }

    @keyframes parallaxSlide {
        0% {
            transform: translateY(100px) scale(0.9);
            opacity: 0;
        }
        100% {
            transform: translateY(0) scale(1);
            opacity: 1;
        }
    }

    @keyframes textReveal {
        0% {
            transform: translateY(100%);
            opacity: 0;
        }
        100% {
            transform: translateY(0);
            opacity: 1;
        }
    }

    @keyframes textGlow {
        0% {
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
        }
        50% {
            text-shadow: 0 0 20px rgba(255, 255, 255, 0.6), 0 0 30px rgba(142, 108, 235, 0.4);
        }
        100% {
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
        }
    }

    @keyframes overlayReveal {
        0% {
            transform: scaleX(0);
            transform-origin: left;
        }
        50% {
            transform: scaleX(1);
            transform-origin: left;
        }
        51% {
            transform: scaleX(1);
            transform-origin: right;
        }
        100% {
            transform: scaleX(0);
            transform-origin: right;
        }
    }

    .hero-item {
        position: relative;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: #ffffff;
    }

    .hero-item::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: var(--bg-image);
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        animation: kenBurns 8s ease-in-out infinite alternate;
        z-index: 1;
    }

    .hero-item::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 2;
    }

    .hero-item .container {
        position: relative;
        z-index: 3;
        max-width: 800px;
        margin: 0 auto;
        padding: 0 20px;
        animation: parallaxSlide 1.2s cubic-bezier(0.25, 0.46, 0.45, 0.94) 0.3s both;
    }

    .hero-item h1 {
        font-size: 3.5rem;
        font-weight: 700;
        margin-bottom: 1.5rem;
        line-height: 1.2;
        animation: textReveal 1s cubic-bezier(0.77, 0, 0.18, 1) 0.6s both;
        position: relative;
        overflow: hidden;
        color: #ffffff;
        text-shadow: 0 2px 8px rgba(255, 255, 255, 0.4);
        letter-spacing: -0.02em;
    }

    .hero-item h1::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
        animation: overlayReveal 1.5s ease-in-out 1.8s both;
    }

    .hero-item p {
        font-size: 1.8rem;
        margin-bottom: 2rem;
        animation: textReveal 1s cubic-bezier(0.77, 0, 0.18, 1) 0.9s both;
        opacity: 0.95;
        color: #e8f0ff;
        font-weight: 400;
        text-shadow: 0 1px 4px rgba(0, 0, 128, 0.3);
        letter-spacing: 0.01em;
    }

    .hero-item .btn-cta {
        display: inline-block;
        padding: 15px 40px;
        background: linear-gradient(135deg, #ee9734ff, #f59e0b);
        color: white;
        text-decoration: none;
        border-radius: 50px;
        font-weight: 600;
        font-size: 1.1rem;
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        box-shadow: 0 8px 25px rgba(217, 119, 6, 0.3), 0 0 0 1px rgba(255, 255, 255, 0.1);
        animation: parallaxSlide 1s cubic-bezier(0.25, 0.46, 0.45, 0.94) 1.2s both;
        position: relative;
        overflow: hidden;
    }

    .hero-item .btn-cta:hover {
        transform: translateY(-3px) scale(1.02);
        box-shadow: 0 15px 40px rgba(217, 119, 6, 0.4), 0 0 0 1px rgba(255, 255, 255, 0.2);
        background: linear-gradient(135deg, #f59e0b, #ee9734ff);
    }

    .hero-item .btn-cta::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
        transition: left 0.6s ease;
    }

    .hero-item .btn-cta:hover::before {
        left: 100%;
    }

    /* Owl Carousel enhanced animations */
    .owl-item.active .hero-item::before {
        animation: kenBurns 8s ease-in-out infinite alternate;
    }

    .owl-item.active .hero-item h1 {
        animation: textReveal 1s cubic-bezier(0.77, 0, 0.18, 1) 0.6s both, textGlow 2s ease-in-out 2s infinite;
    }

    .owl-item.active .hero-item p {
        animation: textReveal 1s cubic-bezier(0.77, 0, 0.18, 1) 0.9s both;
    }

    .owl-item.active .hero-item .container {
        animation: parallaxSlide 1.2s cubic-bezier(0.25, 0.46, 0.45, 0.94) 0.3s both;
    }

    /* Responsive animations */
    /* Text highlight effects */
    .text-highlight {
        background: linear-gradient(120deg, transparent 0%, rgba(255, 255, 255, 0.15) 50%, transparent 100%);
        background-size: 200% 100%;
        animation: highlightSweep 3s ease-in-out infinite;
        padding: 0 10px;
        color: #ffffff;
        font-weight: 700;
        text-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
    }

    @keyframes highlightSweep {
        0%, 100% { background-position: 200% 0; }
        50% { background-position: -200% 0; }
    }

    /* Enhanced button animations */
    .btn-cta {
        position: relative;
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }

    .btn-cta::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
        transition: left 0.5s ease;
    }

    .btn-cta:hover::before {
        left: 100%;
    }

    .btn-cta i {
        margin-left: 8px;
        transition: transform 0.3s ease;
    }

    .btn-cta:hover i {
        transform: translateX(5px);
    }

    /* Hero content wrapper */
    .hero-content {
        position: relative;
        z-index: 4;
    }

    /* Responsive animations */
    @media (max-width: 768px) {
        .hero-item {
            min-height: 400px;
            padding: 40px 20px;
        }
        
        .hero-item h1 {
            font-size: 2.2rem;
            margin-bottom: 1rem;
        }
        
        .hero-item p {
            font-size: 1.2rem;
            margin-bottom: 1.5rem;
        }
        
        .btn-cta {
            padding: 12px 30px;
            font-size: 1rem;
        }
    }

    @media (max-width: 480px) {
        .hero-item {
            min-height: 350px;
        }
        
        .hero-item h1 {
            font-size: 1.8rem;
        }
        
        .hero-item p {
            font-size: 1rem;
        }
    }

    /* Loading animation with fade out */
    .hero-loading {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 40px;
        height: 40px;
        border: 3px solid rgba(255, 255, 255, 0.3);
        border-top: 3px solid #008080;
        border-radius: 50%;
        animation: spin 1s linear infinite;
        z-index: 10;
        transition: opacity 0.5s ease, visibility 0.5s ease;
        box-shadow: 0 0 20px rgba(0, 128, 128, 0.3);
    }

    .hero-item.loaded .hero-loading {
        opacity: 0;
        visibility: hidden;
    }

    @keyframes spin {
        0% { transform: translate(-50%, -50%) rotate(0deg); }
        100% { transform: translate(-50%, -50%) rotate(360deg); }
    }

    /* Smooth transitions for all elements */
    .hero-item * {
        transition: all 0.3s ease;
    }

    /* Modern glassmorphism effects */
    .glass-effect {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        box-shadow: 0 8px 32px rgba(0, 0, 128, 0.1);
    }

    /* Sophisticated gradient backgrounds */
    .gradient-bg {
        background: linear-gradient(135deg, #000080, #4169E1, #008080, #006400);
        background-size: 400% 400%;
        animation: gradientShift 8s ease infinite;
    }

    @keyframes gradientShift {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }

    /* Premium text styling */
    .premium-text {
        background: linear-gradient(135deg, #ffffff, #e8f0ff);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    /* Enhanced shadows and depth */
    .shadow-enhanced {
        box-shadow: 0 10px 40px rgba(0, 0, 128, 0.15), 0 2px 10px rgba(65, 105, 225, 0.1);
    }

    /* Parallax effect variables */
    .hero-item {
        --parallax-x: 0px;
        --parallax-y: 0px;
    }

    .hero-item::before {
        transform: translate(var(--parallax-x), var(--parallax-y));
    }

    /* Modern hover states */
    .modern-hover:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(0, 0, 128, 0.2);
    }

    /* Sophisticated borders */
    .sophisticated-border {
        border: 1px solid rgba(192, 192, 192, 0.3);
        border-radius: 12px;
    }


</style>

<style>
    .service-box:hover {
        transform: scale(1.05);
        box-shadow: 0 15px 35px rgba(217, 119, 6, 0.3);
        filter: brightness(1.1);
    }

    .country-box:hover {
        transform: scale(1.05);
        box-shadow: 0 15px 35px rgba(217, 119, 6, 0.3);
        filter: brightness(1.1);
    }

    .statistic-box:hover {
        transform: scale(1.05);
        box-shadow: 0 15px 35px rgba(217, 119, 6, 0.3);
        filter: brightness(1.1);
    }

    .statistic-box:hover {
        transform: scale(1.05);
        box-shadow: 0 15px 35px rgba(217, 119, 6, 0.3);
        filter: brightness(1.1);
    }
</style>

<div class="hero-slider owl-carousel">
    <div class="hero-item" data-bg="{{ asset('img/SLIDER/slider1.webp') }}">
        <div class="hero-loading"></div>
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">
                    <span class="text-highlight">Your Trusted Immigration & Visa Consultant</span>
                </h1>
                <p class="hero-subtitle">
                    Find the right visa for you
                </p>
                <a href="#services" class="btn-cta">
                    <span>Get Started</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="hero-item" data-bg="{{ asset('img/SLIDER/slider2.png') }}">
        <div class="hero-loading"></div>
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">
                    <span class="text-highlight">Expert Guidance for a Smooth Process</span>
                </h1>
                <p class="hero-subtitle">
                    Your journey to a new country starts here
                </p>
                <a href="#contact" class="btn-cta">
                    <span>Contact Us</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="hero-item" data-bg="{{ asset('img/SLIDER/slider3.png') }}">
        <div class="hero-loading"></div>
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">
                    <span class="text-highlight">Your Future Awaits, We'll Help You Get There</span>
                </h1>
                <p class="hero-subtitle">
                    Comprehensive visa and immigration services
                </p>
                <a href="#services" class="btn-cta">
                    <span>Explore Services</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="hero-item" data-bg="{{ asset('img/SLIDER/slider4.png') }}">
        <div class="hero-loading"></div>
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">
                    <span class="text-highlight">Your Future Awaits, We'll Help You Get There</span>
                </h1>
                <p class="hero-subtitle">
                    Comprehensive visa and immigration services
                </p>
                <a href="#services" class="btn-cta">
                    <span>Learn More</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="hero-item" data-bg="{{ asset('img/SLIDER/slider5.png') }}">
        <div class="hero-loading"></div>
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">
                    <span class="text-highlight">Your Future Awaits, We'll Help You Get There</span>
                </h1>
                <p class="hero-subtitle">
                    Comprehensive visa and immigration services
                </p>
                <a href="#services" class="btn-cta">
                    <span>Get Started</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="hero-item" data-bg="{{ asset('img/SLIDER/slider6.webp') }}">
        <div class="hero-loading"></div>
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">
                    <span class="text-highlight">Your Future Awaits, We'll Help You Get There</span>
                </h1>
                <p class="hero-subtitle">
                    Comprehensive visa and immigration services
                </p>
                <a href="#services" class="btn-cta">
                    <span>Get Started</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="about-section animate-on-scroll slide-in-left" style="padding: 100px 0;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="{{asset('img/image-01.png')}}" alt="About Us" class="img-fluid about-image" data-aos="fade-left" data-aos-duration="1000" style="border-radius: 10px; transition: all 0.4s ease; cursor: pointer;">
                <style>
                    .about-image:hover {
                        transform: scale(1.05);
                        box-shadow: 0 15px 35px rgba(217, 119, 6, 0.3);
                        filter: brightness(1.1);
                    }
                </style>
            </div>
            <div class="col-md-6" data-aos="fade-right" data-aos-duration="1000">
                <h4 style="font-size: 1.3rem; font-weight: bold; margin-bottom: 10px;">About us</h4>
                <h2 style="font-size: 2.5rem; font-weight: bold; margin-bottom: 20px;">Getting a Visa Made Simple</h2>
                <p style="font-size: 1.1rem; margin-bottom: 20px;">We make the visa process faster, easier, and stress-free. Whether you are applying for study, work, travel, or permanent residency, our expert team guides you through every step with accuracy and care. From filling out applications to preparing documentation, we ensure a smooth journey toward your approved visa.</p>
                <h4 style="font-size: 1.3rem; font-weight: bold; margin-bottom: 10px;">Personalized Guidance for Every Applicant</h4>
                <p style="font-size: 1.1rem; margin-bottom: 20px;">Each traveler’s journey is unique, and so are their visa requirements. Our consultants provide personalized support, helping you understand eligibility, document requirements, and embassy guidelines. We simplify complex procedures, saving you valuable time and reducing the chances of delays or rejections.</p>
                <h4 style="font-size: 1.3rem; font-weight: bold; margin-bottom: 10px;">Trusted Expertise You Can Rely On</h4>
                <p style="font-size: 1.1rem; margin-bottom: 20px;">With years of experience and up-to-date knowledge of immigration rules, we are your trusted partner for visa success. Our team works with dedication, transparency, and integrity to make sure your dream destination becomes a reality. Whether you’re planning to study abroad, travel for leisure, or explore global opportunities, we’re here to support you at every stage.</p>
            </div>
        </div>
    </div>
</div>

<div class="services-section animate-on-scroll fade-in" style="padding: 100px 0; background-color: #f8f9fa;">
    <div class="container">
        <h2 style="text-align: center; margin-bottom: 50px;">Our Services</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="service-box" style="text-align: center; margin-bottom: 30px; transition: all 0.4s ease; cursor: pointer;">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRD5N3UJqLUWrrmMyouv61x35h7dgdJk_KfMQ&s" alt="Work Visa" style="max-width: 100px; margin-bottom: 20px; border-radius: 8px;">
                    <h4>Work Visa</h4>
                    <p>Assisting students in obtaining work visas for their dream jobs.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-box" style="text-align: center; margin-bottom: 30px; transition: all 0.4s ease; cursor: pointer;">
                    <img src="https://plus.unsplash.com/premium_photo-1752231227830-20cee47c4663?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mjl8fGJ1c2luZXNzJTIwdmlzYSUyMGltYWdlfGVufDB8fDB8fHww" alt="Business Visa" style="max-width: 100px; margin-bottom: 20px; border-radius: 8px;">
                    <h4>Business Visa</h4>
                    <p>Assisting professionals in obtaining business visas for their entrepreneurial ventures.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-box" style="text-align: center; margin-bottom: 30px; transition: all 0.4s ease; cursor: pointer;">
                    <img src="https://4.imimg.com/data4/QM/CB/MY-15662140/permanent-residency-visa-service-500x500.jpg" alt="Permanent Residency" style="max-width: 100px; margin-bottom: 20px; border-radius: 8px;">
                    <h4>Permanent Residency</h4>
                    <p>Guiding you through the process of obtaining permanent residency.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="country-section animate-on-scroll fade-in" style="padding: 100px 0;">
    <div class="container">
        <h2 style="text-align: center; margin-bottom: 50px;">Choose Your Country</h2>
        <div class="row">
            <div class="col-md-2">
                <div class="country-box" style="text-align: center; margin-bottom: 30px; transition: all 0.4s ease; cursor: pointer;">
                    <img src="{{ asset('img/flags/flagsss/canada-flag.jpg') }}" alt="Canada" style="max-width: 100px; margin-bottom: 20px;">
                    <h4>Canada</h4>
                </div>
            </div>
            <div class="col-md-2">
                <div class="country-box" style="text-align: center; margin-bottom: 30px; transition: all 0.4s ease; cursor: pointer;">
                    <img src="{{ asset('img/flags/flagsss/newzealand-flag.jpg') }}" alt="New Zealand" style="max-width: 100px; margin-bottom: 20px;">
                    <h4>New Zealand</h4>
                </div>
            </div>
            <div class="col-md-2">
                <div class="country-box" style="text-align: center; margin-bottom: 30px; transition: all 0.4s ease; cursor: pointer;">
                    <img src="{{ asset('img/flags/flagsss/singapore-flag.jpg') }}" alt="Singapore" style="max-width: 100px; margin-bottom: 20px;">
                    <h4>Singapore</h4>
                </div>
            </div>
            <div class="col-md-2">
                <div class="country-box" style="text-align: center; margin-bottom: 30px; transition: all 0.4s ease; cursor: pointer;">
                    <img src="{{ asset('img/flags/flagsss/uk-flag.jpg') }}" alt="UK" style="max-width: 100px; margin-bottom: 20px;">
                    <h4>UK</h4>
                </div>
            </div>
            <div class="col-md-2">
                <div class="country-box" style="text-align: center; margin-bottom: 30px; transition: all 0.4s ease; cursor: pointer;">
                    <img src="{{ asset('img/flags/flagsss/usa-flag.jpg') }}" alt="USA" style="max-width: 100px; margin-bottom: 20px;">
                    <h4>USA</h4>
                </div>
            </div>
            <div class="col-md-2">
                <div class="country-box" style="text-align: center; margin-bottom: 30px; transition: all 0.4s ease; cursor: pointer;">
                    <img src="{{ asset('img/flags/flagsss/australia-flag.jpg') }}" alt="Australia" style="max-width: 100px; margin-bottom: 20px;">
                    <h4>Australia</h4>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="statistic-section" style="background-color: #f8f9fa; padding: 100px 0;">
    <div class="container">
        <h2 style="text-align: center; margin-bottom: 50px;">Thousands Of People Choose Our Services</h2>
        <div class="row">
            <div class="col-md-3">
                <div class="statistic-box" style="text-align: center; transition: all 0.4s ease; cursor: pointer;">
                    <h3 class="count-number" style="font-size: 3rem; font-weight: bold; color: #ee9734ff;" data-target="820">820+</h3>
                    <p>Happy Customers</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="statistic-box" style="text-align: center; transition: all 0.4s ease; cursor: pointer;">
                    <h3 class="count-number" style="font-size: 3rem; font-weight: bold; color: #ee9734ff;" data-target="48">48+</h3>
                    <p>Government Partners</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="statistic-box" style="text-align: center; transition: all 0.4s ease; cursor: pointer;">
                    <h3 class="count-number" style="font-size: 3rem; font-weight: bold; color: #ee9734ff;" data-target="80">80+</h3>
                    <p>Countries</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="statistic-box" style="text-align: center; transition: all 0.4s ease; cursor: pointer;">
                    <h3 class="count-number" style="font-size: 3rem; font-weight: bold; color: #ee9734ff;" data-target="245587">245587+</h3>
                    <p>Immigrations</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="future-section" style="background-image: url('{{ asset('img/happy-customer.png') }}'); background-size: cover; background-position: center; padding: 100px 0; text-align: center; color: white;">
    <div class="container">
        <h2 style="font-size: 2rem; font-weight: bold;">Planning for the Future</h2>
        <h3 style="font-size: 3rem; font-weight: bold; margin-bottom: 20px;">Give wings to your dreams, fly to study or work abroad</h3>
        <p style="font-size: 1.2rem; margin-bottom: 30px;">hape your future with global opportunities – study, work, and succeed abroad.
Turn your dreams into reality and soar beyond boundaries.</p>
    </div>
</div>

<script>
// Animation on scroll functionality
function animateOnScroll() {
    const elements = document.querySelectorAll('.animate-on-scroll, .slide-in-left, .slide-in-right, .fade-in, .zoom-in, .stagger-animation');
    
    elements.forEach(element => {
        const elementTop = element.getBoundingClientRect().top;
        const elementBottom = element.getBoundingClientRect().bottom;
        const windowHeight = window.innerHeight;
        
        // Check if element is in viewport
        if (elementTop < windowHeight - 100 && elementBottom > 0) {
            element.classList.add('animated');
        }
    });
}

// Add animation classes to specific sections
// About section already has slide-in-left
// Services section
const servicesSection = document.querySelector('.services-section');
if (servicesSection) {
    servicesSection.classList.add('fade-in');
    const serviceBoxes = servicesSection.querySelectorAll('.service-box');
    serviceBoxes.forEach((box, index) => {
        box.style.transitionDelay = `${index * 0.1}s`;
    });
}

// Country section
const countrySection = document.querySelector('.country-section');
if (countrySection) {
    countrySection.classList.add('fade-in');
    const countryBoxes = countrySection.querySelectorAll('.country-box');
    countryBoxes.forEach((box, index) => {
        box.style.transitionDelay = `${index * 0.1}s`;
    });
}

// Statistics section
const statisticsSection = document.querySelector('.statistic-section');
if (statisticsSection) {
    statisticsSection.classList.add('zoom-in');
    const statItems = statisticsSection.querySelectorAll('.row > div');
    statItems.forEach((item, index) => {
        item.style.transitionDelay = `${index * 0.1}s`;
    });
}

// Counter animation for statistics
function animateCounter(element, target) {
    let current = 0;
    const increment = target / 100;
    const timer = setInterval(() => {
        current += increment;
        if (current >= target) {
            current = target;
            clearInterval(timer);
        }
        element.textContent = Math.floor(current) + '+';
    }, 20);
}

// Initialize counter animations when statistics section comes into view
function initCounterAnimation() {
    const counters = document.querySelectorAll('.count-number');
    counters.forEach(counter => {
        const target = parseInt(counter.getAttribute('data-target'));
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounter(counter, target);
                    observer.unobserve(counter);
                }
            });
        });
        observer.observe(counter);
    });
}

// Initialize animations
window.addEventListener('scroll', animateOnScroll);
window.addEventListener('load', () => {
    animateOnScroll();
    initCounterAnimation();
});

// Trigger initial check
animateOnScroll();

// Hero slider background and animation handling
function initHeroSlider() {
    const heroItems = document.querySelectorAll('.hero-item');
    
    heroItems.forEach(item => {
        const bgImage = item.getAttribute('data-bg');
        if (bgImage) {
            item.style.setProperty('--bg-image', `url('${bgImage}')`);
        }
    });

    // Add background image styles
    const style = document.createElement('style');
    style.textContent = `
        .hero-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: var(--bg-image);
            background-size: cover;
            background-position: center;
            z-index: 1;
        }
    `;
    document.head.appendChild(style);

    // Initialize Owl Carousel with animation callbacks
    if (typeof $ !== 'undefined' && $.fn.owlCarousel) {
        $('.hero-slider').owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            nav: false,
            dots: true,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            smartSpeed: 1000,
            onInitialized: function() {
                // Trigger first slide animation
                setTimeout(() => {
                    const activeSlide = document.querySelector('.hero-item');
                    if (activeSlide) {
                        activeSlide.classList.add('animated');
                    }
                }, 100);
            },
            onTranslated: function() {
                // Trigger animations for new active slide
                const activeSlide = document.querySelector('.owl-item.active .hero-item');
                if (activeSlide) {
                    // Reset animations
                    const h1 = activeSlide.querySelector('h1');
                    const p = activeSlide.querySelector('p');
                    const container = activeSlide.querySelector('.container');
                    
                    // Force reflow to restart animations
                    h1.style.animation = 'none';
                    p.style.animation = 'none';
                    container.style.animation = 'none';
                    
                    setTimeout(() => {
                        h1.style.animation = 'slideInUp 1s ease-out 0.7s both';
                        p.style.animation = 'slideInUp 1s ease-out 0.9s both';
                        container.style.animation = 'slideInUp 1s ease-out 0.5s both';
                    }, 10);
                }
            }
        });
    }
}

// Initialize hero slider when DOM is ready
document.addEventListener('DOMContentLoaded', initHeroSlider);

// Enhanced hero slider initialization with loading states and professional animations
function initHeroSlider() {
    const heroItems = document.querySelectorAll('.hero-item');
    let loadedImages = 0;
    
    heroItems.forEach((item, index) => {
        const bgUrl = item.getAttribute('data-bg');
        const loading = item.querySelector('.hero-loading');
        
        if (bgUrl) {
            const img = new Image();
            img.onload = function() {
                item.style.setProperty('--bg-image', `url('${bgUrl}')`);
                loadedImages++;
                
                if (loading) {
                    loading.style.display = 'none';
                }
                
                // Add staggered entrance animation
                setTimeout(() => {
                    item.classList.add('loaded');
                }, index * 200);
            };
            img.onerror = function() {
                if (loading) {
                    loading.style.display = 'none';
                }
                item.style.setProperty('--bg-image', 'linear-gradient(135deg, #667eea 0%, #764ba2 100%)');
            };
            img.src = bgUrl;
        }
    });

    // Initialize Owl Carousel with advanced animation callbacks
    if (typeof $ !== 'undefined' && $.fn.owlCarousel) {
        $('.hero-slider').owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            smartSpeed: 1200,
            dots: true,
            nav: false,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            onInitialized: function() {
                // Trigger entrance animations
                setTimeout(() => {
                    const activeSlide = document.querySelector('.owl-item.active');
                    if (activeSlide) {
                        activeSlide.classList.add('animated');
                    }
                }, 500);
            },
            onTranslate: function() {
                // Reset animations before slide change
                document.querySelectorAll('.hero-item').forEach(item => {
                    item.classList.remove('animated');
                });
            },
            onTranslated: function() {
                // Trigger animations for new active slide
                setTimeout(() => {
                    const activeSlide = document.querySelector('.owl-item.active');
                    if (activeSlide) {
                        activeSlide.classList.add('animated');
                    }
                }, 200);
            }
        });
    }

    // Add scroll-triggered animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('in-view');
            }
        });
    }, observerOptions);

    document.querySelectorAll('.hero-item').forEach(item => {
        observer.observe(item);
    });
}
</script>

@endsection

@push('scripts')
<script>
    $(document).ready(function(){
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
@endpush