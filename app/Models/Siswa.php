<?php

namespace App\Models;

use App\Models\Kelas;
use App\Models\Logkehadiran;
use App\Models\Log_kehadiran;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Siswa extends Model
{
    use HasFactory;
    protected $fillable = [
        'nis',
        'kelas_id',
        'nama'
    ];

    public function kelas(){
        return $this->hasOne(Kelas::class, 'kelas_id');
    }
    public function logkehadiran(){
        return $this->hasMany(Logkehadiran::class, 'siswa_id');
    }
}
