<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('classrooms')->insert([
            [
                'school_id' => 1,
                'name' => 'Aula 1',
                'capacity' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'school_id' => 1,
                'name' => 'Aula 2',
                'capacity' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'school_id' => 2,
                'name' => 'Laboratorio 1',
                'capacity' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
