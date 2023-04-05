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
        Schema::table('bio_data', function (Blueprint $table) {
            $table->foreign(['grade_level_id'], 'fk_bio_data_grade_level1')->references(['id'])->on('grade_level')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['status'], 'fk_bio_data_status1')->references(['statusID'])->on('status')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bio_data', function (Blueprint $table) {
            $table->dropForeign('fk_bio_data_grade_level1');
            $table->dropForeign('fk_bio_data_status1');
        });
    }
};
