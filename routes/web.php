<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\AuthController;


// Public Routes
Route::get('/', function () {
    return view('pages.welcome');
})->name('welcome');

// Auth Routes
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginProcess'])->name('login.process'); // This is the route that processes the form
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerProcess'])->name('register.process');
Route::get('/logout', function () {
    Session::flush();
    return redirect('login');
})->name('logout');


    // Protected Routes
Route::group(['middleware' => 'web'], function () {
    Route::get('/admin/dashboard', function () {
        if (!Session::has('logged_in') || Session::get('user_type') !== 'admin') {
            return redirect('login');
        }
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/home', function () {
        if (!Session::has('logged_in')) {
            return redirect('login');
        }
        return view('pages.home');
    })->name('home');

    Route::get('/rooms', function () {
        return view('pages.rooms');
    })->name('rooms');

    Route::get('/rooms/{id}', [App\Http\Controllers\RoomController::class, 'show'])->name('room.details');

    Route::get('/about', function () {
        return view('pages.about');
    })->name('about');

    Route::get('/contact', function () {
        return view('pages.contact');
    })->name('contact');

    Route::get('/terms', function () {
        return view('pages.terms');
    })->name('terms');
});