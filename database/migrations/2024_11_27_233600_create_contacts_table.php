<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('company')->nullable();  // Added
            $table->string('position')->nullable(); // Added
            $table->string('city')->nullable();     // Added
            $table->text('message');
            $table->string('replays')->nullable();
            $table->string('redirect')->nullable();
            $table->unsignedBigInteger('marketer_id')->nullable(); 
            $table->foreign('marketer_id')->references('id')->on('marketers')->onDelete('set null');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
