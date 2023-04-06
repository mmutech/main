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
        Schema::create('deployment', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('bio_id')->index('deployment_table_ibfk_3');
            $table->integer('location_id')->index('deployment_table_ibfk_2');
            $table->integer('unit_id')->index('unit_id');
            $table->string('comment');
            $table->integer('status');
            $table->date('deloyment_date');
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
        Schema::dropIfExists('deployment');
    }
};
