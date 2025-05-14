@extends('layout.app')

@section('title', 'Welcome to RoomRush')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">Welcome to RoomRush</h1>
                    <p class="lead mb-4">Experience comfortable and affordable boarding houses that feel just like home.</p>
                    <a href="{{ route('rooms') }}" class="btn btn-primary btn-lg">Browse Rooms</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4 mb-4">
                    <div class="card border-0 bg-white shadow-sm p-4">
                        <h2 class="display-4 fw-bold text-primary">500+</h2>
                        <p class="text-muted mb-0">Available Rooms</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0 bg-white shadow-sm p-4">
                        <h2 class="display-4 fw-bold text-primary">1000+</h2>
                        <p class="text-muted mb-0">Happy Tenants</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0 bg-white shadow-sm p-4">
                        <h2 class="display-4 fw-bold text-primary">50+</h2>
                        <p class="text-muted mb-0">Locations</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Why Choose RoomRush?</h2>
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="feature-card card h-100 p-4">
                        <div class="text-primary mb-3">
                            <i class="fas fa-search fa-2x"></i>
                        </div>
                        <h4>Easy Search</h4>
                        <p>Find the perfect boarding house with our advanced search filters.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="feature-card card h-100 p-4">
                        <div class="text-primary mb-3">
                            <i class="fas fa-shield-alt fa-2x"></i>
                        </div>
                        <h4>Secure Booking</h4>
                        <p>Safe and secure payment process for your peace of mind.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="feature-card card h-100 p-4">
                        <div class="text-primary mb-3">
                            <i class="fas fa-clock fa-2x"></i>
                        </div>
                        <h4>24/7 Support</h4>
                        <p>Round-the-clock customer support for all your needs.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Locations -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Popular Locations</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm">
                        <img src="{{ asset('images/manila.jpg') }}" class="card-img-top" alt="Manila">
                        <div class="card-body text-center">
                            <h5 class="card-title">Manila</h5>
                            <p class="text-muted">20+ Available Rooms</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm">
                        <img src="{{ asset('images/quezon.jpg') }}" class="card-img-top" alt="Quezon City">
                        <div class="card-body text-center">
                            <h5 class="card-title">Quezon City</h5>
                            <p class="text-muted">15+ Available Rooms</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm">
                        <img src="{{ asset('images/makati.jpg') }}" class="card-img-top" alt="Makati">
                        <div class="card-body text-center">
                            <h5 class="card-title">Makati</h5>
                            <p class="text-muted">25+ Available Rooms</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <h2 class="mb-4">Ready to Find Your Perfect Room?</h2>
                    <p class="lead mb-4">Browse our selection of comfortable and affordable rooms across different locations.</p>
                    <a href="{{ route('rooms') }}" class="btn btn-primary btn-lg">View All Rooms</a>
                </div>
            </div>
        </div>
    </section>
@endsection