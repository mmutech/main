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
        Schema::table('unit', function (Blueprint $table) {
            $table->foreign(['department_id'], 'unit_ibfk_1')->references(['id'])->on('department')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['status'], 'unit_ibfk_2')->references(['statusID'])->on('status')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('unit', function (Blueprint $table) {
            $table->dropForeign('unit_ibfk_1');
            $table->dropForeign('unit_ibfk_2');
        });
    }
};
