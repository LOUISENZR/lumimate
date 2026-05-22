<?php

namespace Database\Seeders;
use App\Models\RuleBase;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RuleBaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rules = [

            [
                'rule_code' => 'R01',

                'rule_category' => 'recommendation',

                'conditions' => json_encode([
                    'skin_type' => 'oily',
                    'concern' => 'acne'
                ]),

                'actions' => json_encode([
                    'recommendation' => 'Use Salicylic Acid'
                ]),

                'certainty_factor' => 0.90,

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
