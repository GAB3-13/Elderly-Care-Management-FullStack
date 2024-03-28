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
        // rosters table
        Schema::create('rosters', function (Blueprint $table) {
            $table->id('rosterID');
            $table->date('rosterDate');
            $table->unsignedBigInteger('supervisorID')->nullable();
            // $table->foreign('supervisorID')->references('supervisorID')->on('supervisors');
            $table->unsignedBigInteger('doctorID')->nullable();
            // $table->foreign('doctorID')->references('doctorID')->on('doctors');
            $table->unsignedBigInteger('caregiverID1')->nullable();
            $table->unsignedBigInteger('caregiverID2')->nullable();
            $table->unsignedBigInteger('caregiverID3')->nullable();

            // $table->foreign('caregiverID')->references('caregiverID')->on('caregivers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rosters');
    }
};
