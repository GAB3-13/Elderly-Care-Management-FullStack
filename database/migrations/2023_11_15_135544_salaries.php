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
         // salaries table
         Schema::create('salaries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('individualID')->nullable();
            // $table->foreign('individualID')->references('individualID')->on('individuals');
            $table->integer('salary')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salaries');
    }
};
