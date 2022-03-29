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
        Schema::create('settlement_accounts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('merchant_fk_id');
            $table->string('beneficiary_name')->nullable();
            $table->string('beneficiary_nickname')->nullable();
            $table->string('beneficiary_address')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('bank_branch')->nullable();
            $table->string('bank_address')->nullable();
            $table->string('bank_country')->nullable();
            $table->string('bank_swift')->nullable();
            $table->string('account_number')->nullable();
            $table->string('currency')->nullable();
            $table->string('remarks')->nullable();
            $table->string('intermediary_bank_name')->nullable();
            $table->string('intermediary_bank_address')->nullable();
            $table->string('intermediary_bank_swift')->nullable();
            $table->string('intermediary_bank_details_remarks')->nullable();
            $table->string('upload_bank_statement');
            $table->foreign('merchant_fk_id')->references('id')->on('merchants');
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
        Schema::dropIfExists('settlement_accounts');
    }
};
