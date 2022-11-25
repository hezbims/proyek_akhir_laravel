<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Barang;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Barang::create([
            'gambar' => 'piring.jpg',
            'harga' => 20000
        ]);

        Barang::create([
           'gambar' => 'panci.jpg',
           'harga' => 30000
        ]);

        Barang::create([
           'gambar' => 'garpu.jfif',
           'harga' => 5000
        ]);

        Barang::create([
           'gambar' => 'sapu.jfif',
            'harga' => 10000
        ]);

        Barang::create([
           'gambar' => 'sendok.jpg',
           'harga' => 4000
        ]);
    }
}
