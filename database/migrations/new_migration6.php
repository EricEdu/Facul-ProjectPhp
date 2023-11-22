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
        Schema::create('clothes', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('thumbpainel')->nullable();
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->boolean('IsFav')->nullable();
            $table->string('discount')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clothes');
    }
};

