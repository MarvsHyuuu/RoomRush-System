<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\AuthController;


// Public Routes
Route::get('/', function () {
    return view('pages.index');
})->name('landing');

Route::get('/home', function () {
    if (!Session::has('logged_in')) {
        return redirect('login');
    }
    return view('pages.home');
})->name('home');

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

    Route::get('/dashboard', function () {
        if (!Session::has('logged_in')) {
            return redirect('login');
        }
        if (Session::get('user_type') === 'admin') {
            return redirect()->route('admin.dashboard');
        }
        return view('pages.customer-dashboard');
    })->name('dashboard');

    Route::get('/rooms', function () {
        if (!Session::has('logged_in')) {
            return redirect('login');
        }
        return view('pages.rooms');
    })->name('rooms');

    Route::get('/rooms/{id}', function($id) {
        if (!Session::has('logged_in')) {
            return redirect('login');
        }
        return app()->make(App\Http\Controllers\RoomController::class)->show($id);
    })->name('room.details');

    Route::get('/about', function () {
        if (!Session::has('logged_in')) {
            return redirect('login');
        }
        return view('pages.about');
    })->name('about');

    Route::get('/contact', function () {
        if (!Session::has('logged_in')) {
            return redirect('login');
        }
        return view('pages.contact');
    })->name('contact');

    Route::get('/terms', function () {
        if (!Session::has('logged_in')) {
            return redirect('login');
        }
        return view('pages.terms');
    })->name('terms');
});