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

    .country-gallery {
        display: flex;
        height: 60vh;
        width: 100%;
        overflow: hidden;
    }

    .country-gallery-item {
        flex: 1;
        height: 100%;
        background-size: cover;
        background-position: center;
        transition: flex 0.8s cubic-bezier(0.25, 0.8, 0.25, 1);
        cursor: pointer;
        position: relative;
        overflow: hidden;
    }

    .country-gallery-item::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .country-gallery-text {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        padding: 20px;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.8), transparent);
        color: #fff;
        transform: translateY(100%);
        transition: transform 0.5s ease-in-out;
        z-index: 2;
    }

    .country-gallery-item.active .country-gallery-text {
        transform: translateY(0);
    }

    .country-gallery-text h3 {
        font-size: 1.8rem;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .country-gallery-text p {
        font-size: 1.1rem;
    }

    .country-gallery-item.active {
        flex: 5;
    }
</style>

<div class="hero-slider owl-carousel">
        <div class="hero-item" data-bg="{{asset('img/slider/slider3.png')}}">
            <div class="hero-loading"></div>
            <div class="container">
                <div class="hero-content">
                    <h1 class="hero-title animate__animated animate__fadeInUp">Your Trusted Immigration and Visa Consultant</h1>
                    <p class="hero-subtitle animate__animated animate__fadeInUp">We make the visa process faster, easier, and stress-free.</p>
                    <a href="{{ route('contact') }}" class="btn-cta animate__animated animate__fadeInUp">Get a Free Consultation</a>
                </div>
            </div>
        </div>
        <div class="hero-item" data-bg="{{asset('img/slider/slider4.png')}}">
            <div class="hero-loading"></div>
            <div class="container">
                <div class="hero-content">
                    <h1 class="hero-title animate__animated animate__fadeInUp">Expert Guidance for Your Visa Application</h1>
                    <p class="hero-subtitle animate__animated animate__fadeInUp">Navigating the complexities of visa applications with ease.</p>
                    <a href="{{ route('visas') }}" class="btn-cta animate__animated animate__fadeInUp">Explore Visa Options</a>
                </div>
            </div>
        </div>
        <div class="hero-item" data-bg="{{asset('img/slider/slider5.png')}}">
            <div class="hero-loading"></div>
            <div class="container">
                <div class="hero-content">
                    <h1 class="hero-title animate__animated animate__fadeInUp">Your Gateway to Global Opportunities</h1>
                    <p class="hero-subtitle animate__animated animate__fadeInUp">Unlock your potential with our expert visa services.</p>
                    <a href="{{ route('about') }}" class="btn-cta animate__animated animate__fadeInUp">Learn More About Us</a>
                </div>
            </div>
        </div>
        <div class="hero-item" data-bg="{{asset('img/slider/slider6.webp')}}">
            <div class="hero-loading"></div>
            <div class="container">
                <div class="hero-content">
                    <h1 class="hero-title animate__animated animate__fadeInUp">Begin Your Journey with Confidence</h1>
                    <p class="hero-subtitle animate__animated animate__fadeInUp">We are committed to helping you achieve your travel and immigration goals.</p>
                    <a href="{{ route('testimonials') }}" class="btn-cta animate__animated animate__fadeInUp">See Client Stories</a>
                </div>
            </div>
        </div>
        <div class="hero-item" data-bg="{{asset('img/slider/slider1.webp')}}">
            <div class="hero-loading"></div>
            <div class="container">
                <div class="hero-content">
                    <h1 class="hero-title animate__animated animate__fadeInUp">Your Trusted Immigration and Visa Consultant</h1>
                    <p class="hero-subtitle animate__animated animate__fadeInUp">We make the visa process faster, easier, and stress-free.</p>
                    <a href="{{ route('contact') }}" class="btn-cta animate__animated animate__fadeInUp">Get a Free Consultation</a>
                </div>
            </div>
        </div>
        <div class="hero-item" data-bg="{{asset('img/slider/slider2.png')}}">
            <div class="hero-loading"></div>
            <div class="container">
                <div class="hero-content">
                    <h1 class="hero-title animate__animated animate__fadeInUp">Expert Guidance for Your Visa Application</h1>
                    <p class="hero-subtitle animate__animated animate__fadeInUp">Navigating the complexities of visa applications with ease.</p>
                    <a href="{{ route('visas') }}" class="btn-cta animate__animated animate__fadeInUp">Explore Visa Options</a>
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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const animatedElements = document.querySelectorAll('.animate-on-scroll');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const animation = entry.target.getAttribute('data-animation');
                    entry.target.classList.add('animate__animated', animation);
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1
        });

        animatedElements.forEach(element => {
            observer.observe(element);
        });

        function initHeroSlider() {
            const heroSlider = $('.hero-slider');
            heroSlider.owlCarousel({
                items: 1,
                loop: true,
                autoplay: true,
                autoplayTimeout: 5000,
                smartSpeed: 1000,
                dots: true,
                nav: false,
                onInitialized: function(event) {
                    const currentItem = $(event.target).find('.owl-item.active .hero-item');
                    const bg = currentItem.data('bg');
                    currentItem.css('--bg-image', `url(${bg})`);
                    currentItem.find('.hero-loading').hide();
                },
                onTranslated: function(event) {
                    const allItems = $(event.target).find('.owl-item .hero-item');
                    allItems.find('.hero-title, .hero-subtitle, .btn-cta').removeClass('animate__animated animate__fadeInUp');

                    const currentItem = $(event.target).find('.owl-item.active .hero-item');
                    const bg = currentItem.data('bg');
                    currentItem.css('--bg-image', `url(${bg})`);
                    currentItem.find('.hero-loading').hide();

                    setTimeout(() => {
                        currentItem.find('.hero-title, .hero-subtitle, .btn-cta').addClass('animate__animated animate__fadeInUp');
                    }, 200);
                }
            });
        }

        initHeroSlider();

        const countryGalleryItems = document.querySelectorAll('.country-gallery-item');
        if (countryGalleryItems.length > 0) {
            countryGalleryItems[0].classList.add('active');
            countryGalleryItems.forEach(item => {
                item.addEventListener('click', () => {
                    countryGalleryItems.forEach(innerItem => {
                        innerItem.classList.remove('active');
                    });
                    item.classList.add('active');
                });
            });
        }
    });
