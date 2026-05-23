<?php

namespace Database\Seeders;
use App\Models\ConsultationQuestion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConsultationQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('consultation_answers')->truncate();
        DB::table('consultation_question_options')->truncate();
        DB::table('consultation_questions')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $questions = [

            // =========================
            // MODUL A — OILY VS DRY
            // =========================

            [
                'module'         => 'Modul A',
                'question_code'  => 'A1',
                'question'       => 'Bagaimana kondisi wajah Anda sekitar 2–3 jam setelah mencuci muka, tanpa menggunakan produk apapun?',
                'dimension'      => 'oily_dry',
                'question_order' => 1,
            ],

            [
                'module'         => 'Modul A',
                'question_code'  => 'A2',
                'question'       => 'Bagaimana tampilan pori-pori Anda, terutama di area hidung dan pipi?',
                'dimension'      => 'oily_dry',
                'question_order' => 2,
            ],

            [
                'module'         => 'Modul A',
                'question_code'  => 'A3',
                'question'       => 'Apakah Anda pernah mengalami reaksi berikut setelah menggunakan produk skincare baru?',
                'dimension'      => 'sensitive_resistant',
                'question_order' => 3,
            ],

            // =========================
            // MODUL B — SKIN PROBLEMS
            // =========================

            [
                'module'         => 'Modul B',
                'question_code'  => 'B1',
                'question'       => 'Pilih masalah kulit utama yang ingin Anda atasi (pilih semua yang sesuai):',
                'dimension'      => 'pigmented',
                'question_order' => 4,
            ],

            // =========================
            // MODUL C — SENSITIVE & EXPERIENCE
            // =========================

            [
                'module'         => 'Modul C',
                'question_code'  => 'C1',
                'question'       => 'Bagaimana reaksi kulit Anda ketika pertama kali mencoba produk skincare baru?',
                'dimension'      => 'sensitive_resistant',
                'question_order' => 5,
            ],

            [
                'module'         => 'Modul C',
                'question_code'  => 'C2',
                'question'       => 'Seberapa lama Anda sudah menggunakan bahan aktif skincare seperti Retinol, AHA, BHA, atau Vitamin C secara rutin?',
                'dimension'      => 'sensitive_resistant',
                'question_order' => 6,
            ],

            [
                'module'         => 'Modul C',
                'question_code'  => 'C3',
                'question'       => 'Jika Anda pernah menggunakan Retinol atau produk Vitamin A, bagaimana reaksi kulit Anda?',
                'dimension'      => 'sensitive_resistant',
                'question_order' => 7,
            ],

            [
                'module'         => 'Modul C',
                'question_code'  => 'C4',
                'question'       => 'Apakah Anda memiliki salah satu dari kondisi berikut ini?',
                'dimension'      => 'sensitive_resistant',
                'question_order' => 8,
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