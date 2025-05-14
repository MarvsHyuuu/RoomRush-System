@extends('layout.app')

@section('title', 'Contact Us - RoomRush')

@section('content')
    <!-- Hero Section -->
    <section class="contact-hero py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-center text-lg-start">
                    <img src="{{ asset('images/RoomRush Logo.png') }}" alt="RoomRush Logo" class="img-fluid mb-4" style="max-width: 200px;">
                    <h1 class="display-4 fw-bold mb-4">Get in Touch</h1>
                    <p class="lead mb-4">We're here to help and answer any questions you might have. We look forward to hearing from you!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Information -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="contact-card card h-100 border-0 shadow-sm">
                        <div class="card-body p-4 text-center">
                            <div class="icon-circle mb-3">
                                <i class="fas fa-map-marker-alt text-primary"></i>
                            </div>
                            <h4>Visit Us</h4>
                            <p class="text-muted mb-0">Pangasinan State University<br>Alaminos City Campus<br>Alaminos City, Pangasinan</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-card card h-100 border-0 shadow-sm">
                        <div class="card-body p-4 text-center">
                            <div class="icon-circle mb-3">
                                <i class="fas fa-phone text-primary"></i>
                            </div>
                            <h4>Call Us</h4>
                            <p class="text-muted mb-0">Mobile: (123) 456-7890<br>Landline: (123) 456-7890</p>
                            <p class="text-muted mb-0">Monday - Friday: 8:00 AM - 5:00 PM</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-card card h-100 border-0 shadow-sm">
                        <div class="card-body p-4 text-center">
                            <div class="icon-circle mb-3">
                                <i class="fas fa-envelope text-primary"></i>
                            </div>
                            <h4>Email Us</h4>
                            <p class="text-muted mb-0">General Inquiries:<br>info@roomrush.com</p>
                            <p class="text-muted mb-0">Support:<br>support@roomrush.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4 p-md-5">
                            <h2 class="text-center mb-4">Send us a Message</h2>
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Full Name</label>
                                            <input type="text" class="form-control" placeholder="Enter your full name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Email Address</label>
                                            <input type="email" class="form-control" placeholder="Enter your email" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="form-label">Subject</label>
                                            <input type="text" class="form-control" placeholder="Enter subject" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="form-label">Message</label>
                                            <textarea class="form-control" rows="5" placeholder="Enter your message" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-primary btn-lg px-5">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Social Media Section -->
    <section class="py-5 bg-primary text-white">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <h2 class="mb-4">Connect With Us</h2>
                    <p class="mb-5">Follow us on social media to stay updated with the latest news and announcements.</p>
                    <div class="social-links d-flex justify-content-center gap-4">
                        <a href="https://facebook.com/roomrush" class="social-link" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://twitter.com/roomrush" class="social-link" target="_blank">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://instagram.com/roomrush" class="social-link" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://linkedin.com/company/roomrush" class="social-link" target="_blank">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <div class="container-fluid p-0">
            <div class="ratio ratio-21x9">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3843.6770010179497!2d119.97843587584753!3d16.15950768428859!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3393dc7460aaaaa5%3A0x2ee61d98a31bb39b!2sPangasinan%20State%20University%20-%20Alaminos%20City%20Campus!5e0!3m2!1sen!2sph!4v1684167799297!5m2!1sen!2sph" 
                        style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
@endsection
