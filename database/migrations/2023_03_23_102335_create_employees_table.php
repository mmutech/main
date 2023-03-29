<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->integer('staff_id')->nullable();
            $table->string('title')->nullable();
            $table->string('surname');
            $table->string('first_name');
            $table->string('other_name');
            $table->string('date_of_birth');
            $table->string('gender')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('phone');
            $table->string('official_mail')->nullable();
            $table->string('personal_mail');
            $table->string('address')->nullable();
            $table->string('contact_address')->nullable();
            $table->string('nationality')->nullable();
            $table->string('state')->nullable();
            $table->string('lga')->nullable();
            $table->string('religion')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
