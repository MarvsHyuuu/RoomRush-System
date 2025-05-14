@extends('layout.app')

@section('title', 'My Dashboard - RoomRush')

@section('content')
<div class="customer-dashboard py-5">
    <div class="container">
        <!-- Welcome Section -->
        <div class="row mb-4">
            <div class="col-md-8">
                <img src="{{ asset('images/RoomRush Logo.png') }}" alt="RoomRush Logo" class="dashboard-logo mb-3">
                <h1 class="mb-3">Welcome, {{ Session::get('username', 'Customer') }}!</h1>
                <p class="text-muted">Manage your bookings and view your account information.</p>
            </div>            <div class="col-md-4 text-md-end">
                <div class="user-info">
                    <img src="{{ asset('images/jerome.png') }}" class="rounded-circle mb-2" alt="Profile Picture" width="64" height="64" style="object-fit: cover;">
                    <p class="mb-0"><strong>Account Status:</strong> <span class="badge bg-success">Active</span></p>
                </div>
            </div>
        </div>

        <!-- Quick Stats -->
        <div class="row g-4 mb-5">
            <div class="col-md-4">
                <div class="card dashboard-card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="icon-box bg-primary text-white me-3">
                                <i class="fas fa-bed"></i>
                            </div>
                            <h5 class="mb-0">Current Booking</h5>
                        </div>
                        <h3 class="mb-2">Room 101</h3>
                        <p class="text-muted mb-0">Valid until: May 30, 2025</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card dashboard-card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="icon-box bg-success text-white me-3">
                                <i class="fas fa-money-bill"></i>
                            </div>
                            <h5 class="mb-0">Payment Status</h5>
                        </div>
                        <h3 class="mb-2">₱3,500</h3>
                        <p class="text-success mb-0">Paid for May 2025</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card dashboard-card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="icon-box bg-info text-white me-3">
                                <i class="fas fa-clock"></i>
                            </div>
                            <h5 class="mb-0">Next Payment</h5>
                        </div>
                        <h3 class="mb-2">₱3,500</h3>
                        <p class="text-muted mb-0">Due: June 1, 2025</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Booking History & Details -->
        <div class="row g-4">
            <div class="col-lg-8">
                <!-- Current Booking Details -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-header bg-white py-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Current Booking Details</h5>
                            <button class="btn btn-outline-primary btn-sm">Extend Stay</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <p class="mb-1"><strong>Room Number:</strong> 101</p>
                                <p class="mb-1"><strong>Room Type:</strong> Solo Room</p>
                                <p class="mb-1"><strong>Check-in Date:</strong> May 1, 2025</p>
                                <p class="mb-1"><strong>Monthly Rate:</strong> ₱3,500</p>
                            </div>
                            <div class="col-md-6">
                                <p class="mb-1"><strong>Status:</strong> <span class="badge bg-success">Active</span></p>
                                <p class="mb-1"><strong>Contract End:</strong> May 30, 2025</p>
                                <p class="mb-1"><strong>Payment Due:</strong> 1st of every month</p>
                                <p class="mb-1"><strong>Security Deposit:</strong> ₱3,500 (Paid)</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Payment History -->
                <div class="card border-0 shadow-sm">
                    <div class="card-header bg-white py-3">
                        <h5 class="mb-0">Payment History</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Description</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>May 1, 2025</td>
                                        <td>Monthly Rent - May 2025</td>
                                        <td>₱3,500</td>
                                        <td><span class="badge bg-success">Paid</span></td>
                                    </tr>
                                    <tr>
                                        <td>April 1, 2025</td>
                                        <td>Monthly Rent - April 2025</td>
                                        <td>₱3,500</td>
                                        <td><span class="badge bg-success">Paid</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <!-- Quick Actions -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-header bg-white py-3">
                        <h5 class="mb-0">Quick Actions</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary">
                                <i class="fas fa-money-bill me-2"></i>Make Payment
                            </button>
                            <button class="btn btn-outline-primary">
                                <i class="fas fa-file-alt me-2"></i>Download Receipt
                            </button>
                            <button class="btn btn-outline-primary">
                                <i class="fas fa-ticket-alt me-2"></i>Submit Maintenance Request
                            </button>
                            <button class="btn btn-outline-primary">
                                <i class="fas fa-phone me-2"></i>Contact Support
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Notifications -->
                <div class="card border-0 shadow-sm">
                    <div class="card-header bg-white py-3">
                        <h5 class="mb-0">Recent Notifications</h5>
                    </div>
                    <div class="card-body p-0">
                        <div class="notification-list">
                            <div class="notification-item p-3 border-bottom">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-bell text-warning me-3"></i>
                                    <div>
                                        <p class="mb-1">Payment due in 15 days</p>
                                        <small class="text-muted">2 hours ago</small>
                                    </div>
                                </div>
                            </div>
                            <div class="notification-item p-3 border-bottom">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-check-circle text-success me-3"></i>
                                    <div>
                                        <p class="mb-1">May 2025 payment confirmed</p>
                                        <small class="text-muted">1 day ago</small>
                                    </div>
                                </div>
                            </div>
                            <div class="notification-item p-3">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-info-circle text-info me-3"></i>
                                    <div>
                                        <p class="mb-1">Maintenance work scheduled</p>
                                        <small class="text-muted">3 days ago</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
