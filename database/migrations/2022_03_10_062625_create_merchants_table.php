<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchants', function (Blueprint $table) 
        {
            $table->id();
            $table->string('merchant_name');
            $table->unsignedBigInteger('bank_account_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('Country');
            $table->string('secondary_email')->nullable();
            $table->string('invoice_email')->nullable();
            $table->string('payout_notification_email')->nullable();
            $table->string('settlement_notification_email')->nullable();
            $table->string('payout_notification_email_admin')->nullable();
            $table->string('settlement_notification_email_admin')->nullable();
            $table->double('incoming_percentage');
            $table->double('payout_percentage');
            $table->integer('alternate_payout_commission')->nullable();
            $table->double('b2b_percentage');
            $table->double('rolling_reserve_percentage');
            $table->integer('rolling_reserve_release_days');
            $table->string('website')->nullable();
            $table->string('customer_support_number')->nullable();
            $table->text('invoice_remarks')->nullable();
            $table->string('upload_logo')->nullable();
            $table->boolean('enable_mail_for_customers');
            $table->boolean('company_details_on_left');
            $table->boolean('invoice_details_on_right');
            $table->boolean('b2b_access');
            $table->boolean('status');
            $table->timestamps();
            $table->foreign('bank_account_id')->references('id')->on('bank_accounts');
            $table->unsignedBigInteger('created_by');
            $table->foreign('created_by')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('merchants');
    }
};
