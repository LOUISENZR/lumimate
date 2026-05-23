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
        Schema::create('consultation_question_options', function (Blueprint $table) {
            $table->id();

        $table->foreignId('question_id')
            ->constrained('consultation_questions')
            ->onDelete('cascade');

        $table->text('option_text');

        $table->string('fact_key')->nullable();

        $table->string('fact_value')->nullable();

        $table->text('system_impact')->nullable();

        $table->integer('score')->nullable();

        $table->timestamps();;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultation_question_options');
    }
};
