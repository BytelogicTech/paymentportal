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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->date('invoice_date');
            $table->string('invoice_number');
            $table->unsignedBigInteger('merchant_fk_id');
            $table->unsignedBigInteger('bank_account_fk_id');
            $table->unsignedBigInteger('customer_fk_id');
            $table->string('product_name');
            $table->double('product_price');
            $table->text('remarks')->nullable();
            $table->string('reference_id')->nullable();
            $table->string('upload_signed_invoice')->nullable();
            $table->string('proof_of_payment')->nullable();
            $table->date('date_recieved')->nullable();
            $table->double('amount_recieved')->nullable();
            $table->string('status_of_transaction');
            $table->string('type_of_transaction');
            $table->foreign('merchant_fk_id')->references('id')->on('merchants');
            $table->foreign('bank_account_fk_id')->references('id')->on('bank_accounts');
            $table->foreign('customer_fk_id')->references('id')->on('customers');
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
        Schema::dropIfExists('transactions');
    }
};
