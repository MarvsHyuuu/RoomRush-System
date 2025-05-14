
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to RoomRush</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
</head>
<body>
    <!-- Hero Section -->
    <section class="hero-section d-flex align-items-center">
    <div class="container text-center">
        <div class="brand-name mb-4">
            <h1 class="display-2 fw-bold text-light">RoomRush</h1>
            <p class="text-light opacity-75">Your Boarding House Solution</p>
        </div>
        <h2 class="display-4 fw-bold mb-4">Find Your Perfect Home Away From Home</h2>
        <p class="lead mb-5">Discover comfortable and affordable boarding houses near you with RoomRush</p>
        <div class="d-flex justify-content-center">
            <a href="{{ route('login') }}" class="btn btn-light btn-lg cta-button px-5">Get Started</a>
        </div>
    </div>
</section>

    <!-- Features Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Why Choose RoomRush?</h2>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card card h-100 p-4">
                        <div class="text-primary mb-3">
                            <i class="fas fa-search fa-2x"></i>
                        </div>
                        <h4>Easy Search</h4>
                        <p>Find the perfect boarding house with our advanced search filters.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card card h-100 p-4">
                        <div class="text-primary mb-3">
                            <i class="fas fa-shield-alt fa-2x"></i>
                        </div>
                        <h4>Secure Booking</h4>
                        <p>Safe and secure payment process for your peace of mind.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card card h-100 p-4">
                        <div class="text-primary mb-3">
                            <i class="fas fa-clock fa-2x"></i>
                        </div>
                        <h4>24/7 Support</h4>
                        <p>Round-the-clock customer support for all your needs.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card card h-100 p-4">
                        <div class="text-primary mb-3">
                            <i class="fas fa-star fa-2x"></i>
                        </div>
                        <h4>Verified Listings</h4>
                        <p>All boarding houses are verified for quality assurance.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4 mb-4">
                    <h2 class="display-4 fw-bold text-primary">500+</h2>
                    <p class="text-muted">Available Rooms</p>
                </div>
                <div class="col-md-4 mb-4">
                    <h2 class="display-4 fw-bold text-primary">1000+</h2>
                    <p class="text-muted">Happy Tenants</p>
                </div>
                <div class="col-md-4 mb-4">
                    <h2 class="display-4 fw-bold text-primary">50+</h2>
                    <p class="text-muted">Locations</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">What Our Users Say</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="text-warning mb-3">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="mb-3">"Found my perfect room within a day! The process was so smooth and easy."</p>
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('images/avatar1.jpg') }}" alt="User" class="rounded-circle" width="50">
                            <div class="ms-3">
                                <h6 class="mb-0">John Doe</h6>
                                <small class="text-muted">Student</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="text-warning mb-3">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="mb-3">"Great platform! Made finding a boarding house near my workplace so much easier."</p>
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('images/avatar2.jpg') }}" alt="User" class="rounded-circle" width="50">
                            <div class="ms-3">
                                <h6 class="mb-0">Jane Smith</h6>
                                <small class="text-muted">Professional</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="text-warning mb-3">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="mb-3">"The verification process gives me peace of mind. Highly recommended!"</p>
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('images/avatar3.jpg') }}" alt="User" class="rounded-circle" width="50">
                            <div class="ms-3">
                                <h6 class="mb-0">Mike Johnson</h6>
                                <small class="text-muted">Businessman</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Get Started Section -->
    <section class="bg-primary text-white py-5">
        <div class="container text-center">
            <h2 class="mb-4">Ready to Find Your New Home?</h2>
            <p class="mb-4">Join thousands of happy tenants who found their perfect boarding house with RoomRush</p>
            <a href="{{ route('register') }}" class="btn btn-light btn-lg cta-button">Get Started Now</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-light py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>RoomRush</h5>
                    <p>Finding your perfect boarding house made easy.</p>
                </div>
                <div class="col-md-4">
                    <h5>Contact</h5>
                    <p>Email: info@roomrush.com<br>Phone: (123) 456-7890</p>
                </div>
                <div class="col-md-4">
                    <h5>Follow Us</h5>
                    <div class="d-flex gap-3">
                        <a href="#" class="text-light"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-light"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-light"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="text-center">
                <small>&copy; {{ date('Y') }} RoomRush. All rights reserved.</small>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>