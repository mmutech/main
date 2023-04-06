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
        Schema::table('grade_level', function (Blueprint $table) {
            $table->foreign(['designation_id'], 'grade_level_ibfk_1')->references(['id'])->on('designation')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['status'], 'grade_level_ibfk_2')->references(['statusID'])->on('status')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('grade_level', function (Blueprint $table) {
            $table->dropForeign('grade_level_ibfk_1');
            $table->dropForeign('grade_level_ibfk_2');
        });
    }
};
