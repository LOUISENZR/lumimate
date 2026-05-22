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
    Schema::create('ingredients', function (Blueprint $table) {
        $table->id();

        $table->string('ingredient_name');

        $table->string('category')->nullable();

        $table->text('function')->nullable();

        $table->enum('irritation_level', [
            'low',
            'medium',
            'high'
        ])->default('low');

        $table->integer('max_frequency')->default(7);

        $table->enum('usage_time', [
            'morning',
            'night',
            'both'
        ])->default('both');

        $table->text('important_notes')->nullable();

        $table->string('reference_source')->nullable();

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ingredients');
    }
};
