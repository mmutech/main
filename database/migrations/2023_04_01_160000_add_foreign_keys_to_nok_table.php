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
        Schema::table('nok', function (Blueprint $table) {
            $table->foreign(['bio_data_bioID'], 'fk_nok_bio_data1')->references(['bioID'])->on('bio_data')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nok', function (Blueprint $table) {
            $table->dropForeign('fk_nok_bio_data1');
        });
    }
};
