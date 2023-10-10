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
            ['department_name' => 'Departemen A', 'salary' => 5000],
            ['department_name' => 'Departemen B', 'salary' => 6000],
            ['department_name' => 'Departemen C', 'salary' => 5500],
            // Tambahkan data lain sesuai kebutuhan
        ]);
    }
}
