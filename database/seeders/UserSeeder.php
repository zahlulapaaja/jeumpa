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
            ['email' => '1100@bps.go.id'],
            [
                'name' => 'Aku PJK Provinsi',
                'password' => Hash::make('admin1100'),
            ]
        );
        $prov->syncRoles(['pjk_prov']);

        // 1101 sampai 1118
        for ($i = 1101; $i <= 1118; $i++) {
            $kako = User::updateOrCreate(
                ['email' => "bps{$i}@bps.go.id"],
                [
                    'name' => "User {$i}",
                    'password' => Hash::make('bps' . $i),
                ]
            );
            $kako->syncRoles(['pjk_kako']);
        }

        // 1171 sampai 1175
        for ($i = 1171; $i <= 1175; $i++) {
            $kako = User::updateOrCreate(
                ['email' => "bps{$i}@bps.go.id"],
                [
                    'name' => "User {$i}",
                    'password' => Hash::make('bps' . $i),
                ]
            );
            $kako->syncRoles(['pjk_kako']);
        }
    }
}
