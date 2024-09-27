<?php

namespace App\Http\Controllers;

use App\Models\Pengajar;
use Illuminate\Http\Request;

class PengajarController extends Controller
{
    public function addGuru(){
        $data = [
            'kelas_id'=>request()->input('nip')
        ];
        // Pengajar::create($data);
        return redirect()->back()->with('success',$data);
    }
}
