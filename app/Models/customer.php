<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $table='customers';
    protected $fillable=['first_name','last_name','email','phone','address','country','date_of_birth','id_number'];
}
