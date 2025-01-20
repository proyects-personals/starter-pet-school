<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('schools')->insert([
            [
                'name' => 'Escuela Primaria Central',
                'description' => 'Escuela primaria con alto rendimiento académico.',
                'address' => 'Av. Siempre Viva 123',
                'phone_number' => '123-456-7890',
                'email' => 'contacto@primariacentral.com',
                'image' => 'school1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Instituto Secundario Los Andes',
                'description' => 'Instituto de educación secundaria con enfoque en ciencias.',
                'address' => 'Calle Falsa 456',
                'phone_number' => '987-654-3210',
                'email' => 'info@institutolosandes.com',
                'image' => 'school2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
