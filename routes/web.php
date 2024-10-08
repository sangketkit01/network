<?php

use App\Http\Controllers\PuppeteerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::post("/run-bot",[PuppeteerController::class,"Login"])->name("puppeteer");