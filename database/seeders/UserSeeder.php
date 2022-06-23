<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserSeeder extends Seeder
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
                'name' => '山田花子',
                'email' => 'hanako@test.co.jp',
                'email_verified_at' => now(),
                'user_type_id' => 2,
                'password' => bcrypt('password1'),
                'sex' => 1,
                'tel' => '000-0000-0000',
                'address' => 'Fukuoka',
                'birthday' => new Carbon("1950-01-01"),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '田中太郎',
                'email' => 'taro@test.co.jp',
                'email_verified_at' => now(),
                'user_type_id' => 1,
                'password' => bcrypt('password2'),
                'sex' => 2,
                'tel' => '111-1111-1111',
                'address' => 'Osaka',
                'birthday' => new Carbon("1950-01-01"),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '田副方愛',
                'email' => 'tazoe@test.co.jp',
                'email_verified_at' => now(),
                'user_type_id' => 1,
                'password' => bcrypt('testtest'),
                'sex' => 1,
                'tel' => '222-2222-2222',
                'address' => 'Kumamoto',
                'birthday' => new Carbon("1993-08-22"),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
