@extends('layouts.app')

@section('content')
<style>
    .service-item .icon,
    .feature-item .icon,
    .program-item .icon,
    .news-item .read-more {
        color: #ECAB1D !important;
    }

    .visa-item {
        background-color: #fff;
        padding: 1rem;
        border-radius: 0.5rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        text-align: center;
        margin: 1rem 0.5rem;
        transition: all 0.3s ease-in-out;
        cursor: pointer;
    }

    .visa-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }

    .hero-section h1 {
        display: inline-block;
        overflow: hidden;
        white-space: nowrap;
        margin: 0;
        animation: typing 3.5s steps(31, end) infinite;
    }

    @keyframes typing {
      from { width: 0 }
      to { width: 100% }
    }
</style>


<div class="hero-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <h1>Visa With Rapid Visa <i class="fas fa-plane-departure"></i></h1>
                <p>Discover a world of possibilities with our expert visa and immigration services.</p>
            </div>
        </div>
    </div>
</div>

<section class="visa-carousel-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="visa-carousel owl-carousel">
                    <a href="{{ route('visa.show', ['country' => 'United States', 'image' => 'https://plus.unsplash.com/premium_photo-1674591172747-2c1d461d7b68?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8VVNBJTIwRkxBR3xlbnwwfHwwfHx8MA%3D%3D']) }}" class="visa-item" style="text-decoration: none;">
                        <div class="flag">
                            <img src="https://plus.unsplash.com/premium_photo-1674591172747-2c1d461d7b68?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8VVNBJTIwRkxBR3xlbnwwfHwwfHx8MA%3D%3D" alt="flag">
                        </div>
                        <h4>United States</h4>
                    </a>
                    <a href="{{ route('visa.show', ['country' => 'Australia', 'image' => 'https://plus.unsplash.com/premium_photo-1675865393568-4bbf930ac1fb?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8QVVTVFJBTElBJTIwRkxBR3xlbnwwfHwwfHx8MA%3D%3D']) }}" class="visa-item" style="text-decoration: none;">
                        <div class="flag">
                            <img src="https://plus.unsplash.com/premium_photo-1675865393568-4bbf930ac1fb?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8QVVTVFJBTElBJTIwRkxBR3xlbnwwfHwwfHx8MA%3D%3D" alt="flag">
                        </div>
                        <h4>Australia</h4>
                    </a>
                    <a href="{{ route('visa.show', ['country' => 'South Africa', 'image' => 'https://images.unsplash.com/photo-1679480129388-1a5c054bac10?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8U09VVEglMjBBRlJJQ0ElMjBGTEFHfGVufDB8fDB8fHww']) }}" class="visa-item" style="text-decoration: none;">
                        <div class="flag">
                            <img src="https://images.unsplash.com/photo-1679480129388-1a5c054bac10?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8U09VVEglMjBBRlJJQ0ElMjBGTEFHfGVufDB8fDB8fHww" alt="flag">
                        </div>
                        <h4>South Africa</h4>
                    </a>
                    <a href="{{ route('visa.show', ['country' => 'United Kingdom', 'image' => 'https://images.unsplash.com/photo-1494419470281-65c2b001a42b?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8dWslMjBGTEFHfGVufDB8fDB8fHww']) }}" class="visa-item" style="text-decoration: none;">
                        <div class="flag">
                            <img src="https://images.unsplash.com/photo-1494419470281-65c2b001a42b?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8dWslMjBGTEFHfGVufDB8fDB8fHww" alt="flag">
                        </div>
                        <h4>United Kingdom</h4>
                    </a>
                    <a href="{{ route('visa.show', ['country' => 'Canada', 'image' => 'https://plus.unsplash.com/premium_photo-1675865393910-588d7e73657f?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8Q0FOQURBJTIwRkxBR3xlbnwwfHwwfHx8MA%3D%3D']) }}" class="visa-item" style="text-decoration: none;">
                        <div class="flag">
                            <img src="https://plus.unsplash.com/premium_photo-1675865393910-588d7e73657f?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8Q0FOQURBJTIwRkxBR3xlbnwwfHwwfHx8MA%3D%3D" alt="flag">
                        </div>
                        <h4>Canada</h4>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


    <section class="services-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>Services We are Offering</h2>
                        <br> </br>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="icon"><i class="fas fa-globe"></i></div>
                        <h4>Visa Application</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="icon"><i class="fas fa-plane"></i></div>
                        <h4>Flight Bookings</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="icon"><i class="fas fa-building"></i></div>
                        <h4>Visa Consultant</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="why-choose-us-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h2>Why Choose Us?</h2>
                        <p>We have a tendency to believe that smart looking websites are build on a solid framework and that is why we have invested our time and skill in the creation of the Rapid Visa.</p>
                    </div>
                    <div class="feature-item">
                        <div class="icon"><i class="fas fa-check"></i></div>
                        <div class="content">
                            <h4>Fast & Easy Application</h4>
                            <p>We have a tendency to believe that smart looking websites are build on a solid framework and that is why we have invested our time and skill in the creation of the Rapid Visa.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="icon"><i class="fas fa-check"></i></div>
                        <div class="content">
                            <h4>24/7 Customer Support</h4>
                            <p>We have a tendency to believe that smart looking websites are build on a solid framework and that is why we have invested our time and skill in the creation of the Rapid Visa.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="icon"><i class="fas fa-check"></i></div>
                        <div class="content">
                            <h4>Secure & Confidential</h4>
                            <p>We have a tendency to believe that smart looking websites are build on a solid framework and that is why we have invested our time and skill in the creation of the Rapid Visa.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('img/image-01.png') }}" alt="Why Choose Us" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <section class="immigration-programs-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>Our Immigration Programs</h2>
                        <p>We are a team of experienced immigration consultants who are dedicated to helping you achieve your immigration goals. We offer a variety of immigration programs to suit your needs.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="program-item">
                        <div class="icon"><i class="fas fa-passport"></i></div>
                        <h4>Skilled Worker Program</h4>
                        <p>This program is for skilled workers who want to immigrate to Canada permanently. You must have work experience in a skilled occupation and meet other eligibility requirements.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="program-item">
                        <div class="icon"><i class="fas fa-briefcase"></i></div>
                        <h4>Business Immigration</h4>
                        <p>This program is for experienced business people who want to establish or purchase a business in Canada. You must have a viable business plan and meet other eligibility requirements.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="program-item">
                        <div class="icon"><i class="fas fa-graduation-cap"></i></div>
                        <h4>Student Visa</h4>
                        <p>This program is for international students who want to study in Canada. You must be accepted to a Canadian educational institution and meet other eligibility requirements.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>    <section class="testimonials-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>What Our Clients Say</h2>
                        <p>We are a team of experienced immigration consultants who are dedicated to helping you achieve your immigration goals. We offer a variety of immigration programs to suit your needs.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="testimonial-item">
                        <div class="testimonial-content">
                            <p>"I am very happy with the service I received from Rapid Visa. They were very helpful and professional. I would recommend them to anyone who is looking for an immigration consultant."</p>
                        </div>
                        <div class="testimonial-author">
                            <img src="{{ asset('img/images-removebg-preview.png') }}" alt="Author">
                            <div class="author-info">
                                <h4>John Doe</h4>
                                <span>CEO, ABC Company</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="testimonial-item">
                        <div class="testimonial-content">
                            <p>"I am very happy with the service I received from Rapid Visa. They were very helpful and professional. I would recommend them to anyone who is looking for an immigration consultant."</p>
                        </div>
                        <div class="testimonial-author">
                            <img src="{{ asset('img/images-removebg-preview.png') }}" alt="Author">
                            <div class="author-info">
                                <h4>Jane Doe</h4>
                                <span>CEO, XYZ Company</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="testimonial-item">
                        <div class="testimonial-content">
                            <p>"I am very happy with the service I received from Rapid Visa. They were very helpful and professional. I would recommend them to anyone who is looking for an immigration consultant."</p>
                        </div>
                        <div class="testimonial-author">
                            <img src="{{ asset('img/images-removebg-preview.png') }}" alt="Author">
                            <div class="author-info">
                                <h4>Peter Jones</h4>
                                <span>CEO, 123 Company</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    

@endsection