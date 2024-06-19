<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Berita;
use App\Models\pengumuman;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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

        // Berita::factory(5)->create();

        pengumuman::factory(5)->create();

        // $this->call([
        //     KategoriBeritaSeeder::class,
        // ]);
    }
}
