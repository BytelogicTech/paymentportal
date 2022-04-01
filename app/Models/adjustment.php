<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adjustment extends Model
{
    protected $table='adjustments';
    protected $fillable=['merchant_fk_id','type','details','remarks','created_by'];
}
