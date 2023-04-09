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
        Schema::table('deployment', function (Blueprint $table) {
            $table->foreign(['location_id'], 'deployment_ibfk_2')->references(['id'])->on('location')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['unit_id'], 'deployment_ibfk_4')->references(['id'])->on('unit')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['bio_id'], 'deployment_ibfk_3')->references(['bioID'])->on('bio_data')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('deployment', function (Blueprint $table) {
            $table->dropForeign('deployment_ibfk_2');
            $table->dropForeign('deployment_ibfk_4');
            $table->dropForeign('deployment_ibfk_3');
        });
    }
};
