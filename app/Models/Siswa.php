<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $fillable = [
        'nis',
        'id_kelas',
        'nama'
    ];

    public function kelas(){
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }
}
