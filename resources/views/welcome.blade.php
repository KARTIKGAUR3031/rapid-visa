@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="hero-content">
                        <h1>Fast & Easy Visa Application</h1>
                        <p>We simplify the visa application process, making it faster and easier for you to get your visa.
                        </p>
                        <a href="{{ route('visa-application.create') }}" class="btn btn-primary">Apply Now</a>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="hero-img">
                        <img src="{{ asset('img/hero-img.png') }}" alt="Hero Image">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center" data-aos="fade-up">
                    <div class="section-title">
                        <h2>Our Services</h2>
                        <p>We offer a wide range of visa services to help you with your application.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fas fa-passport"></i>
                        </div>
                        <h3>Visa Consultation</h3>
                        <p>Our experts provide you with the best advice and guidance for your visa application.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fas fa-file-alt"></i>
                        </div>
                        <h3>Document Preparation</h3>
                        <p>We help you prepare and review all the necessary documents for your application.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <h3>Application Submission</h3>
                        <p>We submit your application on your behalf, ensuring everything is in order.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="about-img">
                        <img src="{{ asset('img/about-img.png') }}" alt="About Us Image">
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="about-content">
                        <h2>About Us</h2>
                        <p>We are a team of experienced visa consultants dedicated to helping you with your visa needs.
                        </p>
                        <p>Our mission is to provide a seamless and hassle-free visa application experience for our
                            clients.</p>
                        <a href="{{ route('contact') }}" class="btn btn-secondary">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center" data-aos="fade-up">
                    <div class="section-title">
                        <h2>What Our Clients Say</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel testimonials-carousel">
                        <div class="testimonial-item" data-aos="fade-up">
                            <p>
                                <i class="fas fa-quote-left"></i>
                                The team at Rapid Visa was incredibly helpful and professional. They made the visa
                                process so easy for me.
                                <i class="fas fa-quote-right"></i>
                            </p>
                            <div class="testimonial-author">
                                <img src="{{ asset('img/client-1.jpg') }}" alt="Client 1">
                                <h4>John Doe</h4>
                            </div>
                        </div>
                        <div class="testimonial-item" data-aos="fade-up" data-aos-delay="100">
                            <p>
                                <i class="fas fa-quote-left"></i>
                                I highly recommend Rapid Visa for their excellent service and support. They were always
                                there to answer my questions.
                                <i class="fas fa-quote-right"></i>
                            </p>
                            <div class="testimonial-author">
                                <img src="{{ asset('img/client-2.jpg') }}" alt="Client 2">
                                <h4>Jane Smith</h4>
                            </div>
                        </div>
                        <div class="testimonial-item" data-aos="fade-up" data-aos-delay="200">
                            <p>
                                <i class="fas fa-quote-left"></i>
                                Thanks to Rapid Visa, I got my visa in record time. I couldn't have done it without
                                them.
                                <i class="fas fa-quote-right"></i>
                            </p>
                            <div class="testimonial-author">
                                <img src="{{ asset('img/client-3.jpg') }}" alt="Client 3">
                                <h4>Peter Jones</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="cta" class="cta-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center" data-aos="fade-up">
                    <div class="cta-content">
                        <h2>Ready to Get Started?</h2>
                        <p>Apply for your visa today and let us handle the rest.</p>
                        <a href="{{ route('visa-application.create') }}" class="btn btn-primary">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection