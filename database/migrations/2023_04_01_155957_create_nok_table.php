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
        Schema::create('nok', function (Blueprint $table) {
            $table->integer('nokID', true);
            $table->string('nok_name', 45)->nullable();
            $table->integer('nok_phone')->nullable();
            $table->string('nok_address', 45)->nullable();
            $table->string('nok_relationship', 45)->nullable();
            $table->dateTime('stamp_date')->nullable();
            $table->integer('bio_data_bioID')->index('fk_nok_bio_data1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nok');
    }
};
