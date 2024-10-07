<?php

use Illuminate\Support\Facades\Route;

use App\Models\Userdb;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/register/update', [Userdb::class, "register"])->name('regist');

