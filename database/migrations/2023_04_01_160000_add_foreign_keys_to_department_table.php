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
        Schema::table('department', function (Blueprint $table) {
            $table->foreign(['division_id'], 'department_ibfk_1')->references(['id'])->on('division')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['status'], 'department_ibfk_2')->references(['statusID'])->on('status')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('department', function (Blueprint $table) {
            $table->dropForeign('department_ibfk_1');
            $table->dropForeign('department_ibfk_2');
        });
    }
};
