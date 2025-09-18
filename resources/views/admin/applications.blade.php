@extends('layouts.admin')

@section('content')
    <h1>Visa Applications</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Country</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($applications as $application)
                <tr>
                    <td>{{ $application->id }}</td>
                    <td>{{ $application->user->name }}</td>
                    <td>{{ $application->country }}</td>
                    <td>{{ $application->status }}</td>
                    <td>
                        <a href="{{ route('admin.applications.approve', $application) }}" class="btn btn-success">Approve</a>
                        <a href="{{ route('admin.applications.cancel', $application) }}" class="btn btn-danger">Cancel</a>
                        <a href="{{ route('admin.applications.request-documents', $application) }}" class="btn btn-info">Request Documents</a>
                        <a href="{{ route('admin.applications.request-payment', $application) }}" class="btn btn-warning">Request Payment</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection