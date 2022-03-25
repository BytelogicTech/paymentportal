<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class settlement extends Model
{
    protected $table='settlements';
    protected $fillable=['merchant_fk_id','bank_account_from_fk_id','bank_account_to_fk_id','settlement_amount','upload_settlement_invoice','remarks','reference_id','rr_settlement','status_of_settlement'];
}
