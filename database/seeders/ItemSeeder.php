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
            'size' => "Small",
            'stock' => "100",
            'item_listing_id' => 1,
        ]);
        DB::table('items')->insert([
            'size' => "Medium",
            'stock' => "100",
            'item_listing_id' => 1,
        ]);
        DB::table('items')->insert([
            'size' => "Large",
            'stock' => "0",
            'item_listing_id' => 1,
        ]);
        DB::table('items')->insert([
            'size' => "Small",
            'stock' => "100",
            'item_listing_id' => 2,
        ]);
        DB::table('items')->insert([
            'size' => "Medium",
            'stock' => "100",
            'item_listing_id' => 2,
        ]);
        DB::table('items')->insert([
            'size' => "Large",
            'stock' => "100",
            'item_listing_id' => 2,
        ]);
        DB::table('items')->insert([
            'size' => "Small",
            'stock' => "100",
            'item_listing_id' => 3,
        ]);
        DB::table('items')->insert([
            'size' => "Medium",
            'stock' => "100",
            'item_listing_id' => 3,
        ]);
        DB::table('items')->insert([
            'size' => "Large",
            'stock' => "100",
            'item_listing_id' => 3,
        ]);
        DB::table('items')->insert([
            'size' => "One Size",
            'stock' => "500",
            'item_listing_id' => 4,
        ]);
        DB::table('items')->insert([
            'size' => "Small",
            'stock' => "100",
            'item_listing_id' => 5,
        ]);
        DB::table('items')->insert([
            'size' => "Medium",
            'stock' => "100",
            'item_listing_id' => 5,
        ]);
        DB::table('items')->insert([
            'size' => "Large",
            'stock' => "100",
            'item_listing_id' => 5,
        ]);
        DB::table('items')->insert([
            'size' => "Small",
            'stock' => "100",
            'item_listing_id' => 6,
        ]);
        DB::table('items')->insert([
            'size' => "Medium",
            'stock' => "100",
            'item_listing_id' => 6,
        ]);
        DB::table('items')->insert([
            'size' => "Large",
            'stock' => "100",
            'item_listing_id' => 6,
        ]);
        DB::table('items')->insert([
            'size' => "Small",
            'stock' => "100",
            'item_listing_id' => 7,
        ]);
        DB::table('items')->insert([
            'size' => "Medium",
            'stock' => "100",
            'item_listing_id' => 7,
        ]);
        DB::table('items')->insert([
            'size' => "Large",
            'stock' => "100",
            'item_listing_id' => 7,
        ]);
        DB::table('items')->insert([
            'size' => "Small",
            'stock' => "100",
            'item_listing_id' => 8,
        ]);
        DB::table('items')->insert([
            'size' => "Medium",
            'stock' => "100",
            'item_listing_id' => 8,
        ]);
        DB::table('items')->insert([
            'size' => "Large",
            'stock' => "100",
            'item_listing_id' => 8,
        ]);
    }

}
