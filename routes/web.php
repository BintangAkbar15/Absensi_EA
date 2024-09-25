<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SiswaController;

//RUTE LOGIN
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'tampilLogin'])->name('login.tampil');
    Route::post('/login/submit', [AuthController::class, 'submitLogin'])->name('login.submit');
});

Route::middleware('auth')->group(function () {
    Route::get('/', [AuthController::class, 'tampilDashboard'])->name('dashboard.tampil');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    
    Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.tampil');
    Route::post('/add/new', [SiswaController::class, 'store'])->name('siswa.add');
    Route::get('/add', function(){
        return view('formadd');
    });
});
