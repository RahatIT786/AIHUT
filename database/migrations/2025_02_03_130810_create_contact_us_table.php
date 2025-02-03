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
        Schema::create('contact_us', function (Blueprint $table) {
            $table->id();
            $table->string('owner_name');
            $table->string('company_name');
            $table->string('email');
            $table->string('phone');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('partnership_type');
            $table->text('message');
            $table->integer('delete_status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_us');
    }
};
