<?php

namespace Database\Seeders;
use App\Models\IngredientConflict;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IngredientConflictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $conflicts = [

            [
                'ingredient_id_1' => 1,
                'ingredient_id_2' => 2,
                'status' => 'RISKY',
                'scientific_explanation' => 'Potential irritation risk',
                'solution' => 'Use on alternate nights',
                'reference_source' => 'AAD',
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
