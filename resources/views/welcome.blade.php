@extends('layouts.app')

@section('content')
<style>
    .hero-item {
        background-size: cover;
        background-position: center center;
        position: relative;
        z-index: 1;
        height: 600px;
        background-image: var(--bg-image);
    }
    .hero-item::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: 1;
    }
    .hero-content {
        position: relative;
        z-index: 2;
        color: #fff;
        height: 600px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .service-card:hover {
        transform: translateY(-3px) scale(1.02);
        box-shadow: 0 15px 40px rgba(217, 119, 6, 0.4), 0 0 0 1px rgba(255, 255, 255, 0.2);
    }

    .service-box:hover {
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
    <div class="hero-item" data-bg="{{ asset('img/slider/slider3.png') }}">
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
    <div class="hero-item" data-bg="{{ asset('img/slider/slider4.png') }}">
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
    <div class="hero-item" data-bg="{{ asset('img/slider/slider5.png') }}">
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
    <div class="hero-item" data-bg="{{ asset('img/slider/slider6.webp') }}">
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
    <div class="hero-item" data-bg="{{ asset('img/slider/slider1.webp') }}">
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
    <div class="hero-item" data-bg="{{ asset('img/slider/slider2.png') }}">
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

<!-- Services Section -->
<div class="service-section" style="padding: 100px 0; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center mb-5">
                <h2 class="text-white mb-3" style="font-size: 2.5rem; font-weight: 700;">Our Services</h2>
                <p class="text-white-50" style="font-size: 1.2rem;">Comprehensive immigration solutions tailored to your needs</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="service-card" style="background: white; border-radius: 15px; padding: 40px 30px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); transition: all 0.3s ease; height: 100%;">
                    <div class="service-icon mb-4" style="width: 70px; height: 70px; background: linear-gradient(135deg, #667eea, #764ba2); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; animation: icon-float 3s ease-in-out infinite;">
                        <i class="fas fa-briefcase text-white" style="font-size: 1.5rem;"></i>
                    </div>
                    <h4 class="text-center mb-3" style="font-weight: 600; color: #333;">Work Visa</h4>
                    <p class="text-center text-muted mb-4">Professional work visa solutions for global opportunities with expert guidance.</p>
                    <div class="text-center">
                        <a href="{{ route('visas') }}" class="btn btn-primary" style="background: linear-gradient(135deg, #667eea, #764ba2); border: none; border-radius: 25px; padding: 10px 30px;">Learn More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-card" style="background: white; border-radius: 15px; padding: 40px 30px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); transition: all 0.3s ease; height: 100%;">
                    <div class="service-icon mb-4" style="width: 70px; height: 70px; background: linear-gradient(135deg, #f093fb, #f5576c); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; animation: icon-float 3s ease-in-out infinite; animation-delay: 0.2s;">
                        <i class="fas fa-graduation-cap text-white" style="font-size: 1.5rem;"></i>
                    </div>
                    <h4 class="text-center mb-3" style="font-weight: 600; color: #333;">Student Visa</h4>
                    <p class="text-center text-muted mb-4">Comprehensive student visa support for academic excellence worldwide.</p>
                    <div class="text-center">
                        <a href="{{ route('visas') }}" class="btn btn-primary" style="background: linear-gradient(135deg, #f093fb, #f5576c); border: none; border-radius: 25px; padding: 10px 30px;">Learn More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-card" style="background: white; border-radius: 15px; padding: 40px 30px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); transition: all 0.3s ease; height: 100%;">
                    <div class="service-icon mb-4" style="width: 70px; height: 70px; background: linear-gradient(135deg, #4facfe, #00f2fe); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; animation: icon-float 3s ease-in-out infinite; animation-delay: 0.4s;">
                        <i class="fas fa-id-card text-white" style="font-size: 1.5rem;"></i>
                    </div>
                    <h4 class="text-center mb-3" style="font-weight: 600; color: #333;">Permanent Residency</h4>
                    <p class="text-center text-muted mb-4">Achieve your permanent residency dreams with expert green card guidance.</p>
                    <div class="text-center">
                        <a href="{{ route('visas') }}" class="btn btn-primary" style="background: linear-gradient(135deg, #4facfe, #00f2fe); border: none; border-radius: 25px; padding: 10px 30px;">Learn More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-card" style="background: white; border-radius: 15px; padding: 40px 30px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); transition: all 0.3s ease; height: 100%;">
                    <div class="service-icon mb-4" style="width: 70px; height: 70px; background: linear-gradient(135deg, #fa709a, #fee140); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; animation: icon-float 3s ease-in-out infinite; animation-delay: 0.6s;">
                        <i class="fas fa-users text-white" style="font-size: 1.5rem;"></i>
                    </div>
                    <h4 class="text-center mb-3" style="font-weight: 600; color: #333;">Family Immigration</h4>
                    <p class="text-center text-muted mb-4">Reunite with your loved ones through expert family immigration services.</p>
                    <div class="text-center">
                        <a href="{{ route('visas') }}" class="btn btn-primary" style="background: linear-gradient(135deg, #fa709a, #fee140); border: none; border-radius: 25px; padding: 10px 30px;">Learn More</a>

                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-card" style="background: white; border-radius: 15px; padding: 40px 30px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); transition: all 0.3s ease; height: 100%;">
                    <div class="service-icon mb-4" style="width: 70px; height: 70px; background: linear-gradient(135deg, #a8edea, #fed6e3); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; animation: icon-float 3s ease-in-out infinite; animation-delay: 0.8s;">
                        <i class="fas fa-handshake text-dark" style="font-size: 1.5rem;"></i>
                    </div>
                    <h4 class="text-center mb-3" style="font-weight: 600; color: #333;">Business & Investor</h4>
                    <p class="text-center text-muted mb-4">Strategic business and investor visa solutions for expansion.</p>
                    <div class="text-center">
                        <a href="{{ route('contact') }}" class="btn btn-primary" style="background: linear-gradient(135deg, #a8edea, #fed6e3); color: #333; border: none; border-radius: 25px; padding: 10px 30px;">Learn More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-card" style="background: white; border-radius: 15px; padding: 40px 30px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); transition: all 0.3s ease; height: 100%;">
                    <div class="service-icon mb-4" style="width: 70px; height: 70px; background: linear-gradient(135deg, #ffecd2, #fcb69f); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; animation: icon-float 3s ease-in-out infinite; animation-delay: 1s;">
                        <i class="fas fa-chess-knight text-dark" style="font-size: 1.5rem;"></i>
                    </div>
                    <h4 class="text-center mb-3" style="font-weight: 600; color: #333;">Immigration Consulting</h4>
                    <p class="text-center text-muted mb-4">Strategic guidance for complex immigration cases and scenarios.</p>
                    <div class="text-center">
                        <a href="{{ route('contact') }}" class="btn btn-primary" style="background: linear-gradient(135deg, #ffecd2, #fcb69f); color: #333; border: none; border-radius: 25px; padding: 10px 30px;">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
