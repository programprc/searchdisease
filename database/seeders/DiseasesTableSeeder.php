<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiseasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('diseases')->insert([
            [
                'name' =>'ไข้ (อาการตัวร้อน)',
                'link' =>'https://medthai.com/%E0%B9%84%E0%B8%82%E0%B9%89/',
            ],
            [
                'name' =>'ไข้หวัด(โรคหวัด)',
                'link' =>'https://medthai.com/%E0%B9%82%E0%B8%A3%E0%B8%84%E0%B8%AB%E0%B8%A7%E0%B8%B1%E0%B8%94/',
            ]
        ]);
    }
}