</script>
<section class="country-gallery-section" style="padding-top: 100px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center mb-5">
                <h2 class="mb-3" style="font-size: 2.5rem; font-weight: 700;">Countries We Support</h2>
            </div>
        </div>
    </div>
    <div class="country-gallery">
        <div class="country-gallery-item" style="background-image: url('{{asset('img/country/canada.webp')}}');">
            <div class="country-gallery-text">
                <h3>Canada</h3>
                <p>Your gateway to a new life in the Great White North.</p>
            </div>
        </div>
        <div class="country-gallery-item" style="background-image: url('{{asset('img/country/australia.webp')}}');">
            <div class="country-gallery-text">
                <h3>Australia</h3>
                <p>Discover the opportunities waiting for you down under.</p>
            </div>
        </div>
        <div class="country-gallery-item" style="background-image: url('{{asset('img/country/england.webp')}}');">
            <div class="country-gallery-text">
                <h3>United Kingdom</h3>
                <p>Experience the rich history and vibrant culture of the UK.</p>
            </div>
        </div>
        <div class="country-gallery-item" style="background-image: url('{{asset('img/country/germany.webp')}}');">
            <div class="country-gallery-text">
                <h3>Germany</h3>
                <p>Build your future in the heart of Europe.</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<div class="service-section-new" style="padding: 80px 0; background: #fff;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center mb-5">
                <h2 class="mb-4" style="font-size: 2.8rem; font-weight: 800; color: #333;">Our Services</h2>
                <p class="text-muted" style="font-size: 1.1rem; max-width: 600px; margin: 0 auto;">We offer a wide range of immigration services to help you achieve your dreams.</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="service-card-new">
                    <div class="service-card-new-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <h4 class="service-card-new-title">Work Visa</h4>
                    <p class="service-card-new-description">Professional work visa solutions for global opportunities with expert guidance.</p>
                    <a href="{{ route('visas') }}" class="service-card-new-link">Read More</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-card-new">
                    <div class="service-card-new-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h4 class="service-card-new-title">Student Visa</h4>
                    <p class="service-card-new-description">Comprehensive student visa support for academic excellence worldwide.</p>
                    <a href="{{ route('visas') }}" class="service-card-new-link">Read More</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-card-new">
                    <div class="service-card-new-icon">
                        <i class="fas fa-id-card"></i>
                    </div>
                    <h4 class="service-card-new-title">Permanent Residency</h4>
                    <p class="service-card-new-description">Achieve your permanent residency dreams with expert green card guidance.</p>
                    <a href="{{ route('visas') }}" class="service-card-new-link">Read More</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-card-new">
                    <div class="service-card-new-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h4 class="service-card-new-title">Family Immigration</h4>
                    <p class="service-card-new-description">Reunite with your loved ones through expert family immigration services.</p>
                    <a href="{{ route('visas') }}" class="service-card-new-link">Read More</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-card-new">
                    <div class="service-card-new-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h4 class="service-card-new-title">Business & Investor</h4>
                    <p class="service-card-new-description">Strategic business and investor visa solutions for expansion.</p>
                    <a href="{{ route('contact') }}" class="service-card-new-link">Read More</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-card-new">
                    <div class="service-card-new-icon">
                        <i class="fas fa-chess-knight"></i>
                    </div>
                    <h4 class="service-card-new-title">Immigration Consulting</h4>
                    <p class="service-card-new-description">Strategic guidance for complex immigration cases and scenarios.</p>
                    <a href="{{ route('contact') }}" class="service-card-new-link">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.service-card-new {
    background-color: #f9f9f9;
    border-radius: 12px;
    padding: 40px;
    text-align: center;
    transition: all 0.3s ease;
    height: 100%;
    border: 1px solid #e8e8e8;
}

.service-card-new:hover {
    transform: translateY(-10px);
    background-color: #007bff;
    color: #fff;
}

.service-card-new:hover .service-card-new-icon i {
    color: #fff;
}

.service-card-new:hover .service-card-new-title,
.service-card-new:hover .service-card-new-description,
.service-card-new:hover .service-card-new-link {
    color: #fff;
}

.service-card-new-icon {
    font-size: 3rem;
    color: #007bff;
    margin-bottom: 20px;
    transition: color 0.3s ease;
}

.service-card-new-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: #333;
    margin-bottom: 15px;
    transition: color 0.3s ease;
}

.service-card-new-description {
    font-size: 1rem;
    color: #666;
    margin-bottom: 20px;
    transition: color 0.3s ease;
}

.service-card-new-link {
    font-size: 1rem;
    font-weight: 600;
    color: #007bff;
    text-decoration: none;
    transition: color 0.3s ease;
}

@media (max-width: 768px) {
    .service-section-new {
        padding: 60px 0 !important;
    }
    .service-card-modern {
        margin-bottom: 30px;
    }
}
</style>
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