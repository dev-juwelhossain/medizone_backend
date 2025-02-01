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
        Schema::create('singledocs', function (Blueprint $table) {
            $table->id();
            $table->string('s_doc_picture')->nullable();
            $table->string('s_doc_name')->nullable();
            $table->string('s_doc_location')->nullable();
            $table->string('s_doc_position')->nullable();
            $table->string('s_doc_experience')->nullable();
           
            $table->string('s_doc_specialized')->nullable();
            $table->string('s_doc_degree')->nullable();

            $table->string('s_doc_hospital')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('singledocs');
    }
};
