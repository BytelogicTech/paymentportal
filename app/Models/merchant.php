<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class merchant extends Model
{
    protected $table='merchants';
    protected $fillable=['merchant_name','bank_account_id','first_name','last_name','email','Country',
    'secondary_email','invoice_email','payout_notification_email',
    'settlement_notification_email','payout_notification_email_admin','settlement_notification_email_admin','incoming_percentage',
    'payout_percentage','alternate_payout_commission','b2b _percentage','rolling_reserve_percentage','rolling_reserve_release_days',
    'website','customer_support_number','invoice_remarks','upload_logo','enable_mail_for_customers','company_details_on_left',
    'invoice_details_on_right','b2b_access','status'];
}
