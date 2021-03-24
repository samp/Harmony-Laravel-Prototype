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
            'format' => "MP3",
            'price' => 5.99,
            'stock' => null,
            'album_listing_id' => 1
        ]);
        DB::table('albums')->insert([
            'id' => 3,
            'format' => "MP3",
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
    }
}
