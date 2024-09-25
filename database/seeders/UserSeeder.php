<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nip'=>121233214,                                                                  
            'name'=>'Isti Rahmawati',
            'username'=>'IstiRahmawati',
            'password'=>bcrypt('IstiRahmawati'),
        ]);
        User::create([    
            'nip'=>234123321,                                                                    
            'name'=>'Remi Sinaga',
            'username'=>'RemiSinaga',
            'password'=>bcrypt('RemiSinaga'),
        ]);
        User::create([    
            'nip'=>345123321,                                                                    
            'name'=>'Budiman Budianto',
            'username'=>'BudimanBudianto',
            'password'=>bcrypt('BudimanBudianto'),//'BudimanBudianto',
        ]);
    }
}
