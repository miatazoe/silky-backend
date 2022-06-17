<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        [
            'name' => '山田花子',
            'email' => 'hanako@test.co.jp',
            'password' => bcrypt('password1'),
            'sex' => 1,
            'tel' => '000-0000-0000',
            'address' => 'Fukuoka',
            'birthday' => new DateTime("1950/01/01")
        ]
        [
            'name' => '田中太郎',
            'email' => 'taro@test.co.jp',
            'password' => bcrypt('password2'),
            'sex' => 2,
            'tel' => '111-1111-1111',
            'address' => 'Osaka',
            'birthday' => new DateTime("1950/01/01")
        ],
        [
            'name' => '田副方愛',
            'email' => 'tazoe@test.co.jp',
            'password' => bcrypt('testtest'),
            'sex' => 1,
            'tel' => '222-2222-2222',
            'address' => 'Kumamoto',
            'birthday' => new DateTime("1993/08/22")
        ],
    }
}
