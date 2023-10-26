<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('departments')->insert([
            ['department_name' => 'manager', 'salary' => 5000],
            ['department_name' => 'receptionist', 'salary' => 6000],
            ['department_name' => 'human resources', 'salary' => 5500],
            ['department_name' => 'house keeper', 'salary' => 5500],
            // Tambahkan data lain sesuai kebutuhan
        ]);
    }
}
