<?php

namespace Database\Seeders;
use App\Models\IngredientConflict;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IngredientConflictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('ingredient_conflicts')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $conflicts = [

            // =====================
            // RISKY — Harus Dihindari
            // =====================

            [
                'ingredient_id_1'        => 1, // Retinol
                'ingredient_id_2'        => 3, // AHA
                'status'                 => 'RISKY',
                'scientific_explanation' => 'Kombinasi dual exfoliant yang dapat menyebabkan over-exfoliation syndrome; skin barrier rusak dalam 14–28 hari pemakaian bersamaan.',
                'solution'               => 'Gunakan skin cycling: Malam 1 = Retinol, Malam 2 = AHA/BHA, Malam 3–4 = Recovery (Ceramide). Jangan gunakan dalam satu sesi.',
                'reference_source'       => 'AAD',
            ],

            [
                'ingredient_id_1'        => 1, // Retinol
                'ingredient_id_2'        => 4, // BHA
                'status'                 => 'RISKY',
                'scientific_explanation' => 'Kombinasi retinol dengan BHA (Salicylic Acid) menyebabkan over-exfoliation dan kerusakan skin barrier secara signifikan.',
                'solution'               => 'Pisahkan ke malam berbeda. Skin cycling: Malam 1 = Retinol, Malam 2 = BHA. Tidak boleh digunakan bersamaan.',
                'reference_source'       => 'AAD',
            ],

            [
                'ingredient_id_1'        => 1, // Retinol
                'ingredient_id_2'        => 5, // Vitamin C
                'status'                 => 'RISKY',
                'scientific_explanation' => 'pH tidak kompatibel — Vitamin C optimal pada pH <3.5 sedangkan Retinol optimal pada pH 6–7. Keduanya mendestabilisasi satu sama lain jika digunakan bersamaan.',
                'solution'               => 'Vitamin C di pagi hari, Retinol di malam hari. TIDAK boleh digunakan dalam satu sesi atau layer yang sama.',
                'reference_source'       => 'AAD',
            ],

            [
                'ingredient_id_1'        => 8, // Benzoyl Peroxide
                'ingredient_id_2'        => 1, // Retinol
                'status'                 => 'RISKY',
                'scientific_explanation' => 'Benzoyl Peroxide mengoksidasi retinol sehingga retinol menjadi tidak efektif. Kombinasi ini juga meningkatkan risiko iritasi secara signifikan.',
                'solution'               => 'Gunakan Benzoyl Peroxide di pagi hari dan Retinol di malam hari. Jangan gunakan dalam satu sesi.',
                'reference_source'       => 'AAD',
            ],

            [
                'ingredient_id_1'        => 3, // AHA
                'ingredient_id_2'        => 5, // Vitamin C
                'status'                 => 'RISKY',
                'scientific_explanation' => 'Tiga bahan eksfoliatif/asam sekaligus (AHA + BHA + Vitamin C) menciptakan lingkungan terlalu asam dan merusak skin barrier.',
                'solution'               => 'Pisahkan ke sesi berbeda. Vitamin C di pagi hari, AHA/BHA di malam hari. Jangan gunakan triple combination ini.',
                'reference_source'       => 'INCIDecoder',
            ],

            // =====================
            // CAUTION — Perlu Hati-hati
            // =====================

            [
                'ingredient_id_1'        => 5, // Vitamin C
                'ingredient_id_2'        => 3, // AHA
                'status'                 => 'CAUTION',
                'scientific_explanation' => 'Keduanya bersifat asam dan dapat meningkatkan sensitivitas kulit tertentu jika digunakan bersamaan. Kulit normal-oily biasanya bisa toleransi jika dipisah sesi.',
                'solution'               => 'Vitamin C di pagi hari, AHA di malam hari. Hindari kombinasi ini jika kulit sensitif.',
                'reference_source'       => 'INCIDecoder',
            ],

            [
                'ingredient_id_1'        => 8, // Benzoyl Peroxide
                'ingredient_id_2'        => 5, // Vitamin C
                'status'                 => 'CAUTION',
                'scientific_explanation' => 'Benzoyl Peroxide dapat mengoksidasi Vitamin C hingga 70%, mengurangi efektivitas antioksidan Vitamin C secara signifikan.',
                'solution'               => 'Gunakan di sesi berbeda. Vitamin C di pagi hari, Benzoyl Peroxide di malam hari.',
                'reference_source'       => 'AAD',
            ],

            [
                'ingredient_id_1'        => 10, // Peptides
                'ingredient_id_2'        => 3,  // AHA
                'status'                 => 'CAUTION',
                'scientific_explanation' => 'AHA/BHA dapat mendegradasi peptida sebelum terserap ke kulit, mengurangi efektivitas peptida secara keseluruhan.',
                'solution'               => 'Tunggu 20–30 menit setelah AHA/BHA kering sebelum mengaplikasikan peptida, atau pisahkan ke sesi berbeda.',
                'reference_source'       => 'INCIDecoder',
            ],

            [
                'ingredient_id_1'        => 10, // Peptides
                'ingredient_id_2'        => 4,  // BHA
                'status'                 => 'CAUTION',
                'scientific_explanation' => 'BHA dapat mendegradasi peptida sebelum terserap, sama seperti AHA. Efektivitas peptida berkurang jika digunakan bersamaan.',
                'solution'               => 'Tunggu 20–30 menit setelah BHA kering sebelum mengaplikasikan peptida, atau pisahkan ke sesi berbeda.',
                'reference_source'       => 'INCIDecoder',
            ],

            [
                'ingredient_id_1'        => 1, // Retinol
                'ingredient_id_2'        => 5, // Vitamin C
                'status'                 => 'CAUTION',
                'scientific_explanation' => 'Jika sudah dipisah pagi/malam maka kombinasi ini AMAN. Hanya bermasalah jika digunakan dalam satu langkah atau layer yang sama.',
                'solution'               => 'Pastikan Vitamin C di pagi hari dan Retinol di malam hari. Jangan layer bersamaan.',
                'reference_source'       => 'AAD',
            ],

            // =====================
            // SAFE — Aman & Sinergis
            // =====================

            [
                'ingredient_id_1'        => 2,  // Niacinamide
                'ingredient_id_2'        => 7,  // Ceramide
                'status'                 => 'SAFE',
                'scientific_explanation' => 'Kombinasi sinergis terbaik untuk barrier repair. Niacinamide memperkuat tight junction sel; Ceramide mengisi lipid bilayer kulit.',
                'solution'               => 'Direkomendasikan untuk semua jenis kulit. Gunakan bersama tanpa batasan.',
                'reference_source'       => 'INCIDecoder',
            ],

            [
                'ingredient_id_1'        => 6,  // Hyaluronic Acid
                'ingredient_id_2'        => 7,  // Ceramide
                'status'                 => 'SAFE',
                'scientific_explanation' => 'Hyaluronic Acid menarik air ke kulit; Ceramide mengunci air tersebut. Kombinasi hidrasi dan barrier paling optimal yang tersedia.',
                'solution'               => 'Aman digunakan bersama kapan saja. Ideal untuk kulit kering dan sensitif sekalipun.',
                'reference_source'       => 'INCIDecoder',
            ],

            [
                'ingredient_id_1'        => 2,  // Niacinamide
                'ingredient_id_2'        => 6,  // Hyaluronic Acid
                'status'                 => 'SAFE',
                'scientific_explanation' => 'Tidak ada interaksi negatif. Niacinamide bekerja untuk brightening sementara Hyaluronic Acid bekerja untuk hidrasi — mekanisme berbeda, tidak saling mengganggu.',
                'solution'               => 'Ideal untuk rutinitas pagi dengan banyak masalah kulit. Gunakan bersama tanpa batasan.',
                'reference_source'       => 'INCIDecoder',
            ],

            [
                'ingredient_id_1'        => 1,  // Retinol
                'ingredient_id_2'        => 7,  // Ceramide
                'status'                 => 'SAFE',
                'scientific_explanation' => 'Ceramide membantu meminimalkan iritasi yang ditimbulkan retinol dengan memperkuat skin barrier selama proses retinization.',
                'solution'               => 'Direkomendasikan: gunakan Ceramide moisturizer setelah Retinol serum di malam hari.',
                'reference_source'       => 'AAD',
            ],

            [
                'ingredient_id_1'        => 11, // Centella Asiatica
                'ingredient_id_2'        => 2,  // Niacinamide
                'status'                 => 'SAFE',
                'scientific_explanation' => 'Keduanya bersifat soothing dan anti-inflamasi. Tidak ada interaksi negatif; justru saling memperkuat efek menenangkan kulit.',
                'solution'               => 'Kombinasi ideal untuk acne-prone dan sensitive skin. Gunakan bersama tanpa batasan.',
                'reference_source'       => 'INCIDecoder',
            ],

            [
                'ingredient_id_1'        => 5,  // Vitamin C
                'ingredient_id_2'        => 10, // Vitamin E (diganti Peptides karena tidak ada Vit E)
                'status'                 => 'SAFE',
                'scientific_explanation' => 'Vitamin C dan Peptides bekerja secara sinergis untuk mendukung produksi kolagen — Vitamin C sebagai kofaktor sintesis kolagen, Peptides sebagai stimulator langsung.',
                'solution'               => 'Gunakan Vitamin C serum diikuti Peptides serum di pagi hari. Tidak ada batasan.',
                'reference_source'       => 'INCIDecoder',
            ],

            // =====================
            // RECOMMENDED — Dianjurkan Bersama
            // =====================

            [
                'ingredient_id_1'        => 5,  // Vitamin C
                'ingredient_id_2'        => 12, // Sunscreen SPF 30+
                'status'                 => 'RECOMMENDED',
                'scientific_explanation' => 'Vitamin C sebagai antioksidan yang menetralisir radikal bebas + SPF sebagai physical barrier UV = perlindungan ganda terbaik di pagi hari.',
                'solution'               => 'Selalu gunakan Vitamin C sebelum SPF di pagi hari. Ini adalah kombinasi antioksidan standar emas.',
                'reference_source'       => 'AAD',
            ],

            [
                'ingredient_id_1'        => 3,  // AHA
                'ingredient_id_2'        => 12, // Sunscreen SPF 30+
                'status'                 => 'RECOMMENDED',
                'scientific_explanation' => 'Setelah eksfoliasi AHA, kulit lebih sensitif terhadap UV. SPF di pagi berikutnya adalah langkah wajib untuk mencegah hiperpigmentasi.',
                'solution'               => 'Wajib gunakan SPF setiap pagi setelah malam pemakaian AHA.',
                'reference_source'       => 'AAD',
            ],

            [
                'ingredient_id_1'        => 4,  // BHA
                'ingredient_id_2'        => 12, // Sunscreen SPF 30+
                'status'                 => 'RECOMMENDED',
                'scientific_explanation' => 'Sama seperti AHA, BHA meningkatkan sensitivitas kulit terhadap UV. SPF wajib digunakan pagi hari setelah pemakaian BHA.',
                'solution'               => 'Wajib gunakan SPF setiap pagi setelah malam pemakaian BHA.',
                'reference_source'       => 'AAD',
            ],

            [
                'ingredient_id_1'        => 1,  // Retinol
                'ingredient_id_2'        => 12, // Sunscreen SPF 30+
                'status'                 => 'RECOMMENDED',
                'scientific_explanation' => 'Retinol meningkatkan sensitivitas kulit terhadap UV secara signifikan. SPF di pagi berikutnya adalah MANDATORY untuk mencegah kerusakan kulit.',
                'solution'               => 'Wajib gunakan SPF setiap pagi setelah malam pemakaian Retinol. Tanpa SPF, manfaat Retinol dapat berbalik merugikan kulit.',
                'reference_source'       => 'AAD',
            ],

            [
                'ingredient_id_1'        => 2,  // Niacinamide
                'ingredient_id_2'        => 4,  // BHA (Salicylic Acid)
                'status'                 => 'RECOMMENDED',
                'scientific_explanation' => 'Salicylic Acid mengatasi acne dari dalam pori; Niacinamide meredakan kemerahan dan inflamasi akibatnya. Kombinasi anti-acne paling efektif dan minim iritasi.',
                'solution'               => 'Gunakan BHA toner/serum lalu aplikasikan Niacinamide serum setelahnya. Kombinasi ini dianjurkan untuk acne-prone skin.',
                'reference_source'       => 'INCIDecoder',
            ],

        ];

        foreach ($conflicts as $conflict) {

            IngredientConflict::updateOrInsert(

                [
                    'ingredient_id_1' => $conflict['ingredient_id_1'],
                    'ingredient_id_2' => $conflict['ingredient_id_2'],
                ],

                $conflict

            );

        }
    }
}
