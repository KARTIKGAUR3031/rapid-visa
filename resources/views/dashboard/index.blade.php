@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')
<div class="row stat-cards-row">
    <div class="col-lg-3 col-md-3">
        <div class="stat-card modern">
            <div class="stat-card-info">
                <p class="stat-card-title">Total Application</p>
                <h3 class="stat-card-value">{{ $totalApplications }}</h3>
            </div>
            <div class="stat-card-icon bg-blue">
                <i class="fas fa-file-alt"></i>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3">
        <div class="stat-card modern">
            <div class="stat-card-info">
                <p class="stat-card-title">Completed</p>
                <h3 class="stat-card-value">{{ $completedApplications }}</h3>
            </div>
            <div class="stat-card-icon bg-green">
                <i class="fas fa-check-circle"></i>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3">
        <div class="stat-card modern">
            <div class="stat-card-info">
                <p class="stat-card-title">Pending</p>
                <h3 class="stat-card-value">{{ $pendingApplications }}</h3>
            </div>
            <div class="stat-card-icon bg-orange">
                <i class="fas fa-clock"></i>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3">
        <div class="stat-card modern">
            <div class="stat-card-info">
                <p class="stat-card-title">Cancelled</p>
                <h3 class="stat-card-value">{{ $cancelledApplications }}</h3>
            </div>
            <div class="stat-card-icon bg-red">
                <i class="fas fa-times-circle"></i>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-lg-7">
        <div class="card modern">
            <div class="card-header">
                <h3 class="card-title">Application Analytics (Last 12 Months)</h3>
            </div>
            <div class="card-body">
                <div style="position: relative; height: 350px;">
                    <canvas id="analyticsChart"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-5">
        <div class="card modern">
            <div class="card-header">
                <h3 class="card-title">Recent Invoices</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="invoice-table modern">
                        <thead>
                            <tr>
                                <th>Invoice ID</th>
                                <th>Date</th>
                                <th>Amount</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="4">
                                    <div class="empty-state">
                                        <i class="fas fa-file-invoice-dollar"></i>
                                        <p>No invoices available.</p>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var ctx = document.getElementById('analyticsChart').getContext('2d');
        var analyticsChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: {!! json_encode($labels) !!},
                datasets: [{
                    label: 'Applications',
                    data: {!! json_encode($analyticsData) !!},
                    backgroundColor: 'rgba(74, 127, 247, 0.2)',
                    borderColor: 'rgba(74, 127, 247, 1)',
                    borderWidth: 2,
                    pointBackgroundColor: 'rgba(74, 127, 247, 1)',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgba(74, 127, 247, 1)'
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 1
                        }
                    }
                },
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });
    });
</script>
@endpush