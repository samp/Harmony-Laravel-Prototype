<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('albums')->insert([
            'id' => 1,
            'format' => "CD",
            'price' => 8.99,
            'stock' => 12,
            'album_listing_id' => 1
        ]);
        DB::table('albums')->insert([
            'id' => 2,
            'format' => "Digital",
            'price' => 5.99,
            'stock' => null,
            'album_listing_id' => 1
        ]);
        DB::table('albums')->insert([
            'id' => 3,
            'format' => "Digital",
            'price' => 5.99,
            'stock' => null,
            'album_listing_id' => 2
        ]);
        DB::table('albums')->insert([
            'id' => 4,
            'format' => "CD",
            'price' => 12,
            'stock' => 10,
            'album_listing_id' => 2
        ]);
        DB::table('albums')->insert([
            'id' => 5,
            'format' => "Vinyl",
            'price' => 14.99,
            'stock' => 4,
            'album_listing_id' => 2
        ]);
        DB::table('albums')->insert([
            'id' => 6,
            'format' => "Vinyl",
            'price' => 14.99,
            'stock' => 20,
            'album_listing_id' => 3
        ]);
        DB::table('albums')->insert([
            'id' => 7,
            'format' => "Vinyl",
            'price' => 13.99,
            'stock' => 20,
            'album_listing_id' => 4
        ]);
        DB::table('albums')->insert([
            'id' => 8,
            'format' => "Digital",
            'price' => 7.99,
            'stock' => null,
            'album_listing_id' => 4
        ]);
        DB::table('albums')->insert([
            'id' => 9,
            'format' => "Digital",
            'price' => 9.99,
            'stock' => null,
            'album_listing_id' => 5
        ]);
        DB::table('albums')->insert([
            'id' => 10,
            'format' => "Digital",
            'price' => 9.99,
            'stock' => null,
            'album_listing_id' => 6
        ]);
    }
}
