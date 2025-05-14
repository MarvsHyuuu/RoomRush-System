<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    private $rooms = [
        'deluxe-solo' => [
            'id' => 'deluxe-solo',
            'name' => 'Deluxe Solo Room',
            'type' => 'Solo Room',
            'image' => 'https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80',
            'distance' => '0.8km',
            'price' => 3500,
            'rating' => 4.5,
            'amenities' => [
                ['name' => 'Free WiFi', 'icon' => 'wifi'],
                ['name' => 'AC', 'icon' => 'air-conditioner'],
                ['name' => 'Private Bath', 'icon' => 'bath']
            ],
            'size' => '16 sqm',
            'deposit' => 3500,
            'min_stay' => 6,
            'description' => 'Spacious and well-furnished solo room with modern amenities. Perfect for students who value privacy and comfort. The room includes air conditioning, private bathroom, and high-speed internet.'
        ],
        'comfortable-bedspace' => [
            'id' => 'comfortable-bedspace',
            'name' => 'Comfortable Bedspace',
            'type' => 'Bedspace',
            'image' => 'https://images.unsplash.com/photo-1560448205-4d9b3e6bb6db?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80',
            'distance' => '0.5km',
            'price' => 2000,
            'rating' => 4.0,
            'amenities' => [
                ['name' => 'Free WiFi', 'icon' => 'wifi'],
                ['name' => 'Fan', 'icon' => 'fan'],
                ['name' => 'Shared Bath', 'icon' => 'users']
            ],
            'size' => '4 sqm',
            'deposit' => 2000,
            'min_stay' => 4,
            'description' => 'Affordable and cozy bedspace in a shared room. Includes basic amenities and is perfect for students on a budget. Located very close to PSU-ACC for convenient access to campus.'
        ],
        'premium-solo' => [
            'id' => 'premium-solo',
            'name' => 'Premium Solo Room',
            'type' => 'Solo Room',
            'image' => 'https://images.unsplash.com/photo-1598928506311-c55ded91a20c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80',
            'distance' => '1.5km',
            'price' => 4500,
            'rating' => 5.0,
            'amenities' => [
                ['name' => 'Free WiFi', 'icon' => 'wifi'],
                ['name' => 'AC', 'icon' => 'air-conditioner'],
                ['name' => 'Private Bath', 'icon' => 'bath']
            ],
            'size' => '20 sqm',
            'deposit' => 4500,
            'min_stay' => 6,
            'description' => 'Our premium solo room offers the ultimate comfort with high-end furnishings and complete amenities. Features include premium air conditioning, modern bathroom fixtures, and a dedicated study area.'
        ]
    ];

    public function show($id)
    {
        if (!isset($this->rooms[$id])) {
            abort(404);
        }

        return view('pages.room-details', ['room' => $this->rooms[$id]]);
    }
}
