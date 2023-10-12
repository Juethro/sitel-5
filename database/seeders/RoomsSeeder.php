<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rooms')->insert([
            ['room_number' => '101', 'id_roomtype' => 1, 'status' => 'booked'],
            ['room_number' => '102', 'id_roomtype' => 1, 'status' => 'ready'],
            ['room_number' => '103', 'id_roomtype' => 1, 'status' => 'ready'],
            ['room_number' => '201', 'id_roomtype' => 2, 'status' => 'booked'],
            ['room_number' => '202', 'id_roomtype' => 2, 'status' => 'ready'],
            ['room_number' => '203', 'id_roomtype' => 3, 'status' => 'ready'],
            ['room_number' => '301', 'id_roomtype' => 3, 'status' => 'ready'],
            ['room_number' => '302', 'id_roomtype' => 3, 'status' => 'checkined'],
            // Tambahkan data lain sesuai kebutuhan
        ]);
    }
}
