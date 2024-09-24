<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log_kehadiran extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_siswa',
        'id_kelas',
        'tanggal',
        'hadir',
        'sakit',
        'izin',
        'alpha'
    ];
}
