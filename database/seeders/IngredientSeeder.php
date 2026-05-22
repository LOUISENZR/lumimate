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

            [
                'ingredient_name' => 'Retinol',
                'category' => 'Retinoid',
                'function' => 'Anti aging',
                'irritation_level' => 'high',
                'max_frequency' => 2,
                'usage_time' => 'night',
                'important_notes' => 'Avoid during pregnancy',
                'reference_source' => 'AAD',
            ],

            [
                'ingredient_name' => 'Niacinamide',
                'category' => 'Brightening',
                'function' => 'Brightening and barrier repair',
                'irritation_level' => 'low',
                'max_frequency' => 7,
                'usage_time' => 'both',
                'important_notes' => 'Safe for all skin types',
                'reference_source' => 'INCIDecoder',
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
