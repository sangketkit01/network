<?php

use App\Http\Controllers\PuppeteerController;
use Illuminate\Support\Facades\Route;

use App\Models\Userdb;
use App\Http\Controllers\UserLoginController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register/update', [UserLoginController::class, "register"])->name('regist');

Route::post("/run-bot",[PuppeteerController::class,"Login"])->name("puppeteer");

