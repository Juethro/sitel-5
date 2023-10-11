<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CheckInOutsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('checkinouts')->insert([
            ['id_booking' => '1'],
            ['id_booking' => '2'],
            ['id_booking' => '3'],
            // Tambahkan data lain sesuai kebutuhan
        ]);
    }
}
