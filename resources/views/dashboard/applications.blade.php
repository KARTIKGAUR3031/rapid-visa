@extends('layouts.dashboard')

@section('title', 'My Applications')

@section('content')
<div class="card modern">
    <div class="card-header">
        <h3 class="card-title">All Applications</h3>
        <a href="{{ route('visa.apply') }}" class="btn btn-primary">Start New Application</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="invoice-table modern">
                <thead>
                    <tr>
                        <th>Application ID</th>
                        <th>Visa Type</th>
                        <th>Destination</th>
                        <th>Status</th>
                        <th>Date Applied</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($applications as $application)
                        <tr>
                            <td>{{ $application->id }}</td>
                            <td>{{ $application->visa_type ?? 'N/A' }}</td>
                            <td>{{ $application->country }}</td>
                            <td><span class="badge badge-processing">{{ $application->status }}</span></td>
                            <td>{{ $application->created_at->format('d M Y') }}</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-primary">View</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">
                                <div class="empty-state">
                                    <i class="fas fa-file-alt"></i>
                                    <p>No applications found.</p>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection