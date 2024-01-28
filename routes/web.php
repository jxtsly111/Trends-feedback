<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Models\Feedback;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $data = Feedback::all();
    return view('home', compact('data'));
});

Route::get('/home',[HomeController::class,"index"]);

Route::get('/redirects',[HomeController::class, "redirects"]);

Route::get('/admindashboard',[AdminController::class, "adminhome"]);

Route::get('/feedback',[AdminController::class, "feedback"]);

Route::post('/feedbacksubmit',[AdminController::class, "feedbacksubmit"]);

Route::get('/deletefeedback/{id}',[AdminController::class, "deletefeedback"]);

Route::get('/deleteuser/{id}',[AdminController::class, "deleteuser"]);





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
