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
            $table->integer('added_by')->index('added_by');
            $table->integer('unit_dept')->index('unit_dept');
            $table->integer('cleared_by')->index('cleared_by')->nullable();
            $table->integer('clr_status')->index('clr_status')->nullable();
            $table->string('comment')->nullable();
            $table->date('clr_date')->nullable();
            $table->integer('updated_by')->nullable();
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
