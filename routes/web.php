<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MarketPriceController;
use App\Http\Controllers\AdminPriceController;

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
Route::get('/market-prices', [MarketPriceController::class, 'index'])->name('market-prices');

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

// Admin Routes
Route::prefix('admin')->group(function () {
    // Admin Login and Registration
    Route::get('/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminController::class, 'login'])->name('admin.login.post');
    Route::get('/register', [AdminController::class, 'showRegistrationForm'])->name('admin.register');
    Route::post('/register', [AdminController::class, 'register'])->name('admin.register.post');
    Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');
    
    // Protected Admin Routes (require admin authentication)
    Route::middleware('admin.auth')->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.admin_dashboard');
        })->name('admin.dashboard');
        
        Route::get('/home', function () {
            return view('admin.admin_home');
        })->name('admin.home');
        
        Route::get('/market-prices', [AdminPriceController::class, 'index'])->name('admin.market-prices');
        Route::post('/market-prices', [AdminPriceController::class, 'store'])->name('admin.market-prices.store');
        Route::get('/market-prices/{id}/edit', [AdminPriceController::class, 'edit'])->name('admin.market-prices.edit');
        Route::put('/market-prices/{id}', [AdminPriceController::class, 'update'])->name('admin.market-prices.update');
        Route::delete('/market-prices/{id}', [AdminPriceController::class, 'destroy'])->name('admin.market-prices.destroy');
        Route::post('/market-prices/bulk-update', [AdminPriceController::class, 'bulkUpdate'])->name('admin.market-prices.bulk-update');
        
        Route::get('/about-us', function () {
            return view('admin.admin_about-us');
        })->name('admin.about-us');
        
        Route::get('/contact', function () {
            return view('admin.admin_contact');
        })->name('admin.contact');
        
        Route::get('/crop-doctor', function () {
            return view('admin.admin_crop-doctor');
        })->name('admin.crop-doctor');
        
        Route::get('/tutorials', function () {
            return view('admin.admin_tutorials');
        })->name('admin.tutorials');
        
        Route::get('/subsidies-news', function () {
            return view('admin.admin_subsidies-news');
        })->name('admin.subsidies-news');
        
        Route::get('/weather', function () {
            return view('admin.admin_weather');
        })->name('admin.weather');
        
        Route::get('/welcome', function () {
            return view('admin.admin_welcome');
        })->name('admin.welcome');
    });
});



