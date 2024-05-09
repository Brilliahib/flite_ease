<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Bandara;
use App\Models\Pesawat;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => 'Akhila Zahra',
            'email' => 'akhilazahra03@gmail.com',
            'password' => bcrypt('khilacantik')
        ]);

        Bandara::create([
                'nama_bandara' => 'Yogyakarta International Airport',
                'kota_bandara' => 'Yogyakarta'
        ]);
    }
}
