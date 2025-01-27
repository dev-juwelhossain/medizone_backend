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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('degree')->nullable();
            $table->string('specialized')->nullable();
            $table->string('experience')->nullable();
            $table->string('hospital')->nullable();
            $table->string('appointment_time')->nullable();
            $table->string('address')->nullable();
            $table->string('consultation_fee')->nullable();
            $table->string('contact')->nullable();
            $table->string('abount_doctor')->nullable();
            $table->string('doctors_cat')->nullable();
            $table->string('e_hospital')->nullable();
            $table->string('e_degree')->nullable();
            $table->string('e_experience_year')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
