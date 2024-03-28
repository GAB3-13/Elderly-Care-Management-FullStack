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
         // supervisors table
         Schema::create('supervisors', function (Blueprint $table) {
            $table->id('supervisorID');
            $table->unsignedBigInteger('individualID')->nullable();
            // $table->foreign('individualID')->references('individualID')->on('individuals');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supervisors');
    }
};
