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
            'name' => "Tryna meet your mama",
            'keywords' => "Ariana Grande, Positions",
            'price' =>  45.00,
            'description' => "Screenprinted front graphics with puff printed text on back.",
            'type' => 'T-Shirt',
            'product_image' => "static/positions-longsleeve-t-shirt.png",
        ]);
        DB::table('item_listings')->insert([
            'id' => 2,
            'name' => "Warped Cover Hoodie",
            'keywords' => "Ariana Grande, Sweetener",
            'price' =>  60.00,
            'description' => "Screenprinted front and back graphics",
            'type' => 'Hoodie',
            'product_image' => "static/warped-cover-hoodie.png",
        ]);
        DB::table('item_listings')->insert([
            'id' => 3,
            'name' => "Positions Sweatpants",
            'keywords' => "Ariana Grande, Positions",
            'price' =>  65.00,
            'description' => "Screenprinted front graphics",
            'type' => 'Joggers',
            'product_image' => "static/positions_sweatpants.png",
        ]);

        DB::table('item_listings')->insert([
            'id' => 4,
            'name' => "Black Face Mask",
            'keywords' => "Ariana Grande, Positions",
            'price' =>  15.00,
            'description' => "100% cotton black cloth face covering",
            'type' => 'Mask',
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
            'name' => "Bouquet Twenty-One-Pilots",
            'keywords' => "Trench, Twenty-One-Pilots",
            'price' =>  18.99,
            'description' => "Standard length, Regular fit, Crew neck, Printed on the front",
            'type' => 'T-Shirt',
            'product_image' => "static/twenty-one-pilots-t-shirt.jpg",
        ]);
        DB::table('item_listings')->insert([
            'id' => 8,
            'name' => "Dimmu Borgir Eonian ",
            'keywords' => "Dimmu Borgir, Eonian, T-shirt",
            'price' =>  18.99,
            'description' => "Classic, generous, boxy fit, 100% preshrunk cotton. Professionally printed using the latest and best digital print technology.",
            'type' => 'T-Shirt',
            'product_image' => "static/dimmu-t-shirt.jpg",
        ]);
        DB::table('item_listings')->insert([
            'id' => 9,
            'name' => "One More Time Dad Hat - Britney Spears",
            'keywords' => "Glory, Britney Spears",
            'price' =>  20.00,
            'description' => "Pink dad cap with adjustable backing and embroidered, white flower detail on the front.",
            'type' => 'Hat',
            'product_image' => "static/britneyhat.jpg",
        ]);
        DB::table('item_listings')->insert([
            'id' => 10,
            'name' => "Stronger Rainbow Tank Top",
            'keywords' => "Glory, Britney Spears",
            'price' =>  30.00,
            'description' => "Unisex black muscle tank with rainbow shiny foil graphic.",
            'type' => 'Vest',
            'product_image' => "static/britneytop.webp",
        ]);
        DB::table('item_listings')->insert([
            'id' => 11,
            'name' => "Fleetwood Mac Beanie",
            'keywords' => "Rumours, Fleetwood Mac",
            'price' =>  25.00,
            'description' => "Black, knit unisex beanie with 'Fleetwood Mac' embroidered on the front.",
            'type' => 'Hat',
            'product_image' => "static/fleedwoodhat.webp",
        ]);
        DB::table('item_listings')->insert([
            'id' => 12,
            'name' => "Melodrama Hands",
            'keywords' => "lorde t-shirt, melodrama merch, black band t shirt, cotton top",
            'price' =>  20.00,
            'description' => "Black cotton T-shirt featuring  lordes melodrama, available in multiple sizes",
            'type' => 'T-Shirt',
            'product_image' => "static/lorde.webp",
        ]);
        DB::table('item_listings')->insert([
            'id' => 13,
            'name' => "Scissor Sisters Case",
            'keywords' => "iPhone 12 case, scissor sisters phone case, laura iPhone Case, Clear phone case, Magic Hour",
            'price' =>  15.00,
            'description' => "Durable flexible case that grips around the edges of your phone",
            'type' => 'Case',
            'product_image' => "static/scissorsistersphone.webp",
        ]);
        DB::table('item_listings')->insert([
            'id' => 14,
            'name' => "Still First In Space Tie-Dye",
            'keywords' => "tie dye t shirt, pink floyd top, pink floyd t shirt, still first in space, pink floyd merch, vintage apparel, The Dark Side of The Moon",
            'price' =>  30.00,
            'description' => "Hand-dyed in LA, this 100% ring-spun cotton tee is soft, comfortable and pre-shrunk. Each tee is individually dyed so patterns, colors, and shirt color will vary.",
            'type' => 'T-Shirt',
            'product_image' => "static/twenty-one-pilots-t-shirt.jpg",
        ]);
        DB::table('item_listings')->insert([
            'id' => 15,
            'name' => "Trench Cassette Bundle",
            'keywords' => "modern cassettes, trench cassette, old style music, twenty-one pilot gifts, physical album bundle  ",
            'price' =>  10.00,
            'description' => "Solid Yellow cassette featuring Trench by Twenty-one Pilots including digital downloads of songs like “My Blood” and “Levitate”",
            'type' => 'Accessories',
            'product_image' => "static/trenchcassette.webp",
        ]);
    }
}
