<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConsultationQuestionOption extends Model
{
    protected $fillable = ['question_id', 'option_text', 'fact_key', 'fact_value', 'system_impact', 'score'];

    public function question()
    {
        return $this->belongsTo(ConsultationQuestion::class, 'question_id');
    }
}
