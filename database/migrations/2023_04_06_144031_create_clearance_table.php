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
        Schema::create('clearance', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('exit_int_id')->index('exit_int_id');
            $table->integer('cleared_by')->index('cleared_by');
            $table->integer('clr_status')->index('clr_status');
            $table->string('comment');
            $table->date('clr_date');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clearance');
    }
};
