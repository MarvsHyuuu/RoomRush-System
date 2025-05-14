@extends('layout.app')

@section('title', 'Available Rooms - RoomRush')

@section('content')    <!-- Search Section -->
    <section class="search-section py-5">
        <div class="container">
            <div class="card shadow-sm">
                <div class="card-body p-4">
                    <div class="text-center mb-4">
                        <img src="{{ asset('images/RoomRush Logo.png') }}" alt="RoomRush Logo" class="img-fluid" style="max-width: 200px;">
                    </div>
                    <h4 class="mb-4">Find Your Perfect Room</h4>
                    <form action="{{ route('rooms') }}" method="GET">
                        <div class="row g-3">
                            <div class="col-md-3">
                                <label class="form-label">Room Type</label>
                                <select class="form-select" name="type">
                                    <option value="">All Types</option>
                                    <option value="solo">Solo Room</option>
                                    <option value="bedspace">Bedspace</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Price Range</label>
                                <select class="form-select" name="price">
                                    <option value="">Any Price</option>
                                    <option value="0-2000">Under ₱2,000</option>
                                    <option value="2000-3500">₱2,000 - ₱3,500</option>
                                    <option value="3500-5000">₱3,500 - ₱5,000</option>
                                    <option value="5000+">Above ₱5,000</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Rating</label>
                                <select class="form-select" name="rating">
                                    <option value="">Any Rating</option>
                                    <option value="4">4+ Stars</option>
                                    <option value="3">3+ Stars</option>
                                    <option value="2">2+ Stars</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">&nbsp;</label>
                                <button type="submit" class="btn btn-primary w-100">
                                    <i class="fas fa-search me-2"></i> Search
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Results Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2>Available Rooms</h2>
                <div class="dropdown">
                    <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                        Sort By
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Price: Low to High</a></li>
                        <li><a class="dropdown-item" href="#">Price: High to Low</a></li>
                        <li><a class="dropdown-item" href="#">Rating: Highest</a></li>
                    </ul>
                </div>
            </div>

            <!-- Room Cards -->
            <div class="row g-4">
                <!-- Solo Room Example -->
                <div class="col-md-6 col-lg-4">
                    <div class="card room-card h-100">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" class="card-img-top" alt="Solo Room">
                            <span class="badge bg-primary position-absolute top-0 end-0 m-3">Solo Room</span>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h5 class="card-title mb-0">Deluxe Solo Room</h5>
                                <div class="rating text-warning">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>                            </div>
                            <p class="text-muted"><i class="fas fa-map-marker-alt me-2"></i>0.8km Away from PSU-ACC</p>
                            <div class="room-features mb-3">
                                <span class="badge bg-light text-dark me-2"><i class="fas fa-wifi me-1"></i> Free WiFi</span>
                                <span class="badge bg-light text-dark me-2"><i class="fas fa-air-conditioner me-1"></i> AC</span>
                                <span class="badge bg-light text-dark"><i class="fas fa-bath me-1"></i> Private Bath</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">                                <h5 class="text-primary mb-0">₱3,500/month</h5>
                                <a href="{{ route('room.details', 'deluxe-solo') }}" class="btn btn-outline-primary">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bedspace Example -->
                <div class="col-md-6 col-lg-4">
                    <div class="card room-card h-100">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1560448205-4d9b3e6bb6db?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" class="card-img-top" alt="Bedspace">
                            <span class="badge bg-success position-absolute top-0 end-0 m-3">Bedspace</span>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h5 class="card-title mb-0">Comfortable Bedspace</h5>
                                <div class="rating text-warning">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                            </div>
                            <p class="text-muted"><i class="fas fa-map-marker-alt me-2"></i>0.5km Away from PSU-ACC</p>
                            <div class="room-features mb-3">
                                <span class="badge bg-light text-dark me-2"><i class="fas fa-wifi me-1"></i> Free WiFi</span>
                                <span class="badge bg-light text-dark me-2"><i class="fas fa-fan me-1"></i> Fan</span>
                                <span class="badge bg-light text-dark"><i class="fas fa-users me-1"></i> Shared Bath</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">                                <h5 class="text-primary mb-0">₱2,000/month</h5>
                                <a href="{{ route('room.details', 'comfortable-bedspace') }}" class="btn btn-outline-primary">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Premium Solo Room Example -->
                <div class="col-md-6 col-lg-4">
                    <div class="card room-card h-100">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1598928506311-c55ded91a20c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" class="card-img-top" alt="Premium Room">
                            <span class="badge bg-primary position-absolute top-0 end-0 m-3">Solo Room</span>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h5 class="card-title mb-0">Premium Solo Room</h5>
                                <div class="rating text-warning">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <p class="text-muted"><i class="fas fa-map-marker-alt me-2"></i>1.5km Away from PSU-ACC</p>
                            <div class="room-features mb-3">
                                <span class="badge bg-light text-dark me-2"><i class="fas fa-wifi me-1"></i> Free WiFi</span>
                                <span class="badge bg-light text-dark me-2"><i class="fas fa-air-conditioner me-1"></i> AC</span>
                                <span class="badge bg-light text-dark"><i class="fas fa-bath me-1"></i> Private Bath</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">                                <h5 class="text-primary mb-0">₱4,500/month</h5>
                                <a href="{{ route('room.details', 'premium-solo') }}" class="btn btn-outline-primary">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="d-flex justify-content-center mt-5">
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
@endsection