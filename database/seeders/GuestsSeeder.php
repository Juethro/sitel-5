<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuestsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('guests')->insert([
            ['guest_name' => 'Asfa', 'guest_phone' => '1234567890', 'guest_address' =>'Pagesangan'],
            ['guest_name' => 'Kenang', 'guest_phone' => '2134567890', 'guest_address' =>'Bekasi'],
            ['guest_name' => 'Kridiw', 'guest_phone' => '3214567890', 'guest_address' =>'Solo'],
            // Tambahkan data lain sesuai kebutuhan
        ]);
    }
}