@keyframes icon-float {
    0% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-15px);
    }
    100% {
        transform: translateY(0);
    }
}
.service-card {
    transition: all 0.3s ease;
}
.service-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.15) !important;
}
.service-card .btn {
    transition: all 0.3s ease;
}
.service-card .btn:hover {
    transform: scale(1.05);
}
@media (max-width: 768px) {
    .service-section {
        padding: 60px 0 !important;
    }
    .service-card {
        margin-bottom: 30px;
    }
}
</style>


 <section class="tabbed-visa-section" style="position: relative; background-size: cover; background-position: center center; padding: 100px 0; background-color: rgba(0, 0, 0, 0.5);">

    <div class="container" style="position: relative; z-index: 1;">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center mb-5">
                <h2 class="text-white mb-3" style="font-size: 2.5rem; font-weight: 700;">Countries We Support</h2>
                <p class="text-white-50" style="font-size: 1.2rem;">Select a country to see the available visa types.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="nav nav-pills nav-justified" id="v-pills-tab" role="tablist" aria-orientation="horizontal" style="border-bottom: 1px solid rgba(255, 255, 255, 0.2);">
                    <button class="nav-link active" id="v-pills-canada-tab" data-bs-toggle="pill" data-bs-target="#v-pills-canada" type="button" role="tab" aria-controls="v-pills-canada" aria-selected="true" data-image="{{ asset('img/contory/canada.webp') }}" style="background-color: transparent; border-radius: 0; color: white; border-bottom: 2px solid white;">
                         Canada
                    </button>
                    <button class="nav-link" id="v-pills-australia-tab" data-bs-toggle="pill" data-bs-target="#v-pills-australia" type="button" role="tab" aria-controls="v-pills-australia" aria-selected="false" data-image="{{ asset('img/contory/australia.webp') }}" style="background-color: transparent; border-radius: 0; color: white;">
                         Australia
                    </button>
                    <button class="nav-link" id="v-pills-uk-tab" data-bs-toggle="pill" data-bs-target="#v-pills-uk" type="button" role="tab" aria-controls="v-pills-uk" aria-selected="false" data-image="{{ asset('img/contory/england.webp') }}" style="background-color: transparent; border-radius: 0; color: white;">
                         England
                    </button>
                    <button class="nav-link" id="v-pills-usa-tab" data-bs-toggle="pill" data-bs-target="#v-pills-usa" type="button" role="tab" aria-controls="v-pills-usa" aria-selected="false" data-image="{{ asset('img/contory/germany.webp') }}" style="background-color: transparent; border-radius: 0; color: white;">
                        Germany
                    </button>
                </div>
            </div>
            <div class="col-md-12">
                <div class="tab-content" id="v-pills-tabContent" style="background-color: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); border-radius: 10px; padding: 30px; margin-top: 20px;">
                    <div class="tab-pane fade show active" id="v-pills-canada" role="tabpanel" aria-labelledby="v-pills-canada-tab">
                        <h3 class="text-white mb-4">Canada Visa Types</h3>
                        <ul class="visa-type-list" style="list-style: none; padding: 0;">
                            <li><a href="#" style="color: white;">Tourist Visa</a></li>
                            <li><a href="#" style="color: white;">Working Holiday Visa</a></li>
                            <li><a href="#" style="color: white;">Temporary Work Visa</a></li>
                            <li><a href="#" style="color: white;">Student Visa</a></li>
                            <li><a href="#" style="color: white;">Family Visa</a></li>
                            <li><a href="#" style="color: white;">Protection Visa</a></li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="v-pills-australia" role="tabpanel" aria-labelledby="v-pills-australia-tab">
                        <h3 class="text-white mb-4">Australia Visa Types</h3>
                        <ul class="visa-type-list" style="list-style: none; padding: 0;">
                            <li><a href="#" style="color: white;">Tourist Visa</a></li>
                            <li><a href="#" style="color: white;">Working Holiday Visa</a></li>
                            <li><a href="#" style="color: white;">Temporary Work Visa</a></li>
                            <li><a href="#" style="color: white;">Student Visa</a></li>
                            <li><a href="#" style="color: white;">Family Visa</a></li>
                            <li><a href="#" style="color: white;">Protection Visa</a></li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="v-pills-uk" role="tabpanel" aria-labelledby="v-pills-uk-tab">
                        <h3 class="text-white mb-4">England Visa Types</h3>
                        <ul class="visa-type-list" style="list-style: none; padding: 0;">
                            <li><a href="#" style="color: white;">Tourist Visa</a></li>
                            <li><a href="#" style="color: white;">Working Holiday Visa</a></li>
                            <li><a href="#" style="color: white;">Temporary Work Visa</a></li>
                            <li><a href="#" style="color: white;">Student Visa</a></li>
                            <li><a href="#" style="color: white;">Family Visa</a></li>
                            <li><a href="#" style="color: white;">Protection Visa</a></li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="v-pills-usa" role="tabpanel" aria-labelledby="v-pills-usa-tab">
                        <h3 class="text-white mb-4">Germany Visa Types</h3>
                        <ul class="visa-type-list" style="list-style: none; padding: 0;">
                            <li><a href="#" style="color: white;">Tourist Visa</a></li>
                            <li><a href="#" style="color: white;">Working Holiday Visa</a></li>
                            <li><a href="#" style="color: white;">Temporary Work Visa</a></li>
                            <li><a href="#" style="color: white;">Student Visa</a></li>
                            <li><a href="#" style="color: white;">Family Visa</a></li>
                            <li><a href="#" style="color: white;">Protection Visa</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const tabbedSection = document.querySelector('.tabbed-visa-section');
        const tabButtons = document.querySelectorAll('#v-pills-tab button');

        tabButtons.forEach(button => {
            button.addEventListener('click', function () {
                const newImage = this.dataset.image;
                tabbedSection.style.backgroundImage = `url(${newImage})`;
            });
        });

        // Set the initial background image
        const initialImage = document.querySelector('#v-pills-tab .active').dataset.image;
        tabbedSection.style.backgroundImage = `url(${initialImage})`;
    });
