<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Role::create([
            "name" => "super_admin"
        ]);

        Role::create([
            "name" => "admin"
        ]);

        Role::create([
            "name" => "staff" // Sesuaikan dengan enum('admin', 'super_admin', 'staff')
        ]);
    }
}