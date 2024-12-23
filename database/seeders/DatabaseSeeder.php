<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seeder untuk akun admin
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'roles' => 1, // 1 untuk admin
            'password' => bcrypt('12345678'), 
        ]);

        // Seeder untuk akun author
        User::create([
            'name' => 'Ade',
            'email' => 'Ade@gmail.com',
            'roles' => 2, // 0 untuk author
            'password' => bcrypt('12345678'),
        ]);
    }
}
