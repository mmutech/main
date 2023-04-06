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
        Schema::table('exit_initiation', function (Blueprint $table) {
            $table->foreign(['exit_type_id'], 'exit_initiation_ibfk_2')->references(['id'])->on('exit_type')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['status'], 'exit_initiation_ibfk_3')->references(['id'])->on('status')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('exit_initiation', function (Blueprint $table) {
            $table->dropForeign('exit_initiation_ibfk_2');
            $table->dropForeign('exit_initiation_ibfk_3');
        });
    }
};
