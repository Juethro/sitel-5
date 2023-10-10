<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roomtypes')->insert([
            ['roomtype_name' => 'Super Deluxe', 'bedsize' => 'XL', 'bed_count' =>3, 'max_cap' => 4],
            ['roomtype_name' => 'Rodok Deluxe', 'bedsize' => 'L', 'bed_count' =>2, 'max_cap' => 2],
            ['roomtype_name' => 'Pokoke Turu', 'bedsize' => 'SM', 'bed_count' =>1, 'max_cap' => 1],
            // Tambahkan data lain sesuai kebutuhan
        ]);
    }
}
