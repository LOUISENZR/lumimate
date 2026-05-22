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
        Schema::create('consultation_answers', function (Blueprint $table) {
            $table->id();

        $table->foreignId('consultation_id')
            ->constrained()
            ->onDelete('cascade');

        $table->foreignId('question_id')
            ->constrained('consultation_questions')
            ->onDelete('cascade');

        $table->foreignId('option_id')
            ->constrained('consultation_question_options')
            ->onDelete('cascade');

        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultation_answers');
    }
};
