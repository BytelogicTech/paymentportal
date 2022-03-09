<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bank_account extends Model
{
    protected $table='bank_accounts';
  protected $fillable=['bank_id','currency','account_number','nick_name'];
}
