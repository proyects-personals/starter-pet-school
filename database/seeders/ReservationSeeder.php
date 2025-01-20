<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reservations')->insert([
            [
                'user_id' => 1,
                'classroom_id' => 1,
                'school_id' => 1,
                'status' => 'pendiente',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'school_id' => 2,
                'classroom_id' => 2,
                'status' => 'aprobada',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'school_id' => 1,
                'classroom_id' => 3,
                'status' => 'rechazada',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
