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
        Schema::create('deployments', function (Blueprint $table) {
            $table->id();
            $table->integer('biodata_id');
            $table->integer('location_id')->index('deployment_table_ibfk_2');
            $table->integer('unit_id')->index('unit_id');
            $table->string('comment');
            $table->enum('status',['Active', 'Inactive'])->default('Active');
            $table->date('deployment_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deployments');
    }
};
