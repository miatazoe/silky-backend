<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => '全身脱毛',
                'price' => 20000,
                'product_type_id' => 1,
                'duration' => '2:00:00',
                'description' => '全身脱毛のコース',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '光フェイシャル',
                'price' => 10000,
                'product_type_id' => 1,
                'duration' => '1:00:00',
                'description' => '光フェイシャルのコース',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'VIO+顔脱毛',
                'price' => 15000,
                'product_type_id' => 1,
                'duration' => '1:30:00',
                'description' => 'VIO+顔脱毛のコース',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
