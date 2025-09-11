@extends('layouts.app')

@section('content')
<style>
    .hero-section {
        background: url('{{ asset('img/contactus.png') }}') no-repeat center center;
        background-size: cover;
        color: white;
        padding: 100px 0;
        text-align: center;
        min-height: 500px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .hero-section h1 {
        font-size: 3.5rem;
        font-weight: bold;
    }
    .hero-section p {
        font-size: 1.5rem;
        color: black;
    }
    .contact-form-section {
        padding: 80px 0;
    }
    .contact-info-section {
        padding: 80px 0;
        background-color: #f8f9fa;
    }
    .contact-info-item {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
        padding: 20px;
        border-radius: 10px;
        transition: all 0.3s ease;
        background-color: #fff;
        border: 1px solid #e9ecef;
    }
    .contact-info-item:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    .contact-info-item .icon {
        font-size: 2rem;
        color: #ECAB1D;
        margin-right: 20px;
    }
</style>

<div class="hero-section">
    <div class="container">
        <h1>Contact Us</h1>
        <p>We're here to help. Reach out to us anytime.</p>
    </div>
</div>

<div class="contact-form-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="text-center mb-5">
                    <h2>Send Us a Message</h2>
                    <p>Have a question or need support? Fill out the form below and we'll get back to you as soon as possible.</p>
                </div>
                <form>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="col-md-6 mb-3">
                            <input type="email" class="form-control" placeholder="Your Email">
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Subject">
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" rows="5" placeholder="Your Message"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('img/img_1.webp') }}" alt="Contact Form Image" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<div class="contact-info-section">
    <div class="container">
        <div class="text-center mb-5">
            <h2>Contact Information</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="contact-info-item h-100">
                    <div class="icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div>
                        <h4>Address</h4>
                        <p>Office 603, 06th Floor Umm Al Quwain Bank Building, Bank Street, Bur Dubai. Dubai, P.O.BOX : 243173, Dubai, UAE</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="contact-info-item h-100">
                    <div class="icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div>
                        <h4>Phone</h4>
                        <p>+971-56-939-8472<br>+971-4-265-4627</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="contact-info-item h-100">
                    <div class="icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div>
                        <h4>Email</h4>
                        <p>info@wahegurutravels.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid p-0">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28868.785695267783!2d55.296281666052984!3d25.25045438655568!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f433ac0c101d1%3A0xae275090c62372a3!2sNational%20Bank%20of%20Umm%20Al%20Quwain!5e0!3m2!1sen!2sin!4v1757419848701!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
@endsection