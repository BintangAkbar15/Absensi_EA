<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model implements AuthenticatableContract
{
    use HasFactory, Authenticatable;

    protected $fillable = [
        'nip',
        'nama',
        'username',
        'password',
    ];

    // Jika menggunakan hashing password, pastikan ini ada:
    protected $hidden = [
        'password',  // Sembunyikan password ketika model di-serialize
    ];
}
