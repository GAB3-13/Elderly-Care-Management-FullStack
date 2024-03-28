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
        // home_care table
        Schema::create('home_care', function (Blueprint $table) {
            $table->id('appointmentID');
            $table->unsignedBigInteger('patientID')->nullable();
            $table->unsignedBigInteger('doctorID')->nullable();
            $table->date('appointmentDate')->nullable();
            $table->unsignedBigInteger('caregiverID');
            $table->string('morningMeds', 255)->nullable();
            $table->string('afternoonMeds', 255)->nullable();
            $table->string('nightMeds', 255)->nullable();
            $table->string('breakfast', 255)->nullable();
            $table->string('lunch', 255)->nullable();
            $table->string('dinner', 255)->nullable();
            $table->char('check_morningMeds', 1)->nullable();
            $table->char('check_afternoonMeds', 1)->nullable();
            $table->char('check_nightMeds', 1)->nullable();
            $table->char('check_breakfast', 1)->nullable();
            $table->char('check_lunch', 1)->nullable();
            $table->char('check_dinner', 1)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_care');
    }
};
