<?php

namespace Database\Seeders;

use App\Models\RuleBase;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RuleBaseSeeder extends Seeder
{
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('rule_bases')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $rules = [

            // =========================
            // RULE REKOMENDASI — R01–R12
            // =========================

            [
                'rule_code'        => 'R01',
                'rule_category'    => 'recommendation',
                'conditions'       => json_encode([
                    'skin_type' => 'oily',
                    'concern'   => 'acne',
                ]),
                'actions'          => json_encode([
                    'recommendation' => 'Gunakan Salicylic Acid (BHA) sebagai serum atau toner utama',
                    'ingredient'     => 'BHA (Salicylic Acid)',
                ]),
                'certainty_factor' => 0.90,
                'reference_source' => 'AAD',
            ],

            [
                'rule_code'        => 'R02',
                'rule_category'    => 'recommendation',
                'conditions'       => json_encode([
                    'skin_type' => 'oily',
                    'concern'   => 'acne',
                ]),
                'actions'          => json_encode([
                    'recommendation' => 'Hindari moisturizer berbasis minyak berat (oil-based)',
                    'restriction'    => 'oil-based moisturizer',
                ]),
                'certainty_factor' => 0.85,
                'reference_source' => 'AAD',
            ],

            [
                'rule_code'        => 'R03',
                'rule_category'    => 'recommendation',
                'conditions'       => json_encode([
                    'skin_type' => 'sensitive',
                    'concern'   => 'acne',
                ]),
                'actions'          => json_encode([
                    'recommendation' => 'Gunakan Azelaic Acid sebagai alternatif Salicylic Acid',
                    'ingredient'     => 'Azelaic Acid',
                ]),
                'certainty_factor' => 0.80,
                'reference_source' => 'AAD',
            ],

            [
                'rule_code'        => 'R04',
                'rule_category'    => 'recommendation',
                'conditions'       => json_encode([
                    'skin_type' => 'dry',
                    'concern'   => 'aging',
                ]),
                'actions'          => json_encode([
                    'recommendation' => 'Rekomendasikan Retinol 0.025–0.05% dengan frekuensi rendah 1x per minggu',
                    'ingredient'     => 'Retinol',
                    'frequency'      => '1x/minggu',
                ]),
                'certainty_factor' => 0.85,
                'reference_source' => 'AAD',
            ],

            [
                'rule_code'        => 'R05',
                'rule_category'    => 'recommendation',
                'conditions'       => json_encode([
                    'skin_type' => 'dry',
                    'concern'   => 'dehydration',
                ]),
                'actions'          => json_encode([
                    'recommendation' => 'Prioritaskan Hyaluronic Acid dan Ceramide sebagai kunci rutinitas',
                    'ingredient'     => ['Hyaluronic Acid', 'Ceramide'],
                ]),
                'certainty_factor' => 0.92,
                'reference_source' => 'AAD',
            ],

            [
                'rule_code'        => 'R06',
                'rule_category'    => 'recommendation',
                'conditions'       => json_encode([
                    'concern'             => 'hyperpigmentation',
                    'skin_type_not'       => 'sensitive',
                ]),
                'actions'          => json_encode([
                    'recommendation' => 'Rekomendasikan Vitamin C (L-Ascorbic) 10–15% di pagi hari',
                    'ingredient'     => 'Vitamin C (L-Ascorbic Acid)',
                    'usage_time'     => 'morning',
                ]),
                'certainty_factor' => 0.88,
                'reference_source' => 'AAD',
            ],

            [
                'rule_code'        => 'R07',
                'rule_category'    => 'recommendation',
                'conditions'       => json_encode([
                    'concern'    => 'hyperpigmentation',
                    'skin_type'  => 'sensitive',
                ]),
                'actions'          => json_encode([
                    'recommendation' => 'Rekomendasikan Vitamin C derivative (Ascorbyl Glucoside) yang lebih stabil dan gentle',
                    'ingredient'     => 'Ascorbyl Glucoside',
                ]),
                'certainty_factor' => 0.82,
                'reference_source' => 'AAD',
            ],

            [
                'rule_code'        => 'R08',
                'rule_category'    => 'recommendation',
                'conditions'       => json_encode([
                    'concern'              => 'texture',
                    'experience_level_not' => 'beginner',
                ]),
                'actions'          => json_encode([
                    'recommendation' => 'Rekomendasikan AHA (Glycolic atau Lactic Acid) 5–10%, malam hari, maksimal 3x per minggu',
                    'ingredient'     => 'AHA (Glycolic/Lactic Acid)',
                    'usage_time'     => 'night',
                    'max_frequency'  => '3x/minggu',
                ]),
                'certainty_factor' => 0.87,
                'reference_source' => 'AAD',
            ],

            [
                'rule_code'        => 'R09',
                'rule_category'    => 'recommendation',
                'conditions'       => json_encode([
                    'concern'          => 'texture',
                    'experience_level' => 'beginner',
                ]),
                'actions'          => json_encode([
                    'recommendation' => 'Mulai dengan Lactic Acid (AHA paling gentle) 5%, 1x per minggu',
                    'ingredient'     => 'AHA (Glycolic/Lactic Acid)',
                    'concentration'  => '5%',
                    'max_frequency'  => '1x/minggu',
                ]),
                'certainty_factor' => 0.80,
                'reference_source' => 'AAD',
            ],

            [
                'rule_code'        => 'R10',
                'rule_category'    => 'restriction',
                'conditions'       => json_encode([
                    'pregnant' => true,
                ]),
                'actions'          => json_encode([
                    'recommendation' => 'Blokir Retinol dan Salicylic Acid dosis tinggi; rekomendasikan Azelaic Acid dan Vitamin C',
                    'block'          => ['Retinol', 'BHA (Salicylic Acid)'],
                    'recommend'      => ['Azelaic Acid', 'Vitamin C (L-Ascorbic Acid)'],
                    'disclaimer'     => 'Konsultasikan dengan dokter kandungan sebelum menggunakan produk skincare apapun',
                ]),
                'certainty_factor' => 1.00,
                'reference_source' => 'AAD',
            ],

            [
                'rule_code'        => 'R11',
                'rule_category'    => 'recommendation',
                'conditions'       => json_encode([
                    'skin_type' => 'combination',
                ]),
                'actions'          => json_encode([
                    'recommendation' => 'Terapkan zone-based approach: produk oily untuk T-zone, produk normal atau dry untuk U-zone',
                    'approach'       => 'zone-based',
                ]),
                'certainty_factor' => 0.78,
                'reference_source' => 'AAD',
            ],

            [
                'rule_code'        => 'R12',
                'rule_category'    => 'frequency',
                'conditions'       => json_encode([
                    'experience_level' => 'beginner',
                    'ingredient'       => 'Retinol',
                ]),
                'actions'          => json_encode([
                    'recommendation' => 'Set frekuensi retinol ke 1–2x per minggu dan tampilkan panduan retinization',
                    'max_frequency'  => '2x/minggu',
                    'guidance'       => 'retinization',
                ]),
                'certainty_factor' => 0.95,
                'reference_source' => 'AAD',
            ],

            // =========================
            // RULE FREKUENSI — F01–F09
            // =========================

            [
                'rule_code'        => 'F01',
                'rule_category'    => 'frequency',
                'conditions'       => json_encode([
                    'ingredient' => 'Sunscreen SPF 30+',
                ]),
                'actions'          => json_encode([
                    'recommendation' => 'Sunscreen WAJIB digunakan setiap pagi sebagai langkah terakhir',
                    'usage_time'     => 'morning',
                    'max_frequency'  => '7x/minggu',
                    'warning'        => 'Tampilkan WARNING merah jika tidak ada sunscreen di daftar produk pengguna',
                ]),
                'certainty_factor' => 1.00,
                'reference_source' => 'AAD',
            ],

            [
                'rule_code'        => 'F02',
                'rule_category'    => 'frequency',
                'conditions'       => json_encode([
                    'ingredient'       => 'Retinol',
                    'experience_level' => 'beginner',
                ]),
                'actions'          => json_encode([
                    'recommendation' => 'Mulai 1x per minggu selama 4 minggu; naikkan ke 2x jika tidak ada iritasi',
                    'usage_time'     => 'night',
                    'max_frequency'  => '2x/minggu',
                    'start_frequency'=> '1x/minggu',
                ]),
                'certainty_factor' => 0.95,
                'reference_source' => 'AAD',
            ],

            [
                'rule_code'        => 'F03',
                'rule_category'    => 'frequency',
                'conditions'       => json_encode([
                    'ingredient'       => 'Retinol',
                    'experience_level' => 'intermediate',
                ]),
                'actions'          => json_encode([
                    'recommendation' => 'Setelah toleransi terbentuk; pantau reaksi kulit',
                    'usage_time'     => 'night',
                    'max_frequency'  => '4x/minggu',
                ]),
                'certainty_factor' => 0.88,
                'reference_source' => 'AAD',
            ],

            [
                'rule_code'        => 'F04',
                'rule_category'    => 'frequency',
                'conditions'       => json_encode([
                    'ingredient' => 'AHA (Glycolic/Lactic Acid)',
                ]),
                'actions'          => json_encode([
                    'recommendation' => 'AHA tidak boleh digunakan malam yang sama dengan Retinol',
                    'usage_time'     => 'night',
                    'max_frequency'  => '3x/minggu',
                    'restriction'    => 'Tidak boleh digunakan malam yang sama dengan Retinol',
                ]),
                'certainty_factor' => 0.90,
                'reference_source' => 'AAD',
            ],

            [
                'rule_code'        => 'F05',
                'rule_category'    => 'frequency',
                'conditions'       => json_encode([
                    'ingredient' => 'BHA (Salicylic Acid)',
                ]),
                'actions'          => json_encode([
                    'recommendation' => 'Jika digunakan pagi hari WAJIB diikuti SPF',
                    'usage_time'     => 'both',
                    'max_frequency'  => '3x/minggu',
                    'warning'        => 'Wajib SPF jika digunakan pagi hari',
                ]),
                'certainty_factor' => 0.90,
                'reference_source' => 'AAD',
            ],

            [
                'rule_code'        => 'F06',
                'rule_category'    => 'frequency',
                'conditions'       => json_encode([
                    'ingredient' => 'Vitamin C (L-Ascorbic Acid)',
                ]),
                'actions'          => json_encode([
                    'recommendation' => 'Selalu apply sebelum SPF; simpan di wadah gelap atau opaque',
                    'usage_time'     => 'morning',
                    'max_frequency'  => '7x/minggu',
                    'storage'        => 'Simpan di wadah gelap atau opaque',
                ]),
                'certainty_factor' => 0.92,
                'reference_source' => 'INCIDecoder',
            ],

            [
                'rule_code'        => 'F07',
                'rule_category'    => 'frequency',
                'conditions'       => json_encode([
                    'ingredient' => 'Niacinamide',
                ]),
                'actions'          => json_encode([
                    'recommendation' => 'Aman digunakan setiap sesi pagi dan malam; tidak ada batas frekuensi',
                    'usage_time'     => 'both',
                    'max_frequency'  => '7x/minggu',
                ]),
                'certainty_factor' => 0.98,
                'reference_source' => 'INCIDecoder',
            ],

            [
                'rule_code'        => 'F08',
                'rule_category'    => 'frequency',
                'conditions'       => json_encode([
                    'ingredient' => 'Benzoyl Peroxide',
                ]),
                'actions'          => json_encode([
                    'recommendation' => 'Mulai dari konsentrasi terkecil 2.5%; kenakan setelah toner',
                    'usage_time'     => 'night',
                    'max_frequency'  => '7x/minggu',
                    'start_concentration' => '2.5%',
                ]),
                'certainty_factor' => 0.88,
                'reference_source' => 'AAD',
            ],

            [
                'rule_code'        => 'F09',
                'rule_category'    => 'restriction',
                'conditions'       => json_encode([
                    'ingredient_1' => 'AHA (Glycolic/Lactic Acid)',
                    'ingredient_2' => 'Retinol',
                    'same_session' => true,
                ]),
                'actions'          => json_encode([
                    'recommendation' => 'Skin cycling: Malam 1 = Exfoliant, Malam 2 = Retinol, Malam 3–4 = Recovery (Ceramide)',
                    'restriction'    => 'Tidak boleh digunakan dalam satu malam yang sama',
                    'skin_cycling'   => [
                        'night_1' => 'Exfoliant (AHA/BHA)',
                        'night_2' => 'Retinol',
                        'night_3' => 'Recovery (Ceramide)',
                        'night_4' => 'Recovery (Ceramide)',
                    ],
                ]),
                'certainty_factor' => 1.00,
                'reference_source' => 'AAD',
            ],

        ];

        foreach ($rules as $rule) {
            RuleBase::updateOrInsert(
                ['rule_code' => $rule['rule_code']],
                $rule
            );
        }
    }
}