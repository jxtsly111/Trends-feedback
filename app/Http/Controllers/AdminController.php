<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

class AdminController extends Controller
{
    public function adminhome(){
        $username = Auth::user()->name;
        $totalUsers = User::count();
        $totalAdmins = User::where('usertype', '1')->count();
        return view('admin.adminhome', ['username' => $username, 'totalUsers' => $totalUsers,'totalAdmins' => $totalAdmins]);
    }

    public function feedback(){
        $username = Auth::user()->name;
        $totalUsers = User::count();
        $totalAdmins = User::where('usertype', '1')->count();
        return view('admin.feedback', ['username' => $username, 'totalUsers' => $totalUsers,'totalAdmins' => $totalAdmins]);
    }
}
