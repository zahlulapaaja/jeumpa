<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Jalankan semua seeder utama aplikasi.
     */
    public function run(): void
    {
        // Urutan penting agar relasi tidak error
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            SharedFilesSeeder::class,
        ]);
    }
}
