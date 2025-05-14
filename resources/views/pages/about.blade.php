
@extends('layout.app')

@section('title', 'About Us - RoomRush')

@section('content')
    <!-- Hero Section -->
    <section class="about-hero py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">About RoomRush</h1>
                    <p class="lead mb-4">Connecting students and professionals with quality boarding houses since 2023</p>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('images/about-hero.jpg') }}" alt="About RoomRush" class="img-fluid rounded-3 shadow">
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="mb-4">
                                <i class="fas fa-bullseye text-primary fa-2x"></i>
                            </div>
                            <h3>Our Mission</h3>
                            <p class="text-muted">To provide a seamless and trustworthy platform connecting boarding house seekers with quality accommodations, ensuring a safe and comfortable living experience for everyone.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="mb-4">
                                <i class="fas fa-eye text-primary fa-2x"></i>
                            </div>
                            <h3>Our Vision</h3>
                            <p class="text-muted">To be the leading platform for boarding house solutions in the Philippines, revolutionizing how people find their perfect home away from home.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Values Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Our Core Values</h2>
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="text-center">
                        <div class="value-icon mb-3">
                            <i class="fas fa-shield-alt text-primary fa-3x"></i>
                        </div>
                        <h4>Trust</h4>
                        <p class="text-muted">Building trust through verified listings and transparent processes</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center">
                        <div class="value-icon mb-3">
                            <i class="fas fa-star text-primary fa-3x"></i>
                        </div>
                        <h4>Quality</h4>
                        <p class="text-muted">Maintaining high standards for all listed properties</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center">
                        <div class="value-icon mb-3">
                            <i class="fas fa-hands-helping text-primary fa-3x"></i>
                        </div>
                        <h4>Service</h4>
                        <p class="text-muted">Providing exceptional support to all our users</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center">
                        <div class="value-icon mb-3">
                            <i class="fas fa-innovation text-primary fa-3x"></i>
                        </div>
                        <h4>Innovation</h4>
                        <p class="text-muted">Continuously improving our platform and services</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Our Team</h2>
            <div class="row g-4 justify-content-center">
                <div class="col-md-4">
                    <div class="card team-card border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <img src="{{ asset('images/team1.jpg') }}" alt="Team Member" class="rounded-circle mb-3" width="120">
                            <h4>[Team Member Name]</h4>
                            <p class="text-muted">[Position]</p>
                            <p class="small">[Brief description about the team member's role and expertise]</p>
                        </div>
                    </div>
                </div>
                <!-- Add more team members as needed -->
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="mb-4">Get in Touch</h2>
                    <p class="lead mb-5">Have questions? We're here to help!</p>
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="contact-info">
                                <i class="fas fa-envelope text-primary fa-2x mb-3"></i>
                                <h5>Email</h5>
                                <p class="text-muted">info@roomrush.com</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="contact-info">
                                <i class="fas fa-phone text-primary fa-2x mb-3"></i>
                                <h5>Phone</h5>
                                <p class="text-muted">(123) 456-7890</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="contact-info">
                                <i class="fas fa-map-marker-alt text-primary fa-2x mb-3"></i>
                                <h5>Location</h5>
                                <p class="text-muted">[Your Address]</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection