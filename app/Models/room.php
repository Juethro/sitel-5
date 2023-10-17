<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'rooms';
    
    public function booking()
    {
        return $this->hasMany(Booking::class, 'id_room');
    }

    // Definisikan relasi dengan RoomType Model
    public function roomType()
    {
        return $this->belongsTo(RoomType::class, 'id_roomtype');
    }
}