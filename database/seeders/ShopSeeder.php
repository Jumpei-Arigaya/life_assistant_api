<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('shops')->insert([
            'name' => Str::random(10),
            'shop_branch' => Str::random(10),
            'shop_type_id' => 1,
        ]);
    }
}
