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

    public function redirects(){
        $usertype = Auth::usertype();
        if($usertype == "1"){
            return view('admin.adminhome');
        }
        else{
            return view('home');
        }
    }
}
