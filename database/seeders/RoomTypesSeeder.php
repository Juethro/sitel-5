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
            ['roomtype_name' => 'President Room', 'bedsize' => 'XL', 'bed_count' =>10, 'max_cap' => 5, 'price_per_night' => 1000000],
            ['roomtype_name' => 'Deluxe Room', 'bedsize' => 'L', 'bed_count' =>10, 'max_cap' => 4, 'price_per_night' => 800000],
            ['roomtype_name' => 'Junior Suite Room', 'bedsize' => 'M', 'bed_count' =>10, 'max_cap' => 2, 'price_per_night' => 400000],
            ['roomtype_name' => 'Single Room', 'bedsize' => 'S', 'bed_count' =>10, 'max_cap' => 1, 'price_per_night' => 250000],
            // Tambahkan data lain sesuai kebutuhan
        ]);
    }
}
