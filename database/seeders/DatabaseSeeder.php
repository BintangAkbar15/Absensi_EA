<?php

namespace Database\Seeders;

use App\Models\Guru;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\Pengajar;
use App\Models\Logkehadiran;
use Illuminate\Database\Seeder;
use Database\Seeders\GuruSeeder;
use Database\Seeders\KelasSeeder;
use Database\Seeders\SiswaSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // $this->call([
        //     UserSeeder::class,
        //     KelasSeeder::class,
        //     KSiswaSeeder::class,
        //     LogSeeder::class
        // ]);

        // Logkehadiran::factory(20)->recycle([
        //     Siswa::all(),
        //     Kelas::all()
        // ])->create();

    }
}

