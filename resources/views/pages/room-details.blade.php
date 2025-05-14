@extends('layout.app')

@section('title', 'Room Details - RoomRush')

@section('content')
    <section class="py-5">
        <div class="container">
            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('rooms') }}">Rooms</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $room['name'] }}</li>
                </ol>
            </nav>

            <div class="row">
                <div class="col-lg-8">
                    <div class="card shadow-sm mb-4">
                        <img src="{{ $room['image'] }}" class="card-img-top" alt="{{ $room['name'] }}">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h2 class="card-title mb-0">{{ $room['name'] }}</h2>
                                <span class="badge bg-{{ $room['type'] === 'Solo Room' ? 'primary' : 'success' }}">
                                    {{ $room['type'] }}
                                </span>
                            </div>
                            <p class="text-muted mb-4">
                                <i class="fas fa-map-marker-alt me-2"></i>{{ $room['distance'] }} Away from PSU-ACC
                            </p>
                            <div class="mb-4">
                                <h4>Amenities</h4>
                                <div class="d-flex flex-wrap gap-2">
                                    @foreach($room['amenities'] as $amenity)
                                        <span class="badge bg-light text-dark">
                                            <i class="fas fa-{{ $amenity['icon'] }} me-1"></i> 
                                            {{ $amenity['name'] }}
                                        </span>
                                    @endforeach
                                </div>
                            </div>
                            <div class="mb-4">
                                <h4>Description</h4>
                                <p>{{ $room['description'] }}</p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <h3 class="text-primary mb-0">₱{{ number_format($room['price']) }}/month</h3>
                                <button class="btn btn-primary btn-lg">Book Now</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h4>Room Details</h4>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <i class="fas fa-ruler-combined me-2"></i>
                                    <strong>Size:</strong> {{ $room['size'] }}
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-money-bill me-2"></i>
                                    <strong>Deposit:</strong> ₱{{ number_format($room['deposit']) }}
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-star me-2"></i>
                                    <strong>Rating:</strong> {{ $room['rating'] }}/5
                                </li>
                                <li>
                                    <i class="fas fa-calendar-alt me-2"></i>
                                    <strong>Minimum Stay:</strong> {{ $room['min_stay'] }} months
                                </li>
                            </ul>
                            <hr>
                            <h4>Contact Landlord</h4>
                            <form>
                                <div class="mb-3">
                                    <label class="form-label">Message</label>
                                    <textarea class="form-control" rows="3" placeholder="Write your message here..."></textarea>
                                </div>
                                <button type="submit" class="btn btn-outline-primary w-100">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
