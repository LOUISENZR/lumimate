<?php

namespace Database\Seeders;
use App\Models\ConsultationQuestion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConsultationQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions = [

            // =========================
            // MODUL A — OILY VS DRY
            // =========================

            [
                'module' => 'Modul A',
                'question_code' => 'A1',
                'question' => 'Bagaimana kondisi wajah Anda sekitar 2–3 jam setelah mencuci muka?',
                'dimension' => 'oily_dry',
                'question_order' => 1,
            ],

            [
                'module' => 'Modul A',
                'question_code' => 'A2',
                'question' => 'Bagaimana tampilan pori-pori wajah Anda?',
                'dimension' => 'oily_dry',
                'question_order' => 2,
            ],

            [
                'module' => 'Modul A',
                'question_code' => 'A3',
                'question' => 'Bagaimana kondisi makeup/sunscreen Anda setelah beberapa jam?',
                'dimension' => 'oily_dry',
                'question_order' => 3,
            ],

            [
                'module' => 'Modul A',
                'question_code' => 'A4',
                'question' => 'Apakah wajah Anda terasa kering atau tertarik setelah mencuci muka?',
                'dimension' => 'oily_dry',
                'question_order' => 4,
            ],

            // =========================
            // MODUL B — SKIN PROBLEMS
            // =========================

            [
                'module' => 'Modul B',
                'question_code' => 'B1',
                'question' => 'Apakah Anda memiliki jerawat aktif?',
                'dimension' => 'extended',
                'question_order' => 5,
            ],

            [
                'module' => 'Modul B',
                'question_code' => 'B2',
                'question' => 'Apakah Anda memiliki bekas jerawat atau hiperpigmentasi?',
                'dimension' => 'pigmented',
                'question_order' => 6,
            ],

            [
                'module' => 'Modul B',
                'question_code' => 'B3',
                'question' => 'Apakah Anda mulai melihat garis halus atau kerutan?',
                'dimension' => 'wrinkle_prone',
                'question_order' => 7,
            ],

            [
                'module' => 'Modul B',
                'question_code' => 'B4',
                'question' => 'Apakah kulit Anda terlihat kusam?',
                'dimension' => 'pigmented',
                'question_order' => 8,
            ],

            // =========================
            // MODUL C — SENSITIVE
            // =========================

            [
                'module' => 'Modul C',
                'question_code' => 'C1',
                'question' => 'Apakah kulit Anda mudah merah setelah memakai skincare tertentu?',
                'dimension' => 'sensitive_resistant',
                'question_order' => 9,
            ],

            [
                'module' => 'Modul C',
                'question_code' => 'C2',
                'question' => 'Apakah kulit Anda sering terasa perih atau panas?',
                'dimension' => 'sensitive_resistant',
                'question_order' => 10,
            ],

            [
                'module' => 'Modul C',
                'question_code' => 'C3',
                'question' => 'Apakah Anda memiliki alergi terhadap fragrance atau essential oil?',
                'dimension' => 'sensitive_resistant',
                'question_order' => 11,
            ],

            [
                'module' => 'Modul C',
                'question_code' => 'C4',
                'question' => 'Apakah Anda sedang menjalani treatment dokter kulit?',
                'dimension' => 'sensitive_resistant',
                'question_order' => 12,
            ],

        ];

        foreach ($questions as $question) {

            ConsultationQuestion::updateOrInsert(

                ['question_code' => $question['question_code']],

                $question
            );
        }
    }
}