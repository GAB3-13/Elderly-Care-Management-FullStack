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
        Schema::create('caregroup', function (Blueprint $table) {
            $table->id('careGroupID');
            $table->unsignedBigInteger('individualID')->nullable();
            // $table->foreign('individualID')->references('individualID')->on('individuals');
            $table->unsignedBigInteger('caregiverID')->nullable();
            // $table->foreign('caregiverID')->references('caregiverID')->on('caregivers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('caregroup');
    }
};
