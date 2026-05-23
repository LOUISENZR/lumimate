<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    protected $fillable = [
        'user_id',
        'skin_type',
        'sensitivity_level',
        'experience_level',
        'pregnant',
        'fragrance_allergy',
        'dermatology_treatment',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function answers()
    {
        return $this->hasMany(ConsultationAnswer::class);
    }
}