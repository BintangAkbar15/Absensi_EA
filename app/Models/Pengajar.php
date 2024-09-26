<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajar extends Model
{
    use HasFactory;

    protected $with = ['guru', 'kelas'];

    public function kelas()
    {
        return $this->belongsToMany(Kelas::class, 'pengajars', 'guru_id', 'kelas_id');
    }
    public function guru()
    {
        return $this->belongsToMany(User::class, 'pengajars', 'guru_id', 'id');
    }
}
