<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function index()
    {
        // Data chart
        $data = [100, 50, 20, 80, 90, 35, 70, 84, 50, 30];  // Jumlah data

        // Kirim ke view
        return view('teacher', compact('data'));
    }
}
