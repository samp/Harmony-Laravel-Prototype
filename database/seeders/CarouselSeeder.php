<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarouselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carousels')->insert([
            'link' => "/music/7",
            'description' => "Ariana is back with her new album Positions",
            'image' => "static/positionsbanner.jpg",
        ]);
        DB::table('carousels')->insert([
            'link' => "/music",
            'description' => "Lot of new music released for you to enjoy",
            'image' => "static/newmusicbanner.png",
        ]);
        DB::table('carousels')->insert([
            'link' => "/music/1",
            'description' => "Hit singer-songwriter Lorde with her new album Melodrama",
            'image' => "static/lordebanner.jpg",
        ]);
        DB::table('carousels')->insert([
            'link' => "/merch/1",
            'description' => "With the stylish Hoodie, Ariana Grande has a collection of new merch",
            'image' => "static/positionsbanner2.png",
        ]);
        DB::table('carousels')->insert([
            'link' => "/events/3",
            'description' => "See them live! McFly are touring again!",
            'image' => "static/mcflybanner.png",
        ]);
    }
}
