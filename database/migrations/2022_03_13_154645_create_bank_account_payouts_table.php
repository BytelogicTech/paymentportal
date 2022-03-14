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
        Schema::create('bank_account_payouts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_fk_id');
            $table->string('beneficiary_name');
            $table->string('beneficiary_nickname');
            $table->string('beneficiary_address');
            $table->string('beneficiary_country');
            $table->string('bank_name');
            $table->string('bank_branch');
            $table->string('bank_address');
            $table->string('bank_country');
            $table->string('bank_swift');
            $table->string('account_number');
            $table->string('currency');
            $table->string('remarks');
            $table->string('intermediary_bank_name');
            $table->string('intermediary_bank_address');
            $table->string('intermediary_bank_swift');
            $table->string('intermediary_bank_details_remarks');
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
        Schema::dropIfExists('bank_account_payouts');
    }
};
