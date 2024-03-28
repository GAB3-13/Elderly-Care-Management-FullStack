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
        // payments table
        Schema::create('payments', function (Blueprint $table) {
            $table->id('paymentID');
            $table->unsignedBigInteger('patientID')->nullable();
            // $table->foreign('patientID')->references('patientID')->on('patients');
            $table->integer('totalDue')->nullable();
            $table->integer('payments')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
