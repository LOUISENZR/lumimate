<?php

namespace App\Http\Controllers;

use App\Models\ConsultationQuestion;
use App\Models\Consultation;
use App\Models\ConsultationAnswer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConsultationController extends Controller
{
    public function index()
    {
        $questions = ConsultationQuestion::with('options')
            ->orderBy('question_order')
            ->get();

        $total = $questions->count();

        return view('consultation.index', compact('questions', 'total'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'answers' => 'required|array',
            'answers.*' => 'required|exists:consultation_question_options,id',
        ]);

        // Buat atau update consultation untuk user
        $consultation = Consultation::updateOrCreate(
            ['user_id' => Auth::id()],
            ['user_id' => Auth::id()]
        );

        // Simpan setiap jawaban
        foreach ($request->answers as $questionId => $optionId) {
            ConsultationAnswer::updateOrCreate(
                [
                    'consultation_id' => $consultation->id,
                    'question_id'     => $questionId,
                ],
                ['option_id' => $optionId]
            );
        }

        return redirect()->route('consultation.result');
    }
}