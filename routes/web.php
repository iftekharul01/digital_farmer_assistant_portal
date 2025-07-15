<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route for login page
Route::get('/login', function () {
    return view('login');
})->name('login');

// Route for signup page
Route::get('/signup', function () {
    return view('signup');
})->name('signup');

// Route for home page
Route::get('/home', function () {
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



