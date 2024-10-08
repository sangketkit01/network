<?php

use Illuminate\Support\Facades\Route;

use App\Models\Userdb;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register/update', [Userdb::class, "register"])->name('regist');