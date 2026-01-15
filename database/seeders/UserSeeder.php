<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // 1. ADMIN => udah ada di role seeder
        // 2. PJK PROV
        $prov = User::updateOrCreate(
            ['email' => 'prov@example.com'],
            [
                'name' => 'Aku PJK Provinsi',
                'password' => Hash::make('password123'),
            ]
        );
        $prov->syncRoles(['pjk_prov']);

        // 3. PJK Kako
        for ($i = 1; $i <= 20; $i++) {
            $kako = User::updateOrCreate(
                ['email' => "kako{$i}@example.com"],
                [
                    'name' => "Kako {$i}",
                    'password' => Hash::make('password123'),
                ]
            );
            $kako->syncRoles(['pjk_kako']);
        }
    }
}
