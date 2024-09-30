<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kelas;
use App\Models\Pengajar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengajarController extends Controller
{
    public function addGuru(){
        foreach (request()->input('kelas') as $item){

            $data = [
                'guru_id'=>request()->input('nip'),
                'kelas_id'=> $item
            ];
            Pengajar::create($data);

        }
        return redirect()->back()->with('success',"Berhasil Menambahkan Kelas");
    }

    public function showPengajar()
    {
        // Ambil data pengguna yang sedang login
        $user = Auth::user();
        
        // Ambil semua pengajars yang terkait dengan pengguna ini
        $pengajars = Pengajar::where('guru_id', $user->nip)->pluck('kelas_id')->toArray();

        $data = User::with('pengajars')->where('nip', Auth::user()->nip)->get();

        $pengajar = Pengajar::all();

        // Ambil semua kelas
        $kelas = Kelas::all();
        
        // Ambil kelas yang belum terhubung dengan pengguna ini
        $kelasBelumTerhubung = $kelas->whereNotIn('id', $pengajars);
        
        // Kirim data ke view
        return view('guru.ngajar', [
            'data' => $data,  // Data pengajar yang sudah terhubung
            'kelas' => $kelasBelumTerhubung, // Kelas yang belum terhubung
            'id'=>$pengajar
        ]);
    }

    public function destroy(string $id){
        
        Pengajar::where('id',$id)->delete();
        return redirect()->route('guru.main')->with('success',"Berhasil menghapus data");
    }

}
