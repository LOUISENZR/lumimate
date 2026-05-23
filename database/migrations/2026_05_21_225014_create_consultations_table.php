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
        Schema::create('consultations', function (Blueprint $table) {
            $table->id();

        $table->foreignId('user_id')
            ->constrained()
            ->onDelete('cascade');

        $table->string('skin_type')->nullable();

        $table->string('sensitivity_level')->nullable();

        $table->string('experience_level')->nullable();

        $table->boolean('pregnant')->default(false);

        $table->boolean('fragrance_allergy')->default(false);

        $table->boolean('dermatology_treatment')->default(false);

        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultations');
    }
};
