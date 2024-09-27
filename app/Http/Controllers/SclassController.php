<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SclassController extends Controller
{

    public function updateStudents(Request $request)
{
    $selectedStudents = $request->input('students');  // Array of selected NIS
    $kelasId = $request->input('id_kelas');  // Kelas ID yang ingin diupdate
    $j_kelas = $request->input(key: 'jumlah_siswa');  // Kelas ID yang ingin diupdate

    // Validasi jika kelas_id dikirim atau siswa dipilih
    if (empty($selectedStudents) || empty($kelasId)) {
        return redirect()->back()->with('error', 'Siswa atau kelas tidak valid');
    }

    // Lakukan update kelas_id untuk siswa yang dipilih
    DB::table('siswas')
        ->whereIn('nis', $selectedStudents)
        ->update(['kelas_id' => $kelasId]);
    // DB::table('kelas')
    //     ->whereIn('id', $kelasId)
    //     ->update(['jumlah_siswa' => $j_kelas]);

    $data = Siswa::where('kelas_id','like','%'.$kelasId.'%')->count();
    Kelas::where('id', $kelasId)->update(['jumlah_siswa' => $data]);
    
    return redirect()->back()->with('success', $data);
}


}
