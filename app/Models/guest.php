<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guest extends Model
{
    use HasFactory;
    use HasFactory;

    public $timestamps = false;
    protected $primaryKey = 'id_guest';
    protected $fillable = [
        'guest_name',
        'guest_phone',
        'guest_address',
    ];
}
