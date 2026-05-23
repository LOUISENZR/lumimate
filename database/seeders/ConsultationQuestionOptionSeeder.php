<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\ConsultationQuestionOption;
class ConsultationQuestionOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('consultation_answers')->truncate();
        DB::table('consultation_question_options')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $options = [

            // =========================
            // A1 — Kondisi Kulit Setelah Cuci Muka
            // question_id = 1
            // =========================

            [
                'question_id'     => 1,
                'option_text'     => 'Berminyak di seluruh wajah (T-zone dan pipi)',
                'fact_key'        => 'skin_type',
                'fact_value'      => 'oily',
                'system_impact'   => 'Produksi sebum tinggi di semua zona; rekomendasikan BHA dan produk oil-free',
                'score'           => 4,
            ],

            [
                'question_id'     => 1,
                'option_text'     => 'Berminyak di dahi, hidung, dagu; pipi normal atau kering',
                'fact_key'        => 'skin_type',
                'fact_value'      => 'combination',
                'system_impact'   => 'T-zone oily, U-zone normal/dry; terapkan zone-based approach',
                'score'           => 3,
            ],

            [
                'question_id'     => 1,
                'option_text'     => 'Wajah terasa kencang, tertarik, kadang mengelupas',
                'fact_key'        => 'skin_type',
                'fact_value'      => 'dry',
                'system_impact'   => 'Produksi lipid kurang; prioritaskan Hyaluronic Acid dan Ceramide',
                'score'           => 1,
            ],

            [
                'question_id'     => 1,
                'option_text'     => 'Tidak ada keluhan; wajah nyaman dan seimbang',
                'fact_key'        => 'skin_type',
                'fact_value'      => 'normal',
                'system_impact'   => 'Keseimbangan sebum dan hidrasi optimal; fleksibel untuk berbagai produk',
                'score'           => 2,
            ],

            [
                'question_id'     => 1,
                'option_text'     => 'Cepat merah, gatal, atau bereaksi terhadap produk baru',
                'fact_key'        => 'skin_type',
                'fact_value'      => 'sensitive',
                'system_impact'   => 'Flag sensitif; diproses lebih lanjut di Modul C; hindari bahan irritation_level=high',
                'score'           => 0,
            ],

            // =========================
            // A2 — Tampilan Pori-pori
            // question_id = 2
            // =========================

            [
                'question_id'     => 2,
                'option_text'     => 'Pori-pori terlihat jelas dan besar',
                'fact_key'        => 'large_pores',
                'fact_value'      => 'true',
                'system_impact'   => 'Perkuat rekomendasi BHA dan Niacinamide; indikasi oily atau combination skin',
                'score'           => 2,
            ],

            [
                'question_id'     => 2,
                'option_text'     => 'Pori-pori sedang, terlihat jika dilihat dekat',
                'fact_key'        => 'large_pores',
                'fact_value'      => 'false',
                'system_impact'   => 'Netral; tidak mempengaruhi klasifikasi utama',
                'score'           => 1,
            ],

            [
                'question_id'     => 2,
                'option_text'     => 'Pori-pori hampir tidak terlihat',
                'fact_key'        => 'large_pores',
                'fact_value'      => 'false',
                'system_impact'   => 'Kemungkinan normal atau dry skin',
                'score'           => 0,
            ],

            // =========================
            // A3 — Riwayat Reaksi Produk
            // question_id = 3
            // =========================

            [
                'question_id'     => 3,
                'option_text'     => 'Kemerahan yang berlangsung lebih dari 1 jam',
                'fact_key'        => 'sensitive',
                'fact_value'      => 'true',
                'system_impact'   => 'Flag sensitive: true; batasi bahan dengan irritation_level=high',
                'score'           => 3,
            ],

            [
                'question_id'     => 3,
                'option_text'     => 'Rasa perih, terbakar, atau gatal segera setelah aplikasi',
                'fact_key'        => 'reactive',
                'fact_value'      => 'true',
                'system_impact'   => 'Flag reactive: true; rekomendasikan patch test sebelum pemakaian bahan baru',
                'score'           => 3,
            ],

            [
                'question_id'     => 3,
                'option_text'     => 'Jerawat atau breakout baru setelah ganti produk',
                'fact_key'        => 'comedone_prone',
                'fact_value'      => 'true',
                'system_impact'   => 'Flag comedone_prone: true; hindari produk comedogenic',
                'score'           => 2,
            ],

            [
                'question_id'     => 3,
                'option_text'     => 'Tidak pernah mengalami reaksi buruk',
                'fact_key'        => 'sensitive',
                'fact_value'      => 'false',
                'system_impact'   => 'Kulit resistant; bisa mulai dari konsentrasi bahan aktif menengah',
                'score'           => 0,
            ],

            // =========================
            // B1 — Masalah Kulit Utama
            // question_id = 4
            // =========================

            [
                'question_id'     => 4,
                'option_text'     => 'Bekas jerawat atau flek hitam (hiperpigmentasi)',
                'fact_key'        => 'concern',
                'fact_value'      => 'hyperpigmentation',
                'system_impact'   => 'Rekomendasikan Vitamin C, Niacinamide, AHA',
                'score'           => null,
            ],

            [
                'question_id'     => 4,
                'option_text'     => 'Kulit kusam atau tidak cerah',
                'fact_key'        => 'concern',
                'fact_value'      => 'dullness',
                'system_impact'   => 'Rekomendasikan Vitamin C, AHA, Niacinamide, Hyaluronic Acid',
                'score'           => null,
            ],

            [
                'question_id'     => 4,
                'option_text'     => 'Tanda penuaan dini atau kerutan',
                'fact_key'        => 'concern',
                'fact_value'      => 'aging',
                'system_impact'   => 'Rekomendasikan Retinol, Peptides, Vitamin C, Ceramide',
                'score'           => null,
            ],

            [
                'question_id'     => 4,
                'option_text'     => 'Jerawat aktif',
                'fact_key'        => 'concern',
                'fact_value'      => 'acne',
                'system_impact'   => 'Rekomendasikan Salicylic Acid, Benzoyl Peroxide, Niacinamide, Azelaic Acid',
                'score'           => null,
            ],

            [
                'question_id'     => 4,
                'option_text'     => 'Kulit kering dan dehidrasi',
                'fact_key'        => 'concern',
                'fact_value'      => 'dehydration',
                'system_impact'   => 'Rekomendasikan Hyaluronic Acid, Ceramide, Glycerin',
                'score'           => null,
            ],

            [
                'question_id'     => 4,
                'option_text'     => 'Pori-pori besar',
                'fact_key'        => 'concern',
                'fact_value'      => 'enlarged_pores',
                'system_impact'   => 'Rekomendasikan Salicylic Acid, Niacinamide, Retinol',
                'score'           => null,
            ],

            [
                'question_id'     => 4,
                'option_text'     => 'Kulit sensitif atau mudah iritasi',
                'fact_key'        => 'concern',
                'fact_value'      => 'sensitivity',
                'system_impact'   => 'Rekomendasikan Ceramide, Centella Asiatica, Azelaic Acid',
                'score'           => null,
            ],

            [
                'question_id'     => 4,
                'option_text'     => 'Tekstur kulit tidak rata',
                'fact_key'        => 'concern',
                'fact_value'      => 'texture',
                'system_impact'   => 'Rekomendasikan AHA, BHA, Retinol, Niacinamide',
                'score'           => null,
            ],

            // =========================
            // C1 — Reaktivitas Kulit
            // question_id = 5
            // =========================

            [
                'question_id'     => 5,
                'option_text'     => 'Hampir tidak pernah bereaksi; kulit mudah menerima produk baru',
                'fact_key'        => 'sensitivity_level',
                'fact_value'      => 'resistant',
                'system_impact'   => 'Bisa mulai dari konsentrasi bahan aktif menengah; toleransi tinggi',
                'score'           => 0,
            ],

            [
                'question_id'     => 5,
                'option_text'     => 'Sesekali bereaksi; biasanya hilang dalam 1–2 hari',
                'fact_key'        => 'sensitivity_level',
                'fact_value'      => 'mildly_sensitive',
                'system_impact'   => 'Mulai dari konsentrasi rendah; pantau 2 minggu sebelum menaikkan dosis',
                'score'           => 1,
            ],

            [
                'question_id'     => 5,
                'option_text'     => 'Sering bereaksi; kemerahan atau gatal yang cukup mengganggu',
                'fact_key'        => 'sensitivity_level',
                'fact_value'      => 'sensitive',
                'system_impact'   => 'Hindari bahan irritation_level=high; rekomendasikan gentle actives',
                'score'           => 2,
            ],

            [
                'question_id'     => 5,
                'option_text'     => 'Sangat reaktif; hampir setiap produk baru menimbulkan masalah',
                'fact_key'        => 'sensitivity_level',
                'fact_value'      => 'very_sensitive',
                'system_impact'   => 'Hanya bahan irritation_level=low; pertimbangkan saran konsultasi dokter',
                'score'           => 3,
            ],

            // =========================
            // C2 — Experience Level
            // question_id = 6
            // =========================

            [
                'question_id'     => 6,
                'option_text'     => 'Belum pernah menggunakan bahan aktif',
                'fact_key'        => 'experience_level',
                'fact_value'      => 'beginner',
                'system_impact'   => 'Retinol mulai 1x/minggu; AHA mulai 1x/minggu; prioritaskan toleransi',
                'score'           => 0,
            ],

            [
                'question_id'     => 6,
                'option_text'     => 'Sudah mencoba, kurang dari 6 bulan, sesekali iritasi',
                'fact_key'        => 'experience_level',
                'fact_value'      => 'intermediate',
                'system_impact'   => 'Retinol 2x/minggu; AHA hingga 2x/minggu',
                'score'           => 1,
            ],

            [
                'question_id'     => 6,
                'option_text'     => 'Sudah rutin lebih dari 6 bulan, kulit sudah terbiasa',
                'fact_key'        => 'experience_level',
                'fact_value'      => 'advanced',
                'system_impact'   => 'Retinol 3–4x/minggu; AHA hingga 3x/minggu sesuai toleransi',
                'score'           => 2,
            ],

            // =========================
            // C3 — Toleransi Retinol
            // question_id = 7
            // =========================

            [
                'question_id'     => 7,
                'option_text'     => 'Tidak ada reaksi; kulit baik-baik saja',
                'fact_key'        => 'retinol_tolerance',
                'fact_value'      => 'tolerant',
                'system_impact'   => 'Sistem dapat merekomendasikan frekuensi retinol normal',
                'score'           => 0,
            ],

            [
                'question_id'     => 7,
                'option_text'     => 'Ada sedikit pengelupasan awal, sudah hilang',
                'fact_key'        => 'retinol_tolerance',
                'fact_value'      => 'mild_sensitive',
                'system_impact'   => 'Rekomendasikan mulai dari 1x/minggu, naik bertahap',
                'score'           => 1,
            ],

            [
                'question_id'     => 7,
                'option_text'     => 'Iritasi cukup parah; kemerahan dan perih berkepanjangan',
                'fact_key'        => 'retinol_tolerance',
                'fact_value'      => 'high_sensitive',
                'system_impact'   => 'Rekomendasikan Bakuchiol sebagai alternatif retinol',
                'score'           => 2,
            ],

            [
                'question_id'     => 7,
                'option_text'     => 'Belum pernah mencoba',
                'fact_key'        => 'retinol_tolerance',
                'fact_value'      => 'unknown',
                'system_impact'   => 'Paksa mulai dari frekuensi terkecil 1x/minggu',
                'score'           => 1,
            ],

            // =========================
            // C4 — Kondisi Khusus
            // question_id = 8
            // =========================

            [
                'question_id'     => 8,
                'option_text'     => 'Sedang hamil atau menyusui',
                'fact_key'        => 'pregnant',
                'fact_value'      => 'true',
                'system_impact'   => 'Blokir total Retinol dan Salicylic Acid dosis tinggi; rekomendasikan Azelaic Acid dan Vitamin C; tampilkan disclaimer dokter kandungan',
                'score'           => null,
            ],

            [
                'question_id'     => 8,
                'option_text'     => 'Memiliki riwayat alergi fragrance',
                'fact_key'        => 'fragrance_allergy',
                'fact_value'      => 'true',
                'system_impact'   => 'Tambahkan warning pada produk yang mengandung fragrance, parfum, atau essential oil',
                'score'           => null,
            ],

            [
                'question_id'     => 8,
                'option_text'     => 'Sedang dalam perawatan dokter kulit',
                'fact_key'        => 'dermatology_treatment',
                'fact_value'      => 'true',
                'system_impact'   => 'Tampilkan disclaimer: konsultasikan penambahan produk baru dengan dokter',
                'score'           => null,
            ],

            [
                'question_id'     => 8,
                'option_text'     => 'Tidak ada kondisi khusus',
                'fact_key'        => 'special_condition',
                'fact_value'      => 'none',
                'system_impact'   => 'Tidak ada filter tambahan; sistem berjalan normal',
                'score'           => null,
            ],

        ];

        foreach ($options as $option) {
            ConsultationQuestionOption::create($option);
        }
    }
}
