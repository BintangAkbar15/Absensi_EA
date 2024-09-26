<?php

use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;

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
        return view('siswa.formadd');
    })->name('student.create');
    
    //siswa add
    Route::post('/siswa/add/new', [SiswaController::class, 'store'])->name('siswa.add');
    
    //siswa redirect to edit
    Route::get('/siswa/edit/{siswa:nis}', function(Siswa $siswa){
        return view('siswa.edit',['nis' => $siswa->nis]);
    });
    
    //siswa edit
    Route::get('/siswa/edit/new', [SiswaController::class, 'update'])->name('siswa.update');
    
    //siswa destroy
    Route::get('/siswa/delete/{nis}', [SiswaController::class, 'destroy'])->name('siswa.delete');
    
    //master class
    Route::get('/mclass', function(){
        return view('kelas.masterclass');
    })->name('master.class');


    //kelas show
    Route::get('/kelas', [KelasController::class, 'index'])->name('kelas.tampil');
    
    //kelas redirect to add
    Route::get('/kelas/add', function(){
        return view('kelas.addkelas');
    })->name('kelas.create');

    // kelas edit
    Route::get('/kelas/edit', function(){
        return view('kelas.editkelas');
    })->name('kelas.create');

    //kelas add
    Route::post('/kelas/add/new', [KelasController::class, 'store'])->name('kelas.add');
    
    //kelas edit
    Route::post('/kelas/edit/{id}', [KelasController::class, 'update'])->name('kelas.edit');
    
    //kelas delete
    Route::post('/kelas/delete/{id}', [KelasController::class, 'destroy'])->name('kelas.delete');
});

Route::get('/siswa/addkelas', function(){
    return view('kelas.siswakelas');
})->name('siswa.kelas');


Route::get('/kelas/pilih', function(){
    return view('kelas.pilihkelas',['data'=> Kelas::all()]);
})->name('siswa.kelas.pilih');
