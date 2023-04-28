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
        Schema::create('deployments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('biodata_id');
            $table->integer('division_id');
            $table->integer('department_id');
            $table->integer('unit_id')->index('unit_id');
            $table->integer('location_id')->index('deployment_table_ibfk_2');
            $table->integer('area_office_id');
            $table->integer('feeder_id');
            $table->string('comment');
            $table->enum('status', ['Active', 'Inactive'])->default('Active');
            $table->date('deployment_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deployments');
    }
};
