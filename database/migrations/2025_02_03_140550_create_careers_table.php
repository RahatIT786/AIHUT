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
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
           
            $table->string('full_name');
            $table->string('address');
            $table->date('dob');
           
            $table->string('city');
            $table->string('state');
            $table->string('phone');
            $table->string('email');
            $table->string('area_of_interest'); 
            $table->string('skill_level'); 
            $table->string('others')->nullable();
            $table->longText('cover_letter');
            $table->longText('why_we_hire');
            $table->integer('delete_status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('careers');
    }
};
