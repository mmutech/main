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
            $table->string('nationaIDNumber')->unique();
            $table->string('surname')->nullable();
            $table->string('first_name')->nullable();
            $table->string('other_name')->nullable();
            $table->string('gender')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('phone')->nullable();
            $table->string('official_email')->nullable();
            $table->string('personal_email')->nullable();
            $table->string('nationality')->nullable();
            $table->string('address')->nullable();
            $table->string('contact_address')->nullable();
            $table->integer('state')->nullable();
            $table->integer('lga')->nullable();
            $table->string('religion')->nullable();
            $table->integer('job_role');
            $table->integer('grade_level');
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
        Schema::dropIfExists('biodatas');
    }
};
