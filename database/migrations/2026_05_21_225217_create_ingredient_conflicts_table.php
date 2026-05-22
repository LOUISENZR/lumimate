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
    Schema::create('ingredient_conflicts', function (Blueprint $table) {
        $table->id();

        $table->foreignId('ingredient_id_1')
            ->constrained('ingredients')
            ->onDelete('cascade');

        $table->foreignId('ingredient_id_2')
            ->constrained('ingredients')
            ->onDelete('cascade');

        $table->enum('status', [
            'SAFE',
            'CAUTION',
            'RISKY',
            'RECOMMENDED'
        ]);

        $table->text('scientific_explanation');

        $table->text('solution');

        $table->string('reference_source')->nullable();

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ingredient_conflicts');
    }
};
