<?php
namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Logkehadiran;
use App\Models\Pengajar;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class ChartController extends Controller
{
    public function index(Request $request)
    {
        // Mendapatkan nip user yang sedang login
        $nip = Auth::user()->nip;

        // Mendapatkan tanggal dari request atau menggunakan tanggal hari ini
        $tanggal = $request->input('tanggal', Carbon::today()->toDateString());

        // Mendapatkan kelas yang diajar oleh pengajar yang sedang login
        $kelasYangDiajarkan = Pengajar::where('guru_id', $nip)->pluck('kelas_id');

        // Mengambil data log kehadiran untuk kelas yang terkait dengan pengajar dan filter berdasarkan tanggal
        $logKehadiran = Logkehadiran::with(['siswa', 'kelas'])
            ->whereDate('tanggal', $tanggal) // Filter berdasarkan tanggal
            ->whereIn('kelas_id', $kelasYangDiajarkan) // Filter berdasarkan kelas yang diajar pengajar
            ->get();

        // Mengelompokkan data berdasarkan kelas dan menghitung jumlah status kehadiran
        $dataPerKelas = [];
        foreach ($logKehadiran->groupBy('kelas_id') as $kelasId => $logKelas) {
            $dataPerKelas[$kelasId] = [
                'Hadir' => $logKelas->where('status', 'Hadir')->count(),
                'Izin'  => $logKelas->where('status', 'Izin')->count(),
                'Sakit' => $logKelas->where('status', 'Sakit')->count(),
                'Alpha' => $logKelas->where('status', 'Alpha')->count(),
            ];
        }

        // Mengirimkan data per kelas dan tanggal yang dipilih ke view
        return view('teacher', compact('dataPerKelas', 'tanggal'));
    }
    
    public function testing(){
        
        return view('teacher', compact('dataPerKelas', 'tanggal'));
    }
}
