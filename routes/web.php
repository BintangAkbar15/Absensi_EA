<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/home', function () {
    return view('master');
});

//RUTE LOGIN

Route::get('/', function () {
    return view('login');
});
Route::post('/login/submit', [AuthController::class, 'loginAuth'])->name('login.post');