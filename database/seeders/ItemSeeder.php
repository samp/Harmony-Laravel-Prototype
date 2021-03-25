<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'id' => 1,
            'size' => "Small",
            'item_listing_id' => 1,
        ]);
        DB::table('items')->insert([
            'id' => 2,
            'size' => "Medium",
            'item_listing_id' => 1,
        ]);
        DB::table('items')->insert([
            'id' => 3,
            'size' => "Large",
            'item_listing_id' => 1,
        ]);
        DB::table('items')->insert([
            'id' => 4,
            'size' => "One size",
            'item_listing_id' => 2,
        ]);
        DB::table('items')->insert([
            'id' => 5,
            'size' => "One size",
            'item_listing_id' => 3,
        ]);
        DB::table('items')->insert([
            'id' => 6,
            'size' => "One size",
            'item_listing_id' => 4,
        ]);

        DB::table('items')->insert([
            'id' => 7,
            'size' => "Small",
            'item_listing_id' => 5,
        ]);
        DB::table('items')->insert([
            'id' => 8,
            'size' => "Medium",
            'item_listing_id' => 5,
        ]);
        DB::table('items')->insert([
            'id' => 9,
            'size' => "Large",
            'item_listing_id' => 5,
        ]);
    }

}
