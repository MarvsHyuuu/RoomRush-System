
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
    <section class="hero-section d-flex align-items-center min-vh-100">
    <div class="container text-center py-5">
        <div class="brand-name mb-4">
            <h1 class="display-2 fw-bold text-light mb-3">RoomRush</h1>
            <p class="text-light opacity-75 fs-5">Your Boarding House Solution</p>
        </div>
        <h2 class="display-4 fw-bold mb-4 px-2">Find Your Perfect Home Away From Home</h2>
        <p class="lead mb-5 px-3">Discover comfortable and affordable boarding houses near you with RoomRush</p>
        <div class="d-flex justify-content-center">
            <a href="{{ route('login') }}" class="btn btn-light btn-lg cta-button px-5">Get Started</a>
        </div>
    </div>
</section>

    <!-- Features Section -->
    <section class="py-5">
        <div class="container px-4">
            <h2 class="text-center mb-5 px-2">Why Choose RoomRush?</h2>
            <div class="row g-4 justify-content-center">
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
                    <h2 class="display-4 fw-bold text-primary">50+</h2>
                    <p class="text-muted">Available Rooms</p>
                </div>
                <div class="col-md-4 mb-4">
                    <h2 class="display-4 fw-bold text-primary">200+</h2>
                    <p class="text-muted">Happy Tenants</p>
                </div>
                <div class="col-md-4 mb-4">
                    <h2 class="display-4 fw-bold text-primary">5+</h2>
                    <p class="text-muted">Locations</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-5">
        <div class="container px-4">
            <div class="text-center mb-4">
                <img src="{{ asset('images/RoomRush Logo.png') }}" alt="RoomRush Logo" class="img-fluid mb-4" style="max-width: 150px;">
            </div>
            <h2 class="text-center mb-5 px-2">What Our Users Say</h2>
            <div class="row gy-4">
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="text-warning mb-3">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="mb-3">"RoomRush helped me find the perfect boarding house near PSU-ACC! The search filters made it so easy to find exactly what I was looking for."</p>
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('images/jerome.png') }}" alt="Marven M. Rosal" class="rounded-circle" width="50" style="object-fit: cover;">
                            <div class="ms-3">
                                <h6 class="mb-0">Jerome Salcedo</h6>
                                <small class="text-muted">PSU-ACC Student</small>
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
                        <p class="mb-3">"As a student in PSU-ACC, finding affordable accommodation was my top priority. RoomRush made it possible to compare options easily."</p>
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('images/jomar.png') }}" alt="Christian Rey C. Caasi" class="rounded-circle" width="50" style="object-fit: cover;">
                            <div class="ms-3">
                                <h6 class="mb-0">Jomar Jacob</h6>
                                <small class="text-muted">PSU-ACC Student</small>
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
                        <p class="mb-3">"The platform is very user-friendly and the verified listings gave me confidence in choosing my boarding house. Great service!"</p>
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('images/myrick.png') }}" alt="Kristine Joy C. Mallanao" class="rounded-circle" width="50" style="object-fit: cover;">
                            <div class="ms-3">
                                <h6 class="mb-0">Myrick Clemente</h6>
                                <small class="text-muted">PSU-ACC Student</small>
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