<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiscSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('discs')->insert([
            'id' => 1,
            'album_id' => 1,
            'name' => "Disc 1",
        ]);

        DB::table('discs')->insert([
            'id' => 2,
            'album_id' => 2,
            'name' => "MP3",
        ]);
        DB::table('discs')->insert([
            'id' => 3,
            'album_id' => 3,
            'name' => "MP3",
        ]);
        DB::table('discs')->insert([
            'id' => 4,
            'album_id' => 4,
            'name' => "Disc 1",
        ]);
        DB::table('discs')->insert([
            'id' => 5,
            'album_id' => 5,
            'name' => "Side A",
        ]);
        DB::table('discs')->insert([
            'id' => 6,
            'album_id' => 5,
            'name' => "Side B",
        ]);
        DB::table('discs')->insert([
            'id' => 7,
            'album_id' => 6,
            'name' => "Side A",
        ]);
        DB::table('discs')->insert([
            'id' => 8,
            'album_id' => 6,
            'name' => "Side B",
        ]);
        DB::table('discs')->insert([
            'id' => 9,
            'album_id' => 7,
            'name' => "Side A",
        ]);
        DB::table('discs')->insert([
            'id' => 10,
            'album_id' => 7,
            'name' => "Side B",
        ]);
        DB::table('discs')->insert([
            'id' => 11,
            'album_id' => 8,
            'name' => "MP3",
        ]);
        DB::table('discs')->insert([
            'id' => 12,
            'album_id' => 9,
            'name' => "MP3",
        ]);
        DB::table('discs')->insert([
            'id' => 13,
            'album_id' => 10,
            'name' => "MP3",
        ]);
    }
}
