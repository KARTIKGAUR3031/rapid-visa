@extends('layouts.app')

@section('content')
<style>
    .hero-section {
        background: url('{{ asset('img/testimonial.png') }}') no-repeat center center;
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
        font-weight: 700;
        color: #ffffff;
        
    }
    .hero-section p {
        font-size: 1.5rem;
        color: #ffffff;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
    }
    .rating-section {
        background-color: #f8f9fa;
    }
    .rating-card {
        background: linear-gradient(135deg, #ffffff, #f8f9fa);
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 128, 0.1);
        padding: 20px;
        text-align: center;
        margin-bottom: 20px;
        border: 1px solid rgba(192, 192, 192, 0.2);
        transition: all 0.4s ease-in-out;
    }
    .rating-card img {
        height: 40px;
        margin-bottom: 15px;
    }
    .rating-card:hover {
        transform: scale(1.05);
        box-shadow: 0 15px 35px rgba(217, 119, 6, 0.3);
        filter: brightness(1.1);
    }
    .rating-stars {
        color: #f4b11c;
        margin-bottom: 10px;
    }
    .testimonial-card {
        background: linear-gradient(135deg, #ffffff, #f8f9fa);
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 128, 0.1);
        padding: 30px;
        margin: 15px;
        text-align: left;
        border: 1px solid rgba(192, 192, 192, 0.2);
        transition: all 0.4s ease-in-out;
    }
    .testimonial-card:hover {
        transform: scale(1.05);
        box-shadow: 0 15px 35px rgba(217, 119, 6, 0.3);
        filter: brightness(1.1);
    }
    .testimonial-card .testimonial-text {
        font-size: 1.1rem;
        line-height: 1.6;
        color: #555;
        margin-bottom: 20px;
    }
    .testimonial-card .testimonial-author {
        display: flex;
        align-items: center;
    }
    .testimonial-card .author-img {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        margin-right: 15px;
    }
    .testimonial-card .author-info h5 {
        margin: 0;
        font-size: 1.2rem;
        font-weight: bold;
        color: #333;
    }
    .testimonial-card .author-info p {
        margin: 0;
        color: #777;
    }
    .owl-carousel .owl-nav button.owl-prev,
    .owl-carousel .owl-nav button.owl-next {
        font-size: 2rem;
        color: #f4b11c;
    }
    .owl-carousel .owl-dots .owl-dot.active span {
        background: #f4b11c;
    }
</style>

<div class="hero-section">
    <div class="container">
        <h1 data-aos="fade-up" color="#f4b11c">⭐ What Our Clients Say</h1>
        <p data-aos="fade-up" data-aos-delay="200">Real Stories. Real Results. Real Trust.</p>
    </div>
</div>

<div class="rating-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="rating-card">
                    <img src="{{ asset('img/suplogo/google.png') }}" alt="Google">
                    <div class="rating-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p>4.5/5.0</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="rating-card">
                    <img src="{{ asset('img/suplogo/facebook.png') }}" alt="Facebook">
                    <div class="rating-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <p>4.0/5.0</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="rating-card">
                    <img src="{{ asset('img/suplogo/trustpilot.png') }}" alt="Trustpilot">
                    <div class="rating-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p>4.8/5.0</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="rating-card">
                    <img src="{{ asset('img/suplogo/tripadvisor.png') }}" alt="Tripadvisor">
                    <div class="rating-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <p>4.0/5.0</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="testimonials-section py-5" data-aos="fade-up">
    <div class="container">
        <div class="text-center mb-5">
            <h2>💬 Client Testimonials</h2>
            <p>At Rapid Visa, we take pride in helping individuals and families take life-changing steps toward a better future. But don’t just take our word for it—read what our clients have to say about their experience with our team.</p>
        </div>
        <div class="row">
            @foreach($testimonials as $testimonial)
            <div class="col-md-4 mb-4">
                <div class="testimonial-card h-100">
                    <p class="testimonial-text">"{{ $testimonial['quote'] }}"</p>
                    <div class="testimonial-author">
                        <img src="{{ asset($testimonial['image']) }}" alt="{{ $testimonial['name'] }}" class="author-img">
                        <div class="author-info">
                            <h5>{{ $testimonial['name'] }}</h5>
                            <p>{{ $testimonial['location'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection