<?php

namespace Database\Seeders;

use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Database\Seeder;
use Database\Seeders\KelasSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KSiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(KelasSeeder::class);
        Siswa::factory(10)->recycle(
            Kelas::all()  
        )->create();
    }
}
