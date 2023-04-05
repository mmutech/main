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
        Schema::table('exit_int_question', function (Blueprint $table) {
            $table->foreign(['exit_type_id'], 'exit_int_question_ibfk_1')->references(['id'])->on('exit_type')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('exit_int_question', function (Blueprint $table) {
            $table->dropForeign('exit_int_question_ibfk_1');
        });
    }
};
