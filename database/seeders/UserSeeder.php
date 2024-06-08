<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creamos usuario admin
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => 'admin',
            'balance' => 9999999,
            'role' => 'admin'
        ]);
        // Creamos user1, con rol user
        User::create([
            'name' => 'User1',
            'email' => 'user1@user1.com',
            'password' => 'user1',
            'balance' => 999,
            'role' => 'user'
        ]);
        // Creamos user2, con rol user
        User::create([
            'name' => 'User2',
            'email' => 'user2@user2.com',
            'password' => 'user2',
            'balance' => 9999,
            'role' => 'user'
        ]);
    }
}
