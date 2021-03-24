<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlbumListingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('album_listings')->insert([
            'id' => 1,
            'name' => "Melodrama",
            'artist' => "Lorde",
            'description' => "The second studio album by the New Zealand singer. A departure from the minimalist style of her debut album Pure Heroine (2013), it is a pop and electropop record incorporating piano instrumentation and maximalist electronic beats.",
            'genre' => "Pop",
            'cover_image' => "null",
        ]);
        DB::table('album_listings')->insert([
            'id' => 2,
            'name' => "After Hours",
            'artist' => "The Weeknd",
            'description' => "Fourth studio album by the Canadian singer. The album was produced primarily by The Weeknd, along with a variety of high-profile producers such as DaHeala, Illangelo, Max Martin and Metro Boomin. Music journalists have noted the album as an artistic reinvention for The Weeknd, with the introduction of new wave and dream pop influences, while thematically, 'After Hours' explores promiscuity, overindulgence, and self-loathing.",
            'genre' => "RnB",
            'cover_image' => "null",
        ]);
        DB::table('album_listings')->insert([
            'id' => 3,
            'name' => "The Dark Side of The Moon",
            'artist' => "Pink Floyd",
            'description' => "Eighth studio album by the legendary English progressive rock band. Remastered and re-released as part of the 'Why Pink Floyd...?' campaign, the album is widely regarded as one of the greatest of all time and includes the tracks 'The Great Gig in the Sky', 'Money', 'Time', 'Any Colour You Like' and 'Us and Them'.",
            'genre' => "Rock",
            'cover_image' => "null",
        ]);
    }
}
