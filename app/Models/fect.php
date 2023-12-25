<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fact extends Model
{
    protected $connection = 'dw_sitel';
    protected $table = 'fact_transcation';

}