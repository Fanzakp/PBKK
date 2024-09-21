<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    public function run()
    {
        Role::create(['name' => 'admin', 'description' => 'Administrator with full access']);
        Role::create(['name' => 'customer', 'description' => 'Regular customer with limited access']);
    }
}