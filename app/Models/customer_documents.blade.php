<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer_documents extends Model
{
    protected $table='customer_documents';
    protected $fillable=['customer_fk_id','document_type','upload_file','parent_merchant'];
}
