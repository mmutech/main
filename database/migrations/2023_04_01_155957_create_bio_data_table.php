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
        Schema::create('bio_data', function (Blueprint $table) {
            $table->integer('bioID', true);
            $table->string('staff_name', 45)->nullable();
            $table->integer('staff_id')->nullable()->unique('staff_id_UNIQUE');
            $table->string('gender', 45)->nullable();
            $table->date('dob')->nullable();
            $table->integer('age')->nullable();
            $table->string('marital_status', 45)->nullable();
            $table->integer('phone')->nullable();
            $table->string('official_email', 45)->nullable();
            $table->string('personel_email', 45)->nullable();
            $table->integer('nationality')->nullable();
            $table->integer('state')->nullable();
            $table->integer('lga')->nullable();
            $table->string('religion', 45)->nullable();
            $table->integer('title')->nullable();
            $table->date('appointment_date')->nullable();
            $table->date('confirmation_date')->nullable();
            $table->date('upgrade_promotion')->nullable();
            $table->integer('genotype')->nullable();
            $table->integer('qualification')->nullable();
            $table->string('institution', 45)->nullable();
            $table->string('professional_cert', 45)->nullable();
            $table->integer('blood_group')->nullable();
            $table->string('contact_address', 45)->nullable();
            $table->string('years_in_service', 45)->nullable();
            $table->integer('cash_point')->nullable();
            $table->integer('ccrm_location')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->integer('grade_level_id')->index('fk_bio_data_grade_level1_idx');
            $table->integer('status')->index('fk_bio_data_status1_idx');
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bio_data');
    }
};
