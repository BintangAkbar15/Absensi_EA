<?php

namespace Database\Seeders;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Pengajar;
use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\GuruSeeder;
use Database\Seeders\KelasSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PengajarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([KelasSeeder::class,UserSeeder::class]);
        Pengajar::factory(10)->recycle([
            User::all(),
            Kelas::all()
        ])->create();
    }
}
