
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - RoomRush</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/admin-dashboard.css') }}">
</head>
<body>
    <!-- Mobile Menu Toggle -->
    <button class="menu-toggle" id="menuToggle">
        <i class="fas fa-bars fa-lg"></i>
    </button>

    <div class="d-flex">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="p-3">
                <div class="text-center mb-4">
                    <img src="{{ asset('images/RoomRush Logo.png') }}" alt="RoomRush" class="img-fluid" style="max-width: 150px;">
                </div>
                <nav class="nav flex-column">
                    <a class="nav-link active" href="#"><i class="fas fa-dashboard me-2"></i>Dashboard</a>
                    <a class="nav-link" href="#"><i class="fas fa-building me-2"></i>Rooms</a>
                    <a class="nav-link" href="#"><i class="fas fa-calendar me-2"></i>Bookings</a>
                    <a class="nav-link" href="#"><i class="fas fa-users me-2"></i>Tenants</a>
                    <a class="nav-link" href="#"><i class="fas fa-money-bill me-2"></i>Payments</a>
                    <a class="nav-link" href="#"><i class="fas fa-cog me-2"></i>Settings</a>
                    <a class="nav-link" href="{{ url('/logout') }}"><i class="fas fa-sign-out-alt me-2"></i>Logout</a>
                </nav>
            </div>
        </div>

        <!-- Main Content -->
        <div class="main-content flex-grow-1 p-4">
            <!-- Header -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2>Dashboard</h2>
                <div class="d-flex align-items-center">
                    <span class="me-3">Welcome, Admin</span>
                    <img src="https://via.placeholder.com/40" class="rounded-circle">
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="row g-4 mb-4">
                <div class="col-md-3">
                    <div class="stat-card card bg-primary text-white">
                        <div class="card-body">
                            <h5>Total Rooms</h5>
                            <h3 class="mb-0">25</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card card bg-success text-white">
                        <div class="card-body">
                            <h5>Occupied Rooms</h5>
                            <h3 class="mb-0">18</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card card bg-warning text-white">
                        <div class="card-body">
                            <h5>Pending Bookings</h5>
                            <h3 class="mb-0">5</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card card bg-info text-white">
                        <div class="card-body">
                            <h5>Total Revenue</h5>
                            <h3 class="mb-0">₱45,000</h3>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Bookings -->
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Recent Bookings</h5>
                    <a href="#" class="btn btn-primary btn-sm">View All</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Tenant</th>
                                    <th>Room</th>
                                    <th>Check-in</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>John Doe</td>
                                    <td>Room 101</td>
                                    <td>May 15, 2024</td>
                                    <td><span class="badge bg-warning">Pending</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-success">Approve</button>
                                        <button class="btn btn-sm btn-danger">Reject</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jane Smith</td>
                                    <td>Room 102</td>
                                    <td>May 16, 2024</td>
                                    <td><span class="badge bg-success">Confirmed</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-primary">View</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Room Status -->
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Room Status</h5>
                    <a href="#" class="btn btn-primary btn-sm">Manage Rooms</a>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-3">
                            <div class="card border-success">
                                <div class="card-body">
                                    <h6>Room 101</h6>
                                    <span class="badge bg-success">Occupied</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card border-danger">
                                <div class="card-body">
                                    <h6>Room 102</h6>
                                    <span class="badge bg-danger">Vacant</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card border-warning">
                                <div class="card-body">
                                    <h6>Room 103</h6>
                                    <span class="badge bg-warning">Reserved</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Mobile menu toggle functionality
        document.getElementById('menuToggle').addEventListener('click', function() {
            document.querySelector('.sidebar').classList.toggle('active');
        });

        // Close sidebar when clicking outside on mobile
        document.addEventListener('click', function(event) {
            const sidebar = document.querySelector('.sidebar');
            const menuToggle = document.getElementById('menuToggle');
            
            if (window.innerWidth <= 991) {
                if (!sidebar.contains(event.target) && !menuToggle.contains(event.target)) {
                    sidebar.classList.remove('active');
                }
            }
        });

        // Handle window resize
        window.addEventListener('resize', function() {
            if (window.innerWidth > 991) {
                document.querySelector('.sidebar').classList.remove('active');
            }
        });
    </script>
</body>
</html>