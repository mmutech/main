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
        Schema::table('clearance', function (Blueprint $table) {
            $table->foreign(['exit_int_id'], 'clearance_ibfk_1')->references(['id'])->on('exit_initiation')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['cleared_by'], 'clearance_ibfk_3')->references(['bioID'])->on('bio_data')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['clr_status'], 'clearance_ibfk_2')->references(['statusID'])->on('status')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clearance', function (Blueprint $table) {
            $table->dropForeign('clearance_ibfk_1');
            $table->dropForeign('clearance_ibfk_3');
            $table->dropForeign('clearance_ibfk_2');
        });
    }
};
