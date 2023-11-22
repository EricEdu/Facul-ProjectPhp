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
        Schema::create('products', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('thumbpainel')->nullable()->default(null);;
            $table->string('title')->nullable()->default(null);;
            $table->string('subtitle')->nullable()->default(null);;
            $table->boolean('IsFav')->nullable()->default(null);;
            $table->string('discount')->nullable()->default(null);;
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
