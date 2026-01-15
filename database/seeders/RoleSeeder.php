<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        // 1️⃣ Buat daftar role
        $roles = ['admin', 'pjk_prov', 'pjk_kako', 'pegawai', 'viewer'];
        foreach ($roles as $role) {
            Role::firstOrCreate(['name' => $role]);
        }
        echo "✅ Roles berhasil dibuat: admin, pjk_prov, pjk_kako, pegawai, viewer\n";


        // 2️⃣ Buat user pertama (admin)
        $admin = User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Administrator',
                'password' => Hash::make('admin123'), // ganti sesuai kebutuhan
            ]
        );

        // 3️⃣ Berikan role admin ke user tersebut
        $admin->assignRole('admin');

        echo "👤 User admin berhasil dibuat:\n";
        echo "   Email: admin@example.com\n";
        echo "   Password: admin123\n";
        echo "   Role: admin\n";
    }
}
