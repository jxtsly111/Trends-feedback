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
         return redirect()->route('/home'); // Redirect to the login page, adjust as needed
     }
 }
}
