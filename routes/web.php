<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


// Admin
Route::get('/admin-dashboard', function () {
    return view('admin.admin-dashboard');
});

Route::get('/create-account', function () {
    return view('admin.create-account');
});

// Auth
Route::get('/login', function () {
    return view('auth.login');
});