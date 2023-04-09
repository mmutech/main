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
        Schema::create('bank', function (Blueprint $table) {
            $table->integer('bankID', true);
            $table->string('bank_name', 45)->nullable();
            $table->integer('account_number')->nullable();
            $table->string('pension_name', 45)->nullable();
            $table->string('RSA', 45)->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->integer('bio_data_bioID')->index('fk_bank_bio_data1_idx');
            $table->timestamp('created_at')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bank');
    }
};
