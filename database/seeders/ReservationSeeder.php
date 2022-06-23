<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reservations')->insert([
            [
                'user_id' => '3',
                'product_id' => '1',
                'start_time' => now(),
                'end_time' => now(),
                'responder_id' => '1',
                'remark' => 'はじめての脱毛',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
