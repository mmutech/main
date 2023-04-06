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
            $table->integer('emp_id')->index('emp_id');
            $table->integer('exit_type_id')->index('exit_type_id');
            $table->string('comment');
            $table->date('rdate');
            $table->integer('status')->index('status');
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
        Schema::dropIfExists('exit_initiation');
    }
};
