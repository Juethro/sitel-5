<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $primaryKey = 'id_staff';
    protected $fillable = [
        'staff_name', 'staff_address', 'phone_number', 'id_department', 'position'
    ];
}