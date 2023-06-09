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
            $table->bigIncrements('id');
            $table->integer('biodata_id');
            $table->string('bank_name');
            $table->string('account_name');
            $table->string('account_number');
            $table->string('pfa_name')->nullable();
            $table->string('pfa_account_name')->nullable();
            $table->string('RSA');
            $table->string('mortgage_bank_name')->nullable();
            $table->string('mortgage_account_name')->nullable();
            $table->string('mortgage_account_number')->nullable();
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
