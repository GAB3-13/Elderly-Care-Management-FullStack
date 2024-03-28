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
         // passwords table
         Schema::create('passwords', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('individualID')->nullable();
            // $table->foreign('individualID')->references('individualID')->on('individuals');
            $table->string('password', 255);
            $table->timestamps();
        });
        // AddPasswordForeignKeyToIndividualsTable
        // Schema::table('individuals', function (Blueprint $table) {
        //     $table->foreign('individualID')->references('individualID')->on('passwords');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('passwords');
    }
};
