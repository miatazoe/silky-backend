<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([UserTypeSeeder::class]);
        $this->call([ProductTypeSeeder::class]);
        $this->call([ProductSeeder::class]);
        $this->call([UserSeeder::class]);
    }
}
