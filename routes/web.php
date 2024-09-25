<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
use App\Models\Siswa;

//RUTE LOGIN
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'tampilLogin'])->name('login.tampil');
    Route::post('/login/submit', [AuthController::class, 'submitLogin'])->name('login.submit');
});

Route::middleware('auth')->group(function () {
    Route::get('/', [AuthController::class, 'tampilDashboard'])->name('dashboard.tampil');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // siswa show
    Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.tampil');
    
    //siswa redirect to add 
    Route::get('/siswa/add', function(){
        return view('formadd');
    })->name('student.create');
    
    //siswa add
    Route::post('/siswa/add/new', [SiswaController::class, 'store'])->name('siswa.add');
    
    //siswa redirect to edit
    Route::get('/siswa/edit/{siswa:nis}', function(Siswa $siswa){
        return view('edit',['nis' => $siswa->nis]);
    });
    
    //siswa edit
    Route::get('/siswa/edit/{id}', [SiswaController::class, 'update'])->name('siswa.edit');
    
    //kelas show
    Route::get('/kelas', [KelasController::class, 'index'])->name('kelas.tampil');
    
    //kelas redirect to add
    Route::get('/kelas/add', function(){
        return view('addkelas');
    })->name('kelas.create');
    
    //kelas add
    Route::post('/kelas/add/new', [KelasController::class, 'store'])->name('kelas.add');
});
