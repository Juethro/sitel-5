<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// ModelA.php
class ModelA extends Model {
    public function modelB() {
        return $this->hasOne(ModelB::class);
    }
}