<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SymptomDiseasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('symptom_diseases')->insert([
            [
                'disease_id' =>1,
                'symptom_id' =>1,
            ],
            [
                'disease_id' =>1,
                'symptom_id' =>2,
            ],
            [
                'disease_id' =>1,
                'symptom_id' =>3,
            ],
            [
                'disease_id' =>2,
                'symptom_id' =>1,
            ],
            [
                'disease_id' =>2,
                'symptom_id' =>4,
            ],
            [
                'disease_id' =>2,
                'symptom_id' =>5,
            ]
        ]);
    }
}
