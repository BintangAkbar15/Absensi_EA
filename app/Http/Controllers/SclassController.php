<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SclassController extends Controller
{

    public function updateStudents(Request $request)
{
    $selectedStudents = $request->input('students');  // Array of selected NIS
    $kelasId = $request->input('id_kelas');  // Kelas ID yang ingin diupdate
    // $j_kelas = count($request->input(key: 'jumlah_siswa'));  // Kelas ID yang ingin diupdate

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

    return redirect()->back()->with('success', 'Siswa berhasil ditambahkan ke kelas');
}


}
