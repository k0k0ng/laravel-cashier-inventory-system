<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


// Auth
Route::get('/create-account', function () {
    return view('admin.create-account');
});

Route::get('/login', function () {
    return view('auth.login');
});