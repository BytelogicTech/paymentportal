<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payouts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('merchant_fk_id');
            $table->unsignedBigInteger('customer_fk_id');
            $table->unsignedBigInteger('bank_account_to_fk_id');
            $table->double('payout_amount');
            $table->string('remarks')->nullable();
            $table->string('notes')->nullable();
            $table->string('reference_id')->nullable();
            $table->string('upload_invoice');
            $table->string('bank_processing_charges')->default(0);
            $table->string('date_paid')->nullable();
            $table->string('amount_returned')->default(0);
            $table->text('rejected_onhold_remarks')->nullable();
            $table->string('upload_reciept');
            $table->unsignedBigInteger('bank_account_from_fk_id');
            $table->string('status_of_payout');
            $table->string('upload_extra_document')->nullable();
            $table->timestamps();
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
        Schema::dropIfExists('payouts');
    }
};
