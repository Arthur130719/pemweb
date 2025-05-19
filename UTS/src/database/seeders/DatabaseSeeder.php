<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Cek apakah user dengan email admin@admin.com sudah ada
        $user = User::where('email', 'admin@admin.com')->first();

        if (!$user) {
            // Jika belum ada, buat user baru
            $user = User::factory()->create([
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('password'), // Pastikan password di-hash
            ]);

            // Assign role super_admin (pastikan package Spatie/laravel-permission sudah terpasang)
            $user->assignRole('super_admin');
        }
    }
}
