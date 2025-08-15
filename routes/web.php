<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\RegistrationController;

Route::get('/', function () {
    return view('welcome');
});

// Login routes
Route::get('/login', [RegistrationController::class, 'showLoginForm'])->name('login');
Route::post('/login', [RegistrationController::class, 'login'])->name('login.post');

// Logout route
Route::post('/logout', [RegistrationController::class, 'logout'])->name('logout');

// Registration routes
Route::get('/signup', [RegistrationController::class, 'showRegistrationForm'])->name('signup');
Route::post('/signup', [RegistrationController::class, 'register'])->name('signup.post');

// Route for home page (protected)
Route::get('/home', function () {
    if (!Session::get('logged_in')) {
        return redirect()->route('login')->with('error', 'Please login to access the home page.');
    }
    return view('home');
})->name('home');

// Route for market-prices page
Route::get('/market-prices', function () {
    return view('market-prices'); 
})->name('market-prices');

// Route for weather page
Route::get('/weather', function () {
    return view('weather'); 
})->name('weather');

// Route for crop-doctor page
Route::get('/crop-doctor', function () {
    return view('crop-doctor'); 
})->name('crop-doctor');

// Route for subsidies-news page
Route::get('/subsidies-news', function () {
    return view('subsidies-news'); 
})->name('subsidies-news');

// Route for  tutorials page
Route::get('/tutorials', function () {
    return view('tutorials'); 
})->name('tutorials');

// Route for about-us page
Route::get('/about-us', function () {
    return view('about-us'); 
})->name('about-us');

// Route for contact page
Route::get('/contact', function () {
    return view('contact'); 
})->name('contact');

// Google OAuth Routes
Route::get('/login/google', [RegistrationController::class, 'redirectToGoogle'])->name('login.google');
Route::get('/login/google/callback', [RegistrationController::class, 'handleGoogleCallback']);



