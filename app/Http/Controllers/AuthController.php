<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {        if (Session::has('logged_in')) {
            if (Session::get('user_type') === 'admin') {
                return redirect()->route('admin.dashboard');
            }
            return redirect()->route('home');
        }
        return view('auth.login');
    }

    public function loginProcess(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        // Basic validation
        if (empty($username) || empty($password)) {
            return back()->with('error', 'Please enter both username and password');
        }

        // Simple authentication logic
        if ($username === 'admin' && $password === 'admin123') {
            Session::put('user_type', 'admin');
            Session::put('logged_in', true);
            return redirect()->route('admin.dashboard');
        } 
          if ($username === 'customer' && $password === 'customer123') {
            Session::put('user_type', 'customer');
            Session::put('logged_in', true);
            return redirect()->route('home');
        }

        return back()->with('error', 'Invalid username or password');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function registerProcess(Request $request)
    {
        // Add registration logic here
        return redirect()->route('login');
    }

    public function logout()
    {
        Session::flush();
        return redirect()->route('login');
    }
}