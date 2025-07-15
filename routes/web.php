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


