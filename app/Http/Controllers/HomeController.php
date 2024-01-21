<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function loginview(){
        return view('auth.login');
    }

    public function registerview(){
        return view('auth.register');
    }
}
