<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public $timestamps = false;
    protected $fillable = ['booking_date', 'start_date', 'finish_date', 'id_guest', 'id_room'];
}
