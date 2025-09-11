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
        font-weight: bold;
    }
    .hero-section p {
        font-size: 1.5rem;
        color: black;
    }
    .testimonials-section {
        padding: 80px 0;
        background-color: #f8f9fa;
    }
    .testimonial-card {
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        padding: 30px;
        margin-bottom: 30px;
    }
    .testimonial-card .text-warning {
        color: #ECAB1D !important;
    }
</style>

<div class="hero-section">
    <div class="container">
        <h1>⭐ What Our Clients Say</h1>
        <p>Real Stories. Real Results. Real Trust.</p>
    </div>
</div>

<div class="testimonials-section">
    <div class="container">
        <div class="text-center mb-5">
            <p>At Rapid Visa, we take pride in helping individuals and families take life-changing steps toward a better future. But don’t just take our word for it—read what our clients have to say about their experience with our team.</p>
        </div>
        <h2>💬 Client Testimonials</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="testimonial-card">
                    <div class="text-warning my-2">
                        ★★★★★
                    </div>
                    <h5>"Professional, Transparent, and Supportive Throughout"</h5>
                    <p class="card-text fst-italic">"From the very first consultation, I knew I was in good hands. The team was clear about the process, the requirements, and what to expect. They handled everything with professionalism and kept me informed every step of the way. I received my visa faster than I anticipated, and I couldn’t be more grateful!"</p>
                    <p class="mt-3 mb-0"><strong>— Ahmed K., UAE to Canada</strong></p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="testimonial-card">
                    <div class="text-warning my-2">
                        ★★★★★
                    </div>
                    <h5>"I Had Almost Given Up—Then I Found Them"</h5>
                    <p class="card-text fst-italic">"After two failed attempts with other agencies, I was hesitant to try again. But Rapid Visa was different. They listened carefully, reviewed my case thoroughly, and built a strategy that worked. Thanks to them, I’ve finally started a new chapter in my life abroad."</p>
                    <p class="mt-3 mb-0"><strong>— Nina D., India to Australia</strong></p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="testimonial-card">
                    <div class="text-warning my-2">
                        ★★★★★
                    </div>
                    <h5>"Exceptional Service and Genuine Care"</h5>
                    <p class="card-text fst-italic">"It wasn’t just about paperwork for them—they actually cared about my journey. The team responded to every question promptly and explained everything clearly. They even supported me after I arrived in my new country. That level of service is rare."</p>
                    <p class="mt-3 mb-0"><strong>— Michael T., South Africa to UK</strong></p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="testimonial-card">
                    <div class="text-warning my-2">
                        ★★★★★
                    </div>
                    <h5>"Highly Recommend for Stress-Free Immigration Support"</h5>
                    <p class="card-text fst-italic">"Their knowledge of immigration policies is top-notch. They made a complicated process feel easy and stress-free. Everything was handled professionally, and I felt supported the entire time. Thank you for helping me achieve my dream."</p>
                    <p class="mt-3 mb-0"><strong>— Leila M., Morocco to Germany</strong></p>
                </div>
            </div>
        </div>
        <div class="text-center mt-5">
            <h3>🧭 Your Journey Could Be Next</h3>
            <p>We’ve helped hundreds of clients from around the world successfully move forward with their immigration goals. Whether you're just starting out or have been struggling with the process, we're here to guide you.</p>
            <p>
                <strong>Ready to start your journey?</strong>
                <a href="{{ route('contact') }}">Contact us</a> or <a href="#">Book a free consultation</a> today.
            </p>
        </div>
    </div>
</div>
@endsection