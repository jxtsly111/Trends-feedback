<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Feedback;

class HomeController extends Controller
{
 public function index(){
    $data = Feedback::all();
    return view('home',compact('data'));
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
            $totalFeedback = Feedback::count();
            return view('admin.adminhome', ['username' => $username, 'totalUsers' => $totalUsers,'totalAdmins' => $totalAdmins, 'totalFeedback' => $totalFeedback]);
        } else {
            $data = Feedback::all();
            return view('home',compact('data'));
        }
    } else {
        // No authenticated user, you may want to handle this case (redirect, show an error, etc.)
        $data = Feedback::all();
        return redirect('/home',compact('data')); // Redirect to the home page after logout
    }
}

}
