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
        // patients table
        Schema::create('patients', function (Blueprint $table) {
            $table->id('patientID');
            $table->unsignedBigInteger('individualID')->nullable();
            $table->unsignedBigInteger('careGroupID')->nullable();
            $table->unsignedBigInteger('familyCode')->nullable();
            $table->date('admissionDate')->nullable();
            $table->string('morningMed', 255)->nullable();
            $table->string('afternoonMed', 255)->nullable();
            $table->string('nightMed', 255)->nullable();
            $table->string('breakfast', 255)->nullable();
            $table->string('lunch', 255)->nullable();
            $table->string('dinner', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