</script>
</section>
<section style="padding: 80px 0;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center mb-5">
                <h2 class="mb-3" style="font-size: 2.5rem; font-weight: 700;">WHAT DO WE OFFER</h2>
                <p style="font-size: 1.2rem;">Empowering Your Journey, One Visa at a Time</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="service-card" style="text-align: center; padding: 30px; border-radius: 10px; background-color: white; box-shadow: 0 4px 15px rgba(0,0,0,0.1); transition: transform 0.3s;">
                    <div class="icon" style="font-size: 3rem; color: #ee9734ff; margin-bottom: 20px;">
                        <i class="fas fa-file-signature"></i>
                    </div>
                    <h4>Visa Application</h4>
                    <p>We handle all types of visa applications, ensuring a smooth and hassle-free process.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-card" style="text-align: center; padding: 30px; border-radius: 10px; background-color: white; box-shadow: 0 4px 15px rgba(0,0,0,0.1); transition: transform 0.3s;">
                    <div class="icon" style="font-size: 3rem; color: #ee9734ff; margin-bottom: 20px;">
                        <i class="fas fa-plane-departure"></i>
                    </div>
                    <h4>Flight Booking</h4>
                    <p>We provide the best flight booking options to match your travel plans and budget.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-card" style="text-align: center; padding: 30px; border-radius: 10px; background-color: white; box-shadow: 0 4px 15px rgba(0,0,0,0.1); transition: transform 0.3s;">
                    <div class="icon" style="font-size: 3rem; color: #ee9734ff; margin-bottom: 20px;">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h4>Online Consultation</h4>
                    <p>Our experts are available for online consultations to answer all your queries.</p>
                </div>
            </div>
        </div>
    </div>
</section>  

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
    initHeroSlider();
});

// Trigger initial check
animateOnScroll();



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
@endsection

@push('scripts')
<script>
    $(document).ready(function(){
        initHeroSlider();
        $('.card_slide_2_item').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    });
</script>
<style>
    .tab-pane.fade {
        transition: opacity 0.5s ease-in-out;
    }
</style>
@endpush