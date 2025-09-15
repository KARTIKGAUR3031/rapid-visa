@extends('layouts.app')

@section('content')
<style>
    .text-primary {
        color: #ee9734ff !important;
    }
    .btn-primary {
        background: #ee9734ff !important;
        border: none !important;
        transition: all 0.3s ease;
    }
    .btn-primary:hover {
        background: #f59e0b !important;
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(217, 119, 6, 0.3);
    }
    .hero-section {
        background: url('{{ request('image') }}') no-repeat center center;
        background-size: cover;
        background-blend-mode: overlay;
        height: 40vh;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }
    .hero-section h1 {
        font-size: 4rem;
        font-weight: bold;
    }
    .info-card {
        border: none;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        margin-bottom: 2rem;
        overflow: hidden;
    }
    .info-card .card-header {
        background: #ee9734ff;
        color: white;
        border: none;
        font-weight: bold;
        font-size: 1.25rem;
    }
    .info-card .card-body {
        padding: 2rem;
    }
    .list-group-item {
        border: none;
        padding-left: 0;
    }
    .list-group-item i {
        color: #ee9734ff;
        margin-right: 10px;
    }
    .sticky-card {
        position: sticky;
        top: 120px;
    }
    .modal-header {
        background-color: #ee9734ff;
        color: white;
    }
    .modal-title {
        width: 100%;
        text-align: center;
        color: white;
    }
    .timeline {
        position: relative;
        padding-left: 0;
        border-left: 2px solid #ee9734ff;
        margin-left: 20px;
    }
    .timeline-item {
        position: relative;
        margin-bottom: 2rem;
    }
    .timeline-icon {
        position: absolute;
        left: -20px;
        top: 0;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: #ee9734ff;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: transform 0.3s ease;
    }

    .timeline-icon img,
    .info-card .card-body .d-flex img,
    .info-card .card-body .row .col-md-4 img {
        width: 32px !important;
        height: 32px !important;
    }
    .timeline-item:hover .timeline-icon {
        transform: scale(1.2);
    }
    .timeline-content {
        padding-left: 40px;
    }
    .icon-hover {
        transition: transform 0.3s ease;
    }
    .icon-hover:hover {
        transform: scale(1.2);
    }
    
    .apply-button {
        background: linear-gradient(135deg, #ee9734ff, #f59e0b) !important;
        border: none !important;
        color: white !important;
        font-weight: 600;
        padding: 12px 24px;
        font-size: 1rem;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(217, 119, 6, 0.3);
    }
    
    .apply-button:hover {
        background: linear-gradient(135deg, #f59e0b, #ee9734ff) !important;
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(217, 119, 6, 0.4);
        color: white !important;
    }
    
    .apply-button:active {
        transform: translateY(0);
        box-shadow: 0 4px 15px rgba(217, 119, 6, 0.3);
    }
</style>

<div class="container my-5">
    <div class="hero-section mb-4" style="border-radius: 10px;">
        <h1 data-aos="fade-up">Visa for {{ $country }}</h1>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <div class="info-card" data-aos="fade-up" data-aos-delay="100">
                <div class="card-header">Why Apply Online with Us?</div>
                <div class="card-body">
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-icon"><img src="{{ asset('img/icons/fast-unscreen.gif') }}" alt="Fast & Easy"></div>
                            <div class="timeline-content">
                                <h6 class="mb-1">Fast & Easy</h6>
                                <p class="mb-0 text-muted">Simple application process that takes minutes to complete.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-icon"><img src="{{ asset('img/icons/shield-unscreen.gif') }}" alt="Secure & Safe" style="width: 24px; height: 24px;"></div>
                            <div class="timeline-content">
                                <h6 class="mb-1">Secure & Safe</h6>
                                <p class="mb-0 text-muted">Your data is protected with industry-leading security.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-icon"><img src="{{ asset('img/icons/support-unscreen.gif') }}" alt="24/7 Support" style="width: 24px; height: 24px;"></div>
                            <div class="timeline-content">
                                <h6 class="mb-1">24/7 Support</h6>
                                <p class="mb-0 text-muted">Our team is here to help you anytime, day or night.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="info-card" data-aos="fade-up" data-aos-delay="150">
                <div class="card-header">{{ $country }} Visa Information</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('img/icons/task-unscreen.gif') }}" alt="Visa Type" style="width: 24px; height: 24px; margin-right: 10px;">
                                <div>
                                    <h6 class="mb-0">Visa Type</h6>
                                    <p class="mb-0 text-muted">E-Visa</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('img/icons/calendar-unscreen.gif') }}" alt="Length of Stay" style="width: 24px; height: 24px; margin-right: 10px;">
                                <div>
                                    <h6 class="mb-0">Length of Stay</h6>
                                    <p class="mb-0 text-muted">30 days</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('img/icons/validity-unscreen.gif') }}" alt="Validity" style="width: 24px; height: 24px; margin-right: 10px;">
                                <div>
                                    <h6 class="mb-0">Validity</h6>
                                    <p class="mb-0 text-muted">60 days</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('img/icons/entry-unscreen.gif') }}" alt="Entry" style="width: 24px; height: 24px; margin-right: 10px;">
                                <div>
                                    <h6 class="mb-0">Entry</h6>
                                    <p class="mb-0 text-muted">Single</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('img/icons/wifi-unscreen.gif') }}" alt="Method" style="width: 24px; height: 24px; margin-right: 10px;">
                                <div>
                                    <h6 class="mb-0">Method</h6>
                                    <p class="mb-0 text-muted">Paperless</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="info-card" data-aos="fade-up" data-aos-delay="200">
                <div class="card-header">Visa-free travel</div>
                <div class="card-body">
                    <p>Citizens of the following countries can enter {{ $country }} without a visa:</p>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-flag text-primary me-2 icon-hover"></i> USA</li>
                                <li class="mb-2"><i class="fas fa-flag text-primary me-2 icon-hover"></i> UK</li>
                                <li class="mb-2"><i class="fas fa-flag text-primary me-2 icon-hover"></i> Canada</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-flag text-primary me-2 icon-hover"></i> Australia</li>
                                <li class="mb-2"><i class="fas fa-flag text-primary me-2 icon-hover"></i> Japan</li>
                                <li class="mb-2"><i class="fas fa-flag text-primary me-2 icon-hover"></i> Schengen Area</li>
                            </ul>
                        </div>
                    </div>
                    <p class="mt-2"><small>Check the full list to see if you qualify.</small></p>
                </div>
            </div>

            <div class="info-card" data-aos="fade-up" data-aos-delay="250">
                <div class="card-header">Visa requirements</div>
                <div class="card-body">
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-icon"><img src="{{ asset('img/icons/passport-unscreen.gif') }}" alt="Valid Passport" style="width: 24px; height: 24px;"></div>
                            <div class="timeline-content">
                                <h6 class="mb-1">Valid Passport</h6>
                                <p class="mb-0 text-muted">Your passport must be valid for at least 6 months.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-icon"><img src="{{ asset('img/icons/photo-unscreen.gif') }}" alt="Photo" style="width: 24px; height: 24px;"></div>
                            <div class="timeline-content">
                                <h6 class="mb-1">Photo</h6>
                                <p class="mb-0 text-muted">A recent passport-sized photo is required.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="info-card" data-aos="fade-up" data-aos-delay="300">
                <div class="card-header">How to apply</div>
                <div class="card-body">
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-icon"><img src="{{ asset('img/icons/start-unscreen.gif') }}" alt="Start Application" style="width: 24px; height: 24px;"></div>
                            <div class="timeline-content">
                                <h6>1. Start Application</h6>
                                <p>Click the "Start Application" button to fill out the online form.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-icon"><img src="{{ asset('img/icons/account-unscreen.gif') }}" alt="Create Account" style="width: 24px; height: 24px;"></div>
                            <div class="timeline-content">
                                <h6>2. Create an Account</h6>
                                <p>Sign up and verify your email.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-icon"><img src="{{ asset('img/icons/visa-unscreen.gif') }}" alt="Select Visa Type and Country" style="width: 24px; height: 24px;"></div>
                            <div class="timeline-content">
                                <h6>3. Select Visa Type and Country</h6>
                                <p>Choose the visa type and destination country that matches your travel purpose.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-icon"><img src="{{ asset('img/icons/form-unscreen.gif') }}" alt="Fill Application Form" style="width: 24px; height: 24px;"></div>
                            <div class="timeline-content">
                                <h6>4. Fill Application Form</h6>
                                <p>Enter personal details, travel plans, and passport information.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-icon"><img src="{{ asset('img/icons/upload-unscreen.gif') }}" alt="Upload Documents" style="width: 24px; height: 24px;"></div>
                            <div class="timeline-content">
                                <h6>5. Upload Documents</h6>
                                <p>Attach scanned copies of your passport, flight tickets, and accommodations.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-icon"><img src="{{ asset('img/icons/credit-card-unscreen.gif') }}" alt="Pay Visa Fee" style="width: 24px; height: 24px;"></div>
                            <div class="timeline-content">
                                <h6>6. Pay Visa Fee</h6>
                                <p>Complete payment securely online.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-icon"><img src="{{ asset('img/icons/track-unscreen.gif') }}" alt="Track Your Application" style="width: 24px; height: 24px;"></div>
                            <div class="timeline-content">
                                <h6>7. Track Your Application</h6>
                                <p>Receive real-time updates until your visa is approved.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-icon"><img src="{{ asset('img/icons/email-unscreen.gif') }}" alt="Receive a Visa by Email" style="width: 24px; height: 24px;"></div>
                            <div class="timeline-content">
                                <h6>8. Receive a Visa by Email</h6>
                                <p>Download, print, and travel hassle-free.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="info-card" data-aos="fade-up" data-aos-delay="400">
                <div class="card-header">Frequently Asked Questions</div>
                <div class="card-body">
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeading1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="false" aria-controls="faqCollapse1">
                                    What is the processing time for the visa?
                                </button>
                            </h2>
                            <div id="faqCollapse1" class="accordion-collapse collapse" aria-labelledby="faqHeading1" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Typical processing time is 3-5 business days. Urgent applications may be handled faster depending on the guidelines and documentation.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeading2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                                    How will I receive my visa?
                                </button>
                            </h2>
                            <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    You will receive your approved visa via email, ready to print and travel.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeading3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                                    Can I track my application status?
                                </button>
                            </h2>
                            <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, you can track your application in real-time directly through our platform until approval.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="info-card" data-aos="fade-up" data-aos-delay="500">
                <div class="card-header">How {{ $country }} Visa Process Works</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <img src="{{ asset('img/icons/task-unscreen.gif') }}" alt="Apply Online" style="width: 24px; height: 30px;">
                            <h6>Step 1: Apply Online</h6>
                            <p class="text-muted">Fill out our easy online application form with your personal and travel details.</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <img src="{{ asset('img/icons/upload-unscreen.gif') }}" alt="Upload Documents" style="width: 24px; height: 30px;">
                            <h6>Step 2: Upload Documents</h6>
                            <p class="text-muted">Scan and upload your required documents, such as your passport and photos.</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <img src="{{ asset('img/icons/email-unscreen.gif') }}" alt="Receive a Visa by Email" style="width: 24px; height: 50px;">
                            <h6>Step 3: Receive Your Visa</h6>
                            <p class="text-muted">Once approved, you'll receive your e-visa directly in your email inbox.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card sticky-card info-card" data-aos="fade-up" data-aos-delay="400">
                <div class="card-body text-center">
                    <h2 class="h4 mb-3">Start Your Visa Application Today!</h2>
                    <p>Click "Start Application" to fill the form, apply online in minutes, get fast approval, and travel hassle-free.</p>
                    <button type="button" class="btn btn-primary btn-sm w-100 apply-button" data-bs-toggle="modal" data-bs-target="#applyModal">Start Application</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="applyModal" tabindex="-1" aria-labelledby="applyModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="applyModalLabel">Apply for {{ $country }} Visa</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        @include('visa.apply')
      </div>
    </div>
  </div>
</div>

@endsection