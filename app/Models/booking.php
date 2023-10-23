<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'bookings'; // Nama tabel di basis data
    protected $primaryKey = 'id_booking';
    protected $fillable = [
        'booking_date', 'start_date', 'finish_date', 'total_pay','id_guest', 'id_room'
    ];

    // Jika diperlukan, Anda dapat menambahkan metode-metode lain di sini
}