<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('staff')->insert([
            ['staff_name' => 'Arya', 'staff_address' => 'Wisma Maju Mundur', 'phone_number' =>'2341234', 'id_department' => 1, 'position' => 'manager'],
            ['staff_name' => 'Nyon', 'staff_address' => 'Wisma Maju Mundur', 'phone_number' =>'2341234', 'id_department' => 2, 'position' => 'slave'],
            ['staff_name' => 'Ian Turu', 'staff_address' => 'Wisma Maju Mundur', 'phone_number' =>'2341234', 'id_department' => 3, 'position' => 'slave'],
            // Tambahkan data lain sesuai kebutuhan
        ]);
    }
}
