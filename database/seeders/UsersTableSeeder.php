<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'ณัฐพัชร์',
                'lastname' => 'ทวีจันทร์',
                'email' => 'program@localhost',
                'password' => Hash::make('11111111'), 
            ],
            [
                'name' => 'ธารา',
                'lastname' => 'ทิพย์พยอม',
                'email' => 'tara@localhost',
                'password' => Hash::make('11111111'), 
            ],
            [
                'name' => 'ชินบัญชร',
                'lastname' => 'จักรอิศราพงศ์',
                'email' => 'namo@localhost',
                'password' => Hash::make('11111111'), 
            ],
        ]);
    }
}
