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
            ['room_number' => '101A', 'id_roomtype' => 1, 'status' => 'ready'],
            ['room_number' => '102A', 'id_roomtype' => 1, 'status' => 'ready'],
            ['room_number' => '103A', 'id_roomtype' => 1, 'status' => 'ready'],
            ['room_number' => '104A', 'id_roomtype' => 1, 'status' => 'ready'],
            ['room_number' => '105A', 'id_roomtype' => 1, 'status' => 'ready'],
            ['room_number' => '106A', 'id_roomtype' => 1, 'status' => 'ready'],
            ['room_number' => '107A', 'id_roomtype' => 1, 'status' => 'ready'],
            ['room_number' => '108A', 'id_roomtype' => 1, 'status' => 'ready'],
            ['room_number' => '109A', 'id_roomtype' => 1, 'status' => 'ready'],
            ['room_number' => '110A', 'id_roomtype' => 1, 'status' => 'ready'],
            ['room_number' => '201B', 'id_roomtype' => 2, 'status' => 'ready'],
            ['room_number' => '202B', 'id_roomtype' => 2, 'status' => 'ready'],
            ['room_number' => '203B', 'id_roomtype' => 2, 'status' => 'ready'],
            ['room_number' => '204B', 'id_roomtype' => 2, 'status' => 'ready'],
            ['room_number' => '205B', 'id_roomtype' => 2, 'status' => 'ready'],
            ['room_number' => '206B', 'id_roomtype' => 2, 'status' => 'ready'],
            ['room_number' => '207B', 'id_roomtype' => 2, 'status' => 'ready'],
            ['room_number' => '208B', 'id_roomtype' => 2, 'status' => 'ready'],
            ['room_number' => '209B', 'id_roomtype' => 2, 'status' => 'ready'],
            ['room_number' => '210B', 'id_roomtype' => 2, 'status' => 'ready'],
            ['room_number' => '301C', 'id_roomtype' => 3, 'status' => 'ready'],
            ['room_number' => '302C', 'id_roomtype' => 3, 'status' => 'ready'],
            ['room_number' => '303C', 'id_roomtype' => 3, 'status' => 'ready'],
            ['room_number' => '304C', 'id_roomtype' => 3, 'status' => 'ready'],
            ['room_number' => '305C', 'id_roomtype' => 3, 'status' => 'ready'],
            ['room_number' => '306C', 'id_roomtype' => 3, 'status' => 'ready'],
            ['room_number' => '307C', 'id_roomtype' => 3, 'status' => 'ready'],
            ['room_number' => '308C', 'id_roomtype' => 3, 'status' => 'ready'],
            ['room_number' => '309C', 'id_roomtype' => 3, 'status' => 'ready'],
            ['room_number' => '310C', 'id_roomtype' => 3, 'status' => 'ready'],
            ['room_number' => '401D', 'id_roomtype' => 4, 'status' => 'ready'],
            ['room_number' => '402D', 'id_roomtype' => 4, 'status' => 'ready'],
            ['room_number' => '403D', 'id_roomtype' => 4, 'status' => 'ready'],
            ['room_number' => '404D', 'id_roomtype' => 4, 'status' => 'ready'],
            ['room_number' => '405D', 'id_roomtype' => 4, 'status' => 'ready'],
            ['room_number' => '406D', 'id_roomtype' => 4, 'status' => 'ready'],
            ['room_number' => '407D', 'id_roomtype' => 4, 'status' => 'ready'],
            ['room_number' => '408D', 'id_roomtype' => 4, 'status' => 'ready'],
            ['room_number' => '409D', 'id_roomtype' => 4, 'status' => 'ready'],
            ['room_number' => '410D', 'id_roomtype' => 4, 'status' => 'ready'],
            
            // Tambahkan data lain sesuai kebutuhan
        ]);
    }
}
