<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/teacher', function () {
    return view('teacher');
});

//RUTE LOGIN

Route::get('/', function () {
    return view('login');
});
Route::post('/login/submit', [AuthController::class, 'loginAuth'])->name('login.post');