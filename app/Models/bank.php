<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bank extends Model
{
    protected $table='banks';
  protected $fillable=['beneficiary_name','beneficiary_address','bank_nickname','bank_name',
  'bank_address','zip_code','country','currency','account_number', 'nickname', 'swift_code',
  'remarks','company_name','company_email','prefix','declaration_content','instructions_title',
  'instructions_content','logo','status'];
}
