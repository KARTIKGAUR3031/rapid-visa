@extends('layouts.app')

@section('content')
<style>
    .text-primary {
        color: #ECAB1D !important;
    }
    .btn-primary {
        background-color: #ECAB1D !important;
        border-color: #ECAB1D !important;
    }
    .card {
        transition: all 0.3s ease-in-out;
        animation: fadeIn 0.5s ease-in-out;
    }
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15) !important;
    }
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    .display-4 {
        font-weight: 300;
    }
    .lead {
        font-size: 1.25rem;
        font-weight: 300;
    }
    .sticky-top .btn {
        animation: pulse 2s infinite;
    }
    @keyframes pulse {
        0% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.05);
        }
        100% {
            transform: scale(1);
        }
    }
    .list-group-item i {
        color: #ECAB1D;
    }
    .country-image {
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    .model_header {
        background-color: #ECAB1D !important;
        color: white !important;
    }
</style>
<div class="container my-5 pb-5">
    <div class="row">
        <div class="col-md-8">
            <div class="text-center mb-5">
                <h1 class="display-4">Get your {{ $country }} visa in minutes</h1>
                <img src="{{ request('image') }}" alt="{{ $country }}" class="img-fluid my-3 country-image" style="max-height: 500px;">
                <p class="lead"><b>The World's Most Advanced Visa Platform</b></p>
            </div>

            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h2 class="h4 mb-3"><b>Why Apply Online with Rapid Visa?</b></h2>
                    <p>Rapid Visa makes visa applications easy and stress-free for Indian travellers. Here’s why it’s your most convenient choice:</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">1. Submit your visa application online in minutes—no embassy visits or paperwork hassles.</li>
                        <li class="list-group-item">2. Get your visa fast—most are approved within just 3–5 business days so you can plan sooner.</li>
                        <li class="list-group-item">3. Step-by-Step Guidance – Clear instructions and document checklists ensure a smooth application.</li>
                        <li class="list-group-item">4. Real-Time Status Updates – Track your application directly through Rapid Visa until approval.</li>
                        <li class="list-group-item">5. Email Delivery – Receive your approved visa via email, ready to print and travel.</li>
                    </ul>
                </div>
            </div>

            <div class="card shadow-sm mb-4">
                <div class="card-header bg-light">
                    <h2 class="h4 mb-0"><b>Documents Required</b></h2>
                </div>
                <div class="card-body">
                    <p>Before applying, make sure you have the following:</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="fas fa-passport me-2"></i>Passport – Must be valid for at least 6 months from the date of travel.</li>
                        <li class="list-group-item"><i class="fas fa-plane me-2"></i>Confirmed Return Flight Tickets – To prove your travel plans.</li>
                        <li class="list-group-item"><i class="fas fa-hotel me-2"></i>Accommodation Details – Hotel bookings or proof of stay.</li>
                        <li class="list-group-item"><i class="fas fa-file-alt me-2"></i>Digital Arrival Card or e-Visa Forms – Required for certain countries.</li>
                        <li class="list-group-item"><i class="fas fa-briefcase me-2"></i>Additional Documents – For business visas or other specific purposes.</li>
                    </ul>
                    <p class="mt-3"><strong>Tip:</strong> Having scanned copies ready before starting your application will save time.</p>
                </div>
            </div>

            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h2 class="h4 mb-3"><b>Step-by-Step Guide to Apply</b></h2>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">1. <strong>Start Application</strong> – Click the "Start Application" button to fill out the online form.</li>
                        <li class="list-group-item">2. <strong>Create an Account on Rapid Visa</strong> – Sign up and verify your email.</li>
                        <li class="list-group-item">3. <strong>Select Visa Type and Country</strong> – Choose the visa type and destination country that matches your travel purpose.</li>
                        <li class="list-group-item">4. <strong>Fill Application Form</strong> – Enter personal details, travel plans, and passport information.</li>
                        <li class="list-group-item">5. <strong>Upload Documents</strong> – Attach scanned copies of your passport, flight tickets, and accommodations.</li>
                        <li class="list-group-item">6. <strong>Pay Visa Fee</strong> – Complete payment securely online.</li>
                        <li class="list-group-item">7. <strong>Track Your Application</strong> – Receive real-time updates until your visa is approved.</li>
                        <li class="list-group-item">8. <strong>Receive a Visa by Email</strong> – Download, print, and travel hassle-free.</li>
                    </ul>
                </div>
            </div>

            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h2 class="h4 mb-3"><b>Processing Time</b></h2>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Typical processing time: 3–5 business days</li>
                        <li class="list-group-item">Urgent applications may be handled faster depending on the Rapid Visa guidelines and documentation.</li>
                    </ul>
                </div>
            </div>

            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h2 class="h4 mb-3"><b>Fees</b></h2>
                    <p>Visa fees vary depending on the country and visa type. Rapid Visa provides a transparent breakdown of costs during your online application, including service fees and official visa charges.</p>
                </div>
            </div>

            <div class="card shadow-sm mb-4">
                <div class="card-header bg-light">
                    <h2 class="h4 mb-0"><b>Tips for a Successful Application</b></h2>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="fas fa-check-circle text-primary me-2"></i>Ensure your passport is valid for at least 6 months.</li>
                        <li class="list-group-item"><i class="fas fa-check-circle text-primary me-2"></i>Double-check all travel and accommodation details.</li>
                        <li class="list-group-item"><i class="fas fa-check-circle text-primary me-2"></i>Upload clear, readable scans of documents.</li>
                        <li class="list-group-item"><i class="fas fa-check-circle text-primary me-2"></i>Fill in all required fields accurately.</li>
                        <li class="list-group-item"><i class="fas fa-check-circle text-primary me-2"></i>Apply well in advance of your travel dates to avoid delays.</li>
                    </ul>
                </div>
            </div>

             <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h2 class="h4 mb-3">Travel with Confidence</h2>
                    <p>Applying online through Rapid Visa removes the stress of embassy visits and confusing paperwork. With clear guidance, fast processing, and real-time updates, Indian travellers can focus on planning their trip, not the visa.</p>
                </div>
            </div>

        </div>
        <div class="col-md-4">
            <div class="card shadow-sm sticky-top" style="top: 120px;">
                <div class="card-body text-center">
                    <h2 class="h4 mb-3">Start Your Visa Application Today!</h2>
                    <p>Click "Start Application" to fill the form, apply online in minutes, get fast approval, and travel hassle-free with Rapid Visa.</p>
                    <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#applyModal">Start Application</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="applyModal" tabindex="-1" aria-labelledby="applyModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title w-100 text-center" id="applyModalLabel">Apply for Visa Application</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        @include('visa.apply')
      </div>
    </div>
  </div>
</div>
@endsection