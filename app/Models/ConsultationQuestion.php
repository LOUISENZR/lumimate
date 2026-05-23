<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConsultationQuestion extends Model
{
    protected $fillable = ['module', 'question_code', 'question', 'dimension', 'question_order'];

    public function options()
    {
        return $this->hasMany(ConsultationQuestionOption::class, 'question_id');
    }
}
