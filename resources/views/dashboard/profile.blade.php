@extends('layouts.dashboard')

@section('title', 'My Profile')

@section('content')
    @if($application)
        <div class="row">
            <div class="col-lg-4">
                <div class="card modern profile-card">
                    <div class="card-body text-center">
                        @if($application->image)
                            <img src="{{ asset('storage/documents/' . $application->image) }}" alt="Avatar" class="avatar-lg rounded-circle mb-3">
                        @else
                            <img src="https://i.pravatar.cc/150?u={{ auth()->user()->id }}" alt="Avatar" class="avatar-lg rounded-circle mb-3">
                        @endif
                        <h4 class="card-title">{{ $application->full_name }}</h4>
                        <p class="text-muted">{{ $application->email }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card modern tabbed-card">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs" id="profile-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="personal-details-tab" data-toggle="tab" href="#personal-details" role="tab" aria-controls="personal-details" aria-selected="true">Personal Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="passport-details-tab" data-toggle="tab" href="#passport-details" role="tab" aria-controls="passport-details" aria-selected="false">Passport Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="address-details-tab" data-toggle="tab" href="#address-details" role="tab" aria-controls="address-details" aria-selected="false">Address Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="all-applications-tab" data-toggle="tab" href="#all-applications" role="tab" aria-controls="all-applications" aria-selected="false">All Applications</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="profile-tabs-content">
                            <div class="tab-pane fade show active" id="personal-details" role="tabpanel" aria-labelledby="personal-details-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="info-group">
                                            <label>Full Name</label>
                                            <p>{{ $application->full_name }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="info-group">
                                            <label>Email</label>
                                            <p>{{ $application->email }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="info-group">
                                            <label>Phone Number</label>
                                            <p>{{ $application->phone_number }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="info-group">
                                            <label>Date of Birth</label>
                                            <p>{{ $application->date_of_birth }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="info-group">
                                            <label>Gender</label>
                                            <p>{{ $application->gender }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="info-group">
                                            <label>Nationality</label>
                                            <p>{{ $application->nationality }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="passport-details" role="tabpanel" aria-labelledby="passport-details-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="info-group">
                                            <label>Passport Number</label>
                                            <p>{{ $application->passport_number }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="info-group">
                                            <label>Passport Valid Till</label>
                                            <p>{{ $application->passport_valid_till }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="info-group">
                                            <label>Passport Place of Issue</label>
                                            <p>{{ $application->passport_place_of_issue }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="address-details" role="tabpanel" aria-labelledby="address-details-tab">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="info-group">
                                            <label>Address</label>
                                            <p>{{ $application->address }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="info-group">
                                            <label>City</label>
                                            <p>{{ $application->city }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="info-group">
                                            <label>State</label>
                                            <p>{{ $application->state }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="info-group">
                                            <label>Zip Code</label>
                                            <p>{{ $application->zip_code }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="all-applications" role="tabpanel" aria-labelledby="all-applications-tab">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Application ID</th>
                                                <th>Visa Type</th>
                                                <th>Destination</th>
                                                <th>Status</th>
                                                <th>Date Applied</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($applications as $application)
                                                <tr>
                                                    <td>{{ $application->id }}</td>
                                                    <td>{{ $application->visa_type ?? 'N/A' }}</td>
                                                    <td>{{ $application->destination_country }}</td>
                                                    <td><span class="badge badge-{{ strtolower($application->status) }}">{{ $application->status }}</span></td>
                                                    <td>{{ $application->created_at->format('d M, Y') }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="card modern">
            <div class="card-body">
                <div class="empty-state">
                    <i class="fas fa-user-alt-slash"></i>
                    <p>You have not submitted any visa applications yet.</p>
                    <p class="text-muted">Your profile information will appear here once you create an application.</p>
                </div>
            </div>
        </div>
    @endif
@endsection