<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // individuals table
        Schema::create('individuals', function (Blueprint $table) {
            $table->id('individualID');
            $table->integer('roleID');
            // $table->foreign('roleID')->references('id')->on('roles');
            $table->string('fName', 30);
            $table->string('lName', 30);
            $table->string('email', 255);
            $table->string('phone', 13);
            $table->date('dob');
            $table->boolean('approved')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {

        Schema::dropIfExists('individuals');
    }
};

