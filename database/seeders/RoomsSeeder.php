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
            ['room_number' => '103A', 'id_roomtype' => 1, 'status' => 'Ready'],
            ['room_number' => '102B', 'id_roomtype' => 2, 'status' => 'Ready'],
            ['room_number' => '85C', 'id_roomtype' => 3, 'status' => 'Ready'],
            // Tambahkan data lain sesuai kebutuhan
        ]);
    }
}
