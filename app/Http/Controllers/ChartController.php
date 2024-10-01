<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Logkehadiran;
use Illuminate\Http\Request;
use Illuminate\Container\Attributes\Auth;
use SebastianBergmann\CodeCoverage\Report\Xml\Totals;

class ChartController extends Controller
{
    public function index()
    {
        // Count data where status is 'Hadir'
        $hadir = Logkehadiran::where('status', 'Hadir')->count();
        $izin = Logkehadiran::where('status', 'Izin')->count();
        $sakit = Logkehadiran::where('status', 'Sakit')->count();
        $Totals = $hadir + $izin + $sakit;

        // Send to view
        return view('teacher', ['hadir' => $hadir , 'izin' => $izin , 'sakit' => $sakit, 'totalhadir' => $Totals]);

    }
}
