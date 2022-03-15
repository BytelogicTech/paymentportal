<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bank_account_payouts extends Model
{
    protected $table='bank_account_payouts';
    protected $fillable=['customer_fk_id','beneficiary_name','beneficiary_nickname','beneficiary_address','beneficiary_country',
    'bank_name','bank_branch','bank_address','bank_country','bank_swift','account_number','currency','remarks',
    'intermediary_bank_name','intermediary_bank_address','intermediary_bank_swift','intermediary_bank_details_remarks'];
}
