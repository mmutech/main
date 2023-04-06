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
        Schema::create('biodatas', function (Blueprint $table) {
            $table->id();
            $table->string('staff_id')->unique('staff_id_UNIQUE');
            $table->string('title')->nullable();
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
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biodatas');
    }
};
