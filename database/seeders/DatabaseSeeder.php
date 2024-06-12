<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Prodi;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Prodi::create([
            'nama_prodi' => 'Bisnis Digital'
        ]);

        Prodi::create([
            'nama_prodi' => 'Manajemen Informatika'
        ]);

        prodi::factory(10)->create();

        Mahasiswa::create([
            'nim' => 'E020322089',
            'nama' => 'Maulida',
            'no_hp' => '087745321312',
            'alamat' => 'Cemara Raya',
            'foto' => 'E020322090.jpg',
            'password' => '123',
            'prodi_id' => 1,
        ]);

        Mahasiswa::create([
            'nim' => 'E020322090',
            'nama' => 'Mamao',
            'no_hp' => '087745321312',
            'alamat' => 'Cemara Raya',
            'foto' => 'E020322090.jpg',
            'password' => '123',
            'prodi_id' => 2,
        ]);

        Mahasiswa::factory(100)->create();
    }
}
