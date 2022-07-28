<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SymptomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('symptoms')->insert([
            [
                'name' =>'คัดจมูก',
            ],
            [
                'name' =>'จาม',
            ],
            [
                'name' =>'น้ำมูกใส',
            ],
            [
                'name' =>'คอแห้ง',
            ],
            [
                'name' =>'เจ็บคอ',
            ],
            [
                'name' =>'ไอแห้ง',
            ],
            [
                'name' =>'ไอมีเสมหะ',
            ],
            [
                'name' =>'ปวดหนักศีรษะ',
            ],
            [
                'name' =>'อ่อนเพลีย',
            ],
            [
                'name' =>'ปวดกล้ามเนื้อ',
            ],
            [
                'name' =>'ไข้',
            ],
            [
                'name' =>'ชัก',
            ],
            [
                'name' =>'ครั่นเนื้อครั่นตัว',
            ]
        ]);
    }
}
