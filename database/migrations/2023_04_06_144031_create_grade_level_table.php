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
        Schema::create('grade_level', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('description', 100);
            $table->integer('monthly_gross');
            $table->string('comment');
            $table->integer('designation_id')->index('designation_id');
            $table->integer('status')->index('status');
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
        Schema::dropIfExists('grade_level');
    }
};
