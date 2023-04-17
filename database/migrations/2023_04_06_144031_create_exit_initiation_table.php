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
        Schema::create('exit_initiation', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('exit_type_id')->index('exit_type_id');
            $table->string('comment');
            $table->date('rdate')->useCurrent();
            $table->date('ldate');
            $table->integer('status')->index('status');
            $table->string('adminComment')->nullable();
            $table->string('upload')->nullable();
            $table->integer('overallStatus')->index('status');
            $table->integer('added_by');
            $table->integer('updated_by')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exit_initiation');
    }
};
