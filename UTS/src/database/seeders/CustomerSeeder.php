<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Namespace DB diimpor

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Data customers yang akan disimpan
        $customers = [
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'phone' => '1234567890',
                'address' => '123 Street Name',
                'created_at' => now(), // Mengisi timestamp otomatis
                'updated_at' => now()
            ],
            [
                'name' => 'Jane Doe',
                'email' => 'jane@example.com',
                'phone' => '0987654321',
                'address' => '456 Another St',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        // Masukkan data ke tabel customers
        DB::table('customers')->insert($customers);
    }
}
