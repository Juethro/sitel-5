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
            ['staff_name' => 'Arya', 'staff_address' => 'Wisma Maju Mundur', 'phone_number' =>'085717183826', 'id_department' => 1, 'position' => 'manager'],
            ['staff_name' => 'Nyon', 'staff_address' => 'Wisma Maju Mundur', 'phone_number' =>'085717183827', 'id_department' => 2, 'position' => 'receptionist'],
            ['staff_name' => 'Ian Turu', 'staff_address' => 'Wisma Maju Mundur', 'phone_number' =>'085717183829', 'id_department' => 2, 'position' => 'receptionist'],
            ['staff_name' => 'Fatih', 'staff_address' => 'Pasar Minggu', 'phone_number' =>'087787143133', 'id_department' => 1, 'position' => 'manager'],
            ['staff_name' => 'Jethro', 'staff_address' => 'Gubeng', 'phone_number' =>'087787143138', 'id_department' => 3, 'position' => 'human resources'],
            ['staff_name' => 'Kenang', 'staff_address' => 'Pasar Turi', 'phone_number' =>'085717183822', 'id_department' => 3, 'position' => 'human resources'],
            ['staff_name' => 'Davva', 'staff_address' => 'Wisma Permai', 'phone_number' =>'087787145152', 'id_department' => 3, 'position' => 'human resources'],
            ['staff_name' => 'Budi', 'staff_address' => 'Darmo', 'phone_number' =>'081290966898', 'id_department' => 4, 'position' => 'house keeper'],
            ['staff_name' => 'Nisa', 'staff_address' => 'Warakas', 'phone_number' =>'087787145154', 'id_department' => 4, 'position' => 'house keeper'],
            ['staff_name' => 'Nurul', 'staff_address' => 'Daan mogot', 'phone_number' =>'087787145159', 'id_department' => 4, 'position' => 'house keeper'],
            ['staff_name' => 'Darren', 'staff_address' => 'Gading Kirana', 'phone_number' =>'081290967878', 'id_department' => 1, 'position' => 'manager'],
            ['staff_name' => 'Ivan', 'staff_address' => 'Gading Putih', 'phone_number' =>'087787149096', 'id_department' => 2, 'position' => 'receptionist'],
            ['staff_name' => 'Vania', 'staff_address' => 'Kalijudan', 'phone_number' =>'08989876527', 'id_department' => 2, 'position' => 'receptionist'],
            ['staff_name' => 'Eagan', 'staff_address' => 'Gading Mercue', 'phone_number' =>'085727284852', 'id_department' => 2, 'position' => 'receptionist'],
            ['staff_name' => 'Ivan', 'staff_address' => 'Gading Putih', 'phone_number' =>'087787149096', 'id_department' => 2, 'position' => 'receptionist'],
            // Tambahkan data lain sesuai kebutuhan
        ]);
    }
}
