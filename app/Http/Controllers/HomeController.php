<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

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
            $username = Auth::user()->name;
            $totalUsers = User::count();
            $totalAdmins = User::where('usertype', '1')->count();
            return view('admin.adminhome', ['username' => $username, 'totalUsers' => $totalUsers,'totalAdmins' => $totalAdmins]);
        } else {
            return view('home');
        }
    } else {
        // No authenticated user, you may want to handle this case (redirect, show an error, etc.)
        return redirect('/home'); // Redirect to the home page after logout
    }
}

}
