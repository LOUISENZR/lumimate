<?php

namespace Database\Seeders;
use App\Models\Ingredient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ingredients = [

            // ID 1
            [
                'ingredient_name' => 'Retinol',
                'category'        => 'Retinoid',
                'function'        => 'Anti-aging, anti-acne, cell turnover',
                'irritation_level'=> 'high',
                'max_frequency'   => 2,
                'usage_time'      => 'night',
                'important_notes' => 'Hindari saat hamil; mulai 1x/minggu untuk pemula; tingkatkan sensitivitas UV',
                'reference_source'=> 'AAD',
            ],

            // ID 2
            [
                'ingredient_name' => 'Niacinamide',
                'category'        => 'Brightening',
                'function'        => 'Brightening, pore minimizer, barrier repair',
                'irritation_level'=> 'low',
                'max_frequency'   => 7,
                'usage_time'      => 'both',
                'important_notes' => 'Konsentrasi optimal 2–10%; aman untuk hampir semua jenis kulit',
                'reference_source'=> 'INCIDecoder',
            ],

            // ID 3
            [
                'ingredient_name' => 'AHA (Glycolic/Lactic Acid)',
                'category'        => 'Exfoliant',
                'function'        => 'Eksfoliasi permukaan, brightening',
                'irritation_level'=> 'medium',
                'max_frequency'   => 3,
                'usage_time'      => 'night',
                'important_notes' => 'Meningkatkan sensitivitas UV; wajib SPF pagi hari setelah pemakaian',
                'reference_source'=> 'AAD',
            ],

            // ID 4
            [
                'ingredient_name' => 'BHA (Salicylic Acid)',
                'category'        => 'Exfoliant',
                'function'        => 'Eksfoliasi pori, anti-acne, anti-inflamasi',
                'irritation_level'=> 'medium',
                'max_frequency'   => 3,
                'usage_time'      => 'both',
                'important_notes' => 'Bekerja dalam pori (oil-soluble); pilihan utama untuk acne & oily skin; hindari dosis tinggi saat hamil',
                'reference_source'=> 'AAD',
            ],

            // ID 5
            [
                'ingredient_name' => 'Vitamin C (L-Ascorbic Acid)',
                'category'        => 'Antioksidan',
                'function'        => 'Antioksidan, brightening, collagen support',
                'irritation_level'=> 'medium',
                'max_frequency'   => 7,
                'usage_time'      => 'morning',
                'important_notes' => 'pH optimal < 3.5; tidak stabil jika teroksidasi; simpan di tempat gelap',
                'reference_source'=> 'INCIDecoder',
            ],

            // ID 6
            [
                'ingredient_name' => 'Hyaluronic Acid',
                'category'        => 'Humektan',
                'function'        => 'Hidrasi, plumping',
                'irritation_level'=> 'low',
                'max_frequency'   => 7,
                'usage_time'      => 'both',
                'important_notes' => 'Gunakan di atas kulit lembab; tutup dengan moisturizer agar tidak menarik air dari dalam kulit',
                'reference_source'=> 'INCIDecoder',
            ],

            // ID 7
            [
                'ingredient_name' => 'Ceramide',
                'category'        => 'Barrier Repair',
                'function'        => 'Barrier repair, hidrasi',
                'irritation_level'=> 'low',
                'max_frequency'   => 7,
                'usage_time'      => 'both',
                'important_notes' => 'Aman untuk semua jenis kulit termasuk sensitif; tidak ada kontraindikasi',
                'reference_source'=> 'AAD',
            ],

            // ID 8
            [
                'ingredient_name' => 'Benzoyl Peroxide',
                'category'        => 'Antibakteri',
                'function'        => 'Antibakteri, anti-acne',
                'irritation_level'=> 'high',
                'max_frequency'   => 7,
                'usage_time'      => 'both',
                'important_notes' => 'Mulai dari 2.5%; dapat memutihkan kain; hindari area mata; keringkan kulit setelah pemakaian',
                'reference_source'=> 'AAD',
            ],

            // ID 9
            [
                'ingredient_name' => 'Azelaic Acid',
                'category'        => 'Multi-function',
                'function'        => 'Anti-acne, brightening, anti-inflamasi',
                'irritation_level'=> 'low',
                'max_frequency'   => 7,
                'usage_time'      => 'both',
                'important_notes' => 'Aman untuk ibu hamil; pilihan untuk sensitive + acne skin',
                'reference_source'=> 'AAD',
            ],

            // ID 10
            [
                'ingredient_name' => 'Peptides',
                'category'        => 'Anti-aging',
                'function'        => 'Stimulasi kolagen, anti-aging',
                'irritation_level'=> 'low',
                'max_frequency'   => 7,
                'usage_time'      => 'both',
                'important_notes' => 'Kompatibel dengan hampir semua ingredient; jangan campur langsung dengan AHA/BHA',
                'reference_source'=> 'INCIDecoder',
            ],

            // ID 11
            [
                'ingredient_name' => 'Centella Asiatica',
                'category'        => 'Soothing',
                'function'        => 'Soothing, anti-inflamasi, barrier repair',
                'irritation_level'=> 'low',
                'max_frequency'   => 7,
                'usage_time'      => 'both',
                'important_notes' => 'Ideal untuk sensitive & post-acne skin; aman dan gentle',
                'reference_source'=> 'INCIDecoder',
            ],

            // ID 12
            [
                'ingredient_name' => 'Sunscreen SPF 30+',
                'category'        => 'Proteksi UV',
                'function'        => 'Proteksi UV, cegah hiperpigmentasi',
                'irritation_level'=> 'low',
                'max_frequency'   => 7,
                'usage_time'      => 'morning',
                'important_notes' => 'Langkah TERAKHIR di pagi hari; WAJIB setelah penggunaan AHA/BHA/Retinol',
                'reference_source'=> 'AAD',
            ],

        ];

        foreach ($ingredients as $ingredient) {

            Ingredient::updateOrInsert(

                ['ingredient_name' => $ingredient['ingredient_name']],

                $ingredient

            );

        }
    }
}
