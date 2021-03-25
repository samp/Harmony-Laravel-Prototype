<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemListingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('item_listings')->insert([
            'id' => 1,
            'name' => "Item 1",
            'keywords' => "Melodrama",
            'price' =>  10.00,
            'description' => "tester",
            'type' => 'T-shirt',
            'product_image' => "static/melodrama.jpg",
        ]);
        DB::table('item_listings')->insert([
            'id' => 2,
            'name' => "Item 2",
            'keywords' => "",
            'price' =>  11.00,
            'description' => "tester",
            'type' => 'Mug',
            'product_image' => "static/melodrama.jpg",
        ]);
        DB::table('item_listings')->insert([
            'id' => 3,
            'name' => "Item 3",
            'keywords' => "",
            'price' =>  12.00,
            'description' => "tester",
            'type' => 'Poster',
            'product_image' => "static/melodrama.jpg",
        ]);
        DB::table('item_listings')->insert([
            'id' => 4,
            'name' => "Item 4",
            'keywords' => "",
            'price' =>  13.35,
            'description' => "tester",
            'type' => 'T-shirt',
            'product_image' => "static/melodrama.jpg",
        ]);
        DB::table('item_listings')->insert([
            'id' => 5,
            'name' => "Item 5",
            'keywords' => "",
            'price' =>  8.50,
            'description' => "tester",
            'type' => 'T-shirt',
            'product_image' => "static/melodrama.jpg",
        ]);
    }
}
