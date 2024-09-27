<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function index()
    {
        // Data chart
        $data = [10, 20, 30, 40, 50];  // Jumlah data

        // Kirim ke view
        return view('teacher', compact('data'));
    }
}
