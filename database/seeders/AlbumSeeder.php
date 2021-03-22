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
            'album_listing_id' => 1
        ]);
        DB::table('albums')->insert([
            'id' => 2,
            'format' => "MP3",
            'price' => 5.99,
            'album_listing_id' => 1
        ]);
    }
}
