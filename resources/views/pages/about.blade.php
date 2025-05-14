
@extends('layout.app')

@section('title', 'About Us - RoomRush')

@section('content')    <!-- Hero Section -->
    <section class="about-hero py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img src="{{ asset('images/RoomRush Logo.png') }}" alt="RoomRush Logo" class="img-fluid mb-4" style="max-width: 200px;">
                    <h1 class="display-4 fw-bold mb-4">About RoomRush</h1>
                    <p class="lead mb-4">RoomRush is a web-based booking platform designed to modernize student housing searches in Alaminos City, Pangasinan. Developed as an academic entrepreneurship project by students from [Your University], our solution addresses the critical need for an organized, transparent, and efficient system connecting students with verified boarding house accommodations.</p>
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
                            <p class="text-muted">"To empower PSU-Alaminos students with fast, safe, and transparent access to affordable boarding houses through a dedicated digital platform."</p>
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
                            <p class="text-muted">To become the premier digital housing solution for students in provincial universities across Northern Luzon by 2027.</p>
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
                    <div class="text-center">                        <div class="value-icon mb-3">
                            <i class="fas fa-lightbulb text-primary fa-3x"></i>
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
            <h2 class="text-center mb-5">Our Team</h2>            <div class="row g-4 justify-content-center">
                <div class="col-md-3">
                    <div class="card team-card border-0 shadow-sm">
                        <div class="card-body text-center p-4">                            <img src="{{ asset('images/marven.png') }}" alt="Marven M. Rosal" class="rounded-circle mb-3 team-img">
                            <h4>Marven M. Rosal</h4>
                            <p class="text-muted">Founder & CEO</p>
                            <p class="small">Leading the vision and strategy of RoomRush, bringing innovative solutions to student housing challenges.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card team-card border-0 shadow-sm">
                        <div class="card-body text-center p-4">                            <img src="{{ asset('images/rey.png') }}" alt="Christian Rey C. Caasi" class="rounded-circle mb-3 team-img">
                            <h4>Christian Rey C. Caasi</h4>
                            <p class="text-muted">CTO</p>
                            <p class="small">Driving technological innovation and platform development to ensure a seamless user experience.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card team-card border-0 shadow-sm">
                        <div class="card-body text-center p-4">                            <img src="{{ asset('images/joy.png') }}" alt="Kristine Joy C. Mallanao" class="rounded-circle mb-3 team-img">
                            <h4>Kristine Joy C. Mallanao</h4>
                            <p class="text-muted">COO</p>
                            <p class="small">Overseeing daily operations and ensuring smooth coordination between landlords and students.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card team-card border-0 shadow-sm">
                        <div class="card-body text-center p-4">                            <img src="{{ asset('images/polinne.png') }}" alt="Polinne Mari M. Rabina" class="rounded-circle mb-3 team-img">
                            <h4>Polinne Mari M. Rabina</h4>
                            <p class="text-muted">Chief Marketing Officer</p>
                            <p class="small">Leading our marketing initiatives and building strong relationships with the PSU-ACC community.</p>
                        </div>
                    </div>
                </div>
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
                        </div>                        <div class="col-md-4">
                            <div class="contact-info">
                                <i class="fas fa-map-marker-alt text-primary fa-2x mb-3"></i>
                                <h5>Location</h5>
                                <p class="text-muted">Pangasinan State University<br>Alaminos City Campus<br>Alaminos City, Pangasinan</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Social Media Links -->                    <div class="mt-5">
                        <h5 class="mb-4">Connect With Us</h5>
                        <div class="d-flex justify-content-center gap-4">
                            <a href="https://www.facebook.com/profile.php?id=61576356086511" class="text-primary fs-4" target="_blank">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a href="https://twitter.com/roomrush" class="text-primary fs-4" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://instagram.com/roomrush" class="text-primary fs-4" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://linkedin.com/company/roomrush" class="text-primary fs-4" target="_blank">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection