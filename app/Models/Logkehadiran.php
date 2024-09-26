<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logkehadiran extends Model
{
    use HasFactory;
    protected $fillable = [
        'siswa_id',
        'kelas_id',
        'tanggal',
        'status'
    ];

    protected $with = ['siswa', 'kelas'];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'siswa_id');
    }
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }
}
