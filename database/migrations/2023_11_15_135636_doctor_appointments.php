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
         // doctor_appointments table
         Schema::create('doctor_appointments', function (Blueprint $table) {
            $table->id('appointmentID');
            $table->unsignedBigInteger('doctorID')->nullable();
            // $table->foreign('doctorID')->references('individualID')->on('individuals');
            $table->unsignedBigInteger('patientID')->nullable();
            // $table->foreign('patientID')->references('patientID')->on('patients');
            $table->date('scheduleDate')->nullable();
            $table->date('seenDate')->nullable();
            $table->string('comment', 255)->nullable();
            $table->string('newComment', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctor_appointments');
    }
};
