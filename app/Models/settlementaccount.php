<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class settlementaccount extends Model
{
    protected $table='settlement_accounts';
    protected $fillable=['merchant_fk_id','beneficiary_name','beneficiary_nickname','beneficiary_address',
    'bank_name','bank_branch','bank_address','bank_country','bank_swift','account_number','currency',
    'remarks','intermediary_bank_name','intermediary_bank_address',
    'intermediary_bank_swift','intermediary_bank_details_remarks','upload_bank_statement'];
}
