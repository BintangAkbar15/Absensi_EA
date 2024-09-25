<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('teacher');
});

//RUTE LOGIN

Route::get('/login', function () {
    return view('login');
});

Route::post('/login/submit', [AuthController::class, 'submitLogin'])->name('login.submit');