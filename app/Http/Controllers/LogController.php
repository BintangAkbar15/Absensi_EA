<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\Logkehadiran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogController extends Controller
{
    //

    public function showKelas(){
        $kelas = User::with('pengajars')->where('nip','=',Auth::user()->nip)->get();
        return view('Absensi.masterabsensi',['data'=>$kelas]);
    }

    public function showKelasMenu(){
        $kelas = User::with('pengajars')->where('nip','=',Auth::user()->nip)->get();
        return view('Absensi.menudatahadir',['data'=>$kelas]);
    }
    public function addLog(Request $request){
        $data = [
            'siswa_id' => $request->input('siswa_id'),
            'kelas_id' => $request->input('kelas'),
            'status' => $request->input('status'),
            'tanggal' => now(),
        ];
        Logkehadiran::create($data);
        $siswa = Siswa::where('nis','like','%'.$request->input('siswa_id').'%')->get();
        return redirect()->back()->with('success', 'Siswa '.$siswa[0]->name.' telah melakukan presensi');
    }
}
