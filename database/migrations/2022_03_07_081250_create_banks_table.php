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
        Schema::create('banks', function (Blueprint $table) {
            $table->id();
            $table->string('beneficiary_name');
            $table->string('beneficiary_address');
            $table->string('bank_nickname')->nullable();
            $table->string('bank_name');
            $table->string('bank_address');
            $table->string('zip_code')->nullable();
            $table->string('country');
            // $table->string('currency');
            // $table->string('account_number');
            // $table->string('nickname');
            $table->string('swift_code');
            $table->string('remarks')->nullable();
            $table->string('company_name');
            $table->string('company_email')->nullable();
            $table->string('prefix');
            $table->string('declaration_content')->nullable();
            $table->string('instructions_title')->nullable();
            $table->string('instructions_content')->nullable();
            $table->string('logo');
            $table->boolean('status');

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
        Schema::dropIfExists('banks');
    }
};
