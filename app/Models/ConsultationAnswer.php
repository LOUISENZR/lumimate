<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConsultationAnswer extends Model
{
    protected $fillable = [
        'consultation_id',
        'question_id',
        'option_id',
    ];

    public function consultation()
    {
        return $this->belongsTo(Consultation::class);
    }

    public function question()
    {
        return $this->belongsTo(ConsultationQuestion::class, 'question_id');
    }

    public function option()
    {
        return $this->belongsTo(ConsultationQuestionOption::class, 'option_id');
    }
}