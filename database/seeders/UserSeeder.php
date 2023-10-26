<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            ['username' => 'akuadmin', 'password' => '$2y$10$1r4j0Dkry9qfmRmXv868tu6k5Y0cLj7AWdxQWdxtRihBFBYFQ4UOy', 'role' =>'admin'],
            ['username' => 'akuhrd', 'password' => '$2y$10$1r4j0Dkry9qfmRmXv868tu6k5Y0cLj7AWdxQWdxtRihBFBYFQ4UOy', 'role' =>'hrd'],
            ['username' => 'akuresepsionis', 'password' => '$2y$10$1r4j0Dkry9qfmRmXv868tu6k5Y0cLj7AWdxQWdxtRihBFBYFQ4UOy', 'role' =>'receptionist'],
            ['username' => 'akuroomservice', 'password' => '$2y$10$1r4j0Dkry9qfmRmXv868tu6k5Y0cLj7AWdxQWdxtRihBFBYFQ4UOy', 'role' =>'roomservice'],
            // Tambahkan data lain sesuai kebutuhan
        ]);
    }
}
