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
        DB::table('discs')->insert([
            'id' => 14,
            'album_id' => 11,
            'name' => "Disc 1",
        ]);
        DB::table('discs')->insert([
            'id' => 15,
            'album_id' => 12,
            'name' => "MP3",
        ]);
        DB::table('discs')->insert([
            'id' => 16,
            'album_id' => 13,
            'name' => "Disc 1",
        ]);
        DB::table('discs')->insert([
            'id' => 17,
            'album_id' => 14,
            'name' => "MP3",
        ]);
        DB::table('discs')->insert([
            'id' => 18,
            'album_id' => 15,
            'name' => "Disc 1",
        ]);
        DB::table('discs')->insert([
            'id' => 19,
            'album_id' => 16,
            'name' => "MP3",
        ]);
        DB::table('discs')->insert([
            'id' => 20,
            'album_id' => 17,
            'name' => "Disc 1",
        ]);
        DB::table('discs')->insert([
            'id' => 21,
            'album_id' => 18,
            'name' => "MP3",
        ]);
        DB::table('discs')->insert([
            'id' => 22,
            'album_id' => 19,
            'name' => "Disc 1",
        ]);
        DB::table('discs')->insert([
            'id' => 23,
            'album_id' => 20,
            'name' => "MP3",
        ]);
        DB::table('discs')->insert([
            'id' => 24,
            'album_id' => 21,
            'name' => "MP3",
        ]);
        DB::table('discs')->insert([
            'id' => 25,
            'album_id' => 22,
            'name' => "Disc 1",
        ]);
        DB::table('discs')->insert([
            'id' => 26,
            'album_id' => 23,
            'name' => "Disc 1",
        ]);
        DB::table('discs')->insert([
            'id' => 27,
            'album_id' => 24,
            'name' => "MP3",
        ]);
        DB::table('discs')->insert([
            'id' => 28,
            'album_id' => 25,
            'name' => "MP3",
        ]);
        DB::table('discs')->insert([
            'id' => 29,
            'album_id' => 26,
            'name' => "Disc 1",
        ]);
        DB::table('discs')->insert([
            'id' => 30,
            'album_id' => 27,
            'name' => "MP3",
        ]);
        DB::table('discs')->insert([
            'id' => 31,
            'album_id' => 28,
            'name' => "MP3",
        ]);
        DB::table('discs')->insert([
            'id' => 32,
            'album_id' => 29,
            'name' => "Disc 1",
        ]);
    }
}
