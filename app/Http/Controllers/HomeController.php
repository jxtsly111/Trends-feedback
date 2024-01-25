<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
 public function index(){
    return view('home');
 }

 public function redirects()
{
    // Check if there's an authenticated user
    if (Auth::check()) {
        $usertype = Auth::user()->usertype;

        if ($usertype == '1') {
            return view('admin.adminhome');
        } else {
            return view('home');
        }
    } else {
        // No authenticated user, you may want to handle this case (redirect, show an error, etc.)
        return redirect('/home'); // Redirect to the home page after logout
    }
}

public function logout()
{
    // Check if there's an authenticated user
    if (Auth::check()) {
        // If authenticated, redirect based on the user type
        $usertype = Auth::user()->usertype;

        if ($usertype == '1') {
            // Admin user
            return redirect()->route('admin.dashboard'); // Redirect to the admin dashboard, adjust as needed
        } else {
            // Non-admin user
            return redirect('/home'); // Redirect to the home page, adjust as needed
        }
    } else {
        // No authenticated user, redirect to the home page by default
        return redirect('/home');
    }
}
}
