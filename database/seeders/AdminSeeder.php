<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userRole = Role::create([
            'name' => 'user'
        ]);
        $adminRole = Role::create([
            'name' => 'admin'
        ]);
        User::create([
            'name' => 'Admin',
            'email' => 'admin@hsv.de',
            'password' => bcrypt('hsv1887tv'),
            'email_verified_at' => now(),
            'role_id' => $adminRole->id
        ]);
    }
}
