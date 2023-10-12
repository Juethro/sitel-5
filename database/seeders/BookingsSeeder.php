<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bookings')->insert([
            ['booking_date' => '2023-07-10', 'start_date' => '2023-07-20', 'finish_date' => '2023-07-21','total_pay' => 250000 ,'id_guest' => 1, 'id_room' => 1],
            ['booking_date' => '2023-08-13', 'start_date' => '2023-08-02', 'finish_date' => '2023-09-03','total_pay' => 400000 ,'id_guest' => 2, 'id_room' => 4],
            ['booking_date' => '2023-08-20', 'start_date' => '2023-08-30', 'finish_date' => '2023-09-01','total_pay' => 300000 ,'id_guest' => 3, 'id_room' => 8],
            // Tambahkan data lain sesuai kebutuhan
        ]);
    }
}