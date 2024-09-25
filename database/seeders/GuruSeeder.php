<?php

namespace Database\Seeders;

use App\Models\Guru;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Guru::create([
            'nip'=>121233214,                                                                  
            'name'=>'Isti Rahmawati',
            'username'=>'IstiRahmawati',
            'password'=>bcrypt('IstiRahmawati'),
        ]);
        Guru::create([    
            'nip'=>234123321,                                                                    
            'name'=>'Remi Sinaga',
            'username'=>'RemiSinaga',
            'password'=>bcrypt('RemiSinaga'),
        ]);
        Guru::create([    
            'nip'=>345123321,                                                                    
            'name'=>'Budiman Budianto',
            'username'=>'BudimanBudianto',
            'password'=>bcrypt('BudimanBudianto'),//'BudimanBudianto',
        ]);

    }
}
