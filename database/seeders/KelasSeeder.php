<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kelas::create([                                                                  
            'name'=>'12A',
            'jumlah_siswa'=>'30',
        ]);
        Kelas::create([                                                                  
            'name'=>'12B',
            'jumlah_siswa'=>'36',
        ]);
        Kelas::create([                                                                  
            'name'=>'12C',
            'jumlah_siswa'=>'32',
        ]);
    }
}
