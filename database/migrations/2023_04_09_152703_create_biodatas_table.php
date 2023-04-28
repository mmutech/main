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
        Schema::create('biodatas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('staff_id')->unique('staff_id_UNIQUE');
            $table->string('title')->nullable();
            $table->string('nationalIDNumber')->unique();
            $table->string('surname');
            $table->string('first_name');
            $table->string('other_name')->nullable();
            $table->string('gender');
            $table->date('date_of_birth');
            $table->string('marital_status');
            $table->string('phone');
            $table->string('official_email')->nullable();
            $table->string('personal_email');
            $table->string('nationality');
            $table->string('address');
            $table->string('contact_address')->nullable();
            $table->integer('state');
            $table->integer('lga');
            $table->string('religion')->nullable();
            $table->date('date_of_first_appointment');
            $table->date('date_of_confirmation')->nullable();
            $table->date('date_of_last_promotion')->nullable();
            $table->integer('job_role');
            $table->integer('grade_level');
            $table->string('disability_status');
            $table->string('disability_type')->nullable();
            $table->string('criminal_record');
            $table->string('debt_status');
            $table->integer('created_by');
            $table->integer('updated_by')->nullable();
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
        Schema::dropIfExists('biodatas');
    }
};
