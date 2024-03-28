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
        // approvals table
        Schema::create('approvals', function (Blueprint $table) {
            $table->id('approvalID');
            $table->unsignedBigInteger('individualID')->nullable();
            // $table->foreign('individualID')->references('individualID')->on('individuals');
            $table->string('role', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('approvals');
    }
};
