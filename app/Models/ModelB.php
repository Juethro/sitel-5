<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// ModelB.php
class ModelB extends Model {
    public function modelC() {
        return $this->hasOne(ModelC::class);
    }
}