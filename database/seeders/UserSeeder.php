<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Cari role dengan nama 'super_admin'
        $role_super_admin = Role::where('name', 'super_admin')->first();

        // Cari role dengan nama 'admin'
        $role_admin = Role::where('name', 'admin')->first();

        // Cari role dengan nama 'staff'
        $role_employee = Role::where('name', 'staff')->first();

        // Pastikan ada setidaknya satu role yang ditemukan sebelum membuat pengguna
        if (!$role_super_admin && !$role_admin && !$role_employee) {
            echo "No roles found. Please seed roles first or check database.";
            return;
        }

        // Buat pengguna dengan role 'staff' jika role ditemukan
        if ($role_employee) {
            User::create([
                "name" => "ryugen",
                "username" => "ryugen",
                "role_id" => $role_employee->id,
                "password" => bcrypt('12345678')
            ]);
        } else {
            // Tangani jika role 'staff' tidak ditemukan
            echo "Role 'staff' not found.";
            // atau lakukan sesuatu yang sesuai dengan logika aplikasi Anda
        }

        // Buat pengguna dengan role 'admin' jika role ditemukan
        if ($role_admin) {
            User::create([
                "name" => "admin",
                "username" => "admin",
                "role_id" => $role_admin->id,
                "password" => bcrypt('12345678')
            ]);
        } else {
            // Tangani jika role 'admin' tidak ditemukan
            echo "Role 'admin' not found.";
            // atau lakukan sesuatu yang sesuai dengan logika aplikasi Anda
        }

        // Buat pengguna dengan role 'super_admin' jika role ditemukan
        if ($role_super_admin) {
            User::create([
                "name" => "super admin",
                "username" => "super_admin",
                "role_id" => $role_super_admin->id,
                "password" => bcrypt('12345678')
            ]);
        } else {
            // Tangani jika role 'super_admin' tidak ditemukan
            echo "Role 'super_admin' not found.";
            // atau lakukan sesuatu yang sesuai dengan logika aplikasi Anda
        }
    }
}
