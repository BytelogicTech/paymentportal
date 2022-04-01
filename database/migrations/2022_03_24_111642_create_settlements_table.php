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
        Schema::create('settlements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('merchant_fk_id');
            $table->unsignedBigInteger('bank_account_from_fk_id');
            $table->unsignedBigInteger('bank_account_to_fk_id');
            $table->string('settlement_amount');
            $table->string('upload_settlement_invoice')->nullable();
            $table->text('remarks')->nullable();
            $table->string('reference_id')->nullable();
            $table->boolean('rr_settlement')->nullable();
            $table->string('status_of_settlement')->nullable(); 
            $table->string('date_paid')->nullable();        
            $table->foreign('merchant_fk_id')->references('id')->on('merchants');
            $table->foreign('bank_account_to_fk_id')->references('id')->on('bank_account_payouts');
            $table->foreign('bank_account_from_fk_id')->references('id')->on('bank_accounts');
            $table->unsignedBigInteger('created_by');
            $table->foreign('created_by')->references('id')->on('users');
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settlements');
    }
};
