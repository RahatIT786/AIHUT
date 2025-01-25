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
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->string('owner_name');
            $table->string('company_name');
            
            $table->string('mobile')->unique();
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('email')->unique();
            $table->string('partership_type');
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('user_status')->default(1);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partners');
    }
};
