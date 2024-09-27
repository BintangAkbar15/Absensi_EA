<?php

use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SclassController;


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

    //data siswa kelas
    Route::get('/kelas/siswa', function(){
        return view('kelas.listsiswa');
    })->name('kelas.siswa');

    //master data siswa kelas
    Route::get('/kelas/mskelas', function(){
        return view('kelas.pilihkelassiswa');
    })->name('kelas.pilihkelas');

    
    //kelas add
    Route::post('/kelas/add/new', [KelasController::class, 'store'])->name('kelas.add');
    
    //kelas redirect to edit
    Route::get('/kelas/edit/{kelas:id}', function(Kelas $kelas){
        return view('kelas.editkelas',['id'=>$kelas->id,'name'=>$kelas]);
    })->name('kelas.edit');
    
    //kelas edit
    Route::post('/kelas/edit/new/{id}', [KelasController::class, 'update'])->name('kelas.update');
    
    //kelas delete
    Route::post('/kelas/delete/{id}', [KelasController::class, 'destroy'])->name('kelas.delete');

    //master absensi
    Route::get('/absensi', function(){
        return view('Absensi.absensikelas');
    })->name('absensi.kelas');

});

Route::get('/siswa/addkelas/{kelas:id}', function(Kelas $kelas){
    $siswa = Siswa::where('kelas_id', NULL)->get();
    return view('kelas.siswakelas',['id'=>$kelas->id, 'siswa'=>$siswa]);
})->name('siswa.kelas');

Route::post('/siswa/add/kelas', [SclassController::class, 'updateStudents'])->name('siswa.kelas.add');

Route::get('/kelas/pilih', function(){
    $kelas = Kelas::all()->where('bangku_tersisa','>',1);
    return view('kelas.pilihkelas',['data'=> $kelas]);
})->name('siswa.kelas.pilih');

Route::get('/guru', function(){
    return view('guru.ngajar');
})->name('guru.main');

Route::get('/', [ChartController::class, 'index']);
