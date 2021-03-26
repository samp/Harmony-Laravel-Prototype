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
            'name' => "Warped Cover Hoodie",
            'keywords' => "Ariana Grande, Sweetener",
            'price' =>  60.00,
            'description' => "Screenprinted front and back graphics",
            'type' => 'Hoodie',
            'product_image' => "static/warped cover hoodie.png",
        ]);
        DB::table('item_listings')->insert([
            'id' => 2,
            'name' => "Positions Sweatpants",
            'keywords' => "Ariana Grande, Positions",
            'price' =>  65.00,
            'description' => "Screenprinted front graphics",
            'type' => 'Sweatpants',
            'product_image' => "static/positions_sweatpants.png",
        ]);
        DB::table('item_listings')->insert([
            'id' => 3,
            'name' => "Tryna meet your mama",
            'keywords' => "Ariana Grande, Positions",
            'price' =>  45.00,
            'description' => "Screenprinted front graphics with puff printed text on back.",
            'type' => 'T-Shirt',
            'product_image' => "static/positions-longsleeve-t-shirt.png",
        ]);
        DB::table('item_listings')->insert([
            'id' => 4,
            'name' => "Black Face Mask",
            'keywords' => "Ariana Grande, Positions",
            'price' =>  15.00,
            'description' => "100% cotton black cloth face covering",
            'type' => 'Face Mask',
            'product_image' => "static/positions_facemask.png",
        ]);
        DB::table('item_listings')->insert([
            'id' => 5,
            'name' => "In the trees",
            'keywords' => "Folklore, Taylor Swift",
            'price' =>  60.00,
            'description' => "Forest green hoodie featuring album cover artwork on the front, track list on the sleeves, and 'Taylor Swift' printed on the back.",
            'type' => 'Hoodie',
            'product_image' => "static/folklore-hoodie.png",
        ]);
        DB::table('item_listings')->insert([
            'id' => 6,
            'name' => "You drew stars around my scars",
            'keywords' => "Folklore, Taylor Swift",
            'price' =>  21.75,
            'description' => "White t-shirt with album name on the center chest in gray font. back design includes 'you drew stars around my scars' song lyric and four stars.",
            'type' => 'T-Shirt',
            'product_image' => "static/folklore-t-shirt.png",
        ]);
        DB::table('item_listings')->insert([
            'id' => 7,
            'name' => "Bouquet",
            'keywords' => "Trench, Twenty-One-Pilots",
            'price' =>  18.99,
            'description' => "Standard length, Regular fit, Crew neck, Printed on the front",
            'type' => 'T-Shirt',
            'product_image' => "static/twenty-one-pilots-t-shirt.jpg",
        ]);
        DB::table('item_listings')->insert([
            'id' => 8,
            'name' => "Dimmu Borgir Eonian T-shirt",
            'keywords' => "Dimmu Borgir, Eonian, T-shirt",
            'price' =>  18.99,
            'description' => "Classic, generous, boxy fit, 100% preshrunk cotton. Professionally printed using the latest and best digital print technology.",
            'type' => 'T-Shirt',
            'product_image' => "static/dimmu-t-shirt.jpg",
        ]);
    }
}
