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
            'release_date' => \Carbon\Carbon::parse('2017-06-16'),
            'cover_image' => "static/melodrama.jpg",
        ]);
        DB::table('album_listings')->insert([
            'id' => 2,
            'name' => "After Hours",
            'artist' => "The Weeknd",
            'description' => "Fourth studio album by the Canadian singer. The album was produced primarily by The Weeknd, along with a variety of high-profile producers such as DaHeala, Illangelo, Max Martin and Metro Boomin. Music journalists have noted the album as an artistic reinvention for The Weeknd, with the introduction of new wave and dream pop influences, while thematically, 'After Hours' explores promiscuity, overindulgence, and self-loathing.",
            'genre' => "RnB",
            'release_date' => \Carbon\Carbon::parse('2020-03-20'),
            'cover_image' => "static/afterhours.jpg",
        ]);
        DB::table('album_listings')->insert([
            'id' => 3,
            'name' => "The Dark Side of The Moon",
            'artist' => "Pink Floyd",
            'description' => "Eighth studio album by the legendary English progressive rock band. Remastered and re-released as part of the 'Why Pink Floyd...?' campaign, the album is widely regarded as one of the greatest of all time and includes the tracks 'The Great Gig in the Sky', 'Money', 'Time', 'Any Colour You Like' and 'Us and Them'.",
            'genre' => "Rock",
            'release_date' => \Carbon\Carbon::parse('1973-03-01'),
            'cover_image' => "static/darksideofthemoon.jpeg",
        ]);
        DB::table('album_listings')->insert([
            'id' => 4,
            'name' => "Rumours",
            'artist' => "Fleetwood Mac",
            'description' => "Rumours is the eleventh studio album by British-American rock band Fleetwood Mac, released on 4 February 1977 by Warner Bros. Records. Largely recorded in California in 1976, it was produced by the band with Ken Caillat and Richard Dashut. The band wanted to expand on the commercial success of their eponymous 1975 album, but struggled with relationship breakups before recording started. The Rumours studio sessions were marked by hedonism and strife among band members that shaped the album's lyrics.",
            'genre' => "Rock",
            'release_date' => \Carbon\Carbon::parse('1977-02-04'),
            'cover_image' => "static/rumours.jpg",
        ]);
        DB::table('album_listings')->insert([
            'id' => 5,
            'name' => "Eonian",
            'artist' => "Dimmu Borgir",
            'description' => "The tenth studio album by the Norwegian black metal band, originally released in May 2018. Production of the album originally started at least in 2012 but faced many delays for years after, and ended up being their first original studio album in nearly 8 years following 2010's 'Abrahadabra'. The band self-produced the album while the engineering was handled by Jens Bogren. When describing the album's sound, Silenoz stated that the symphonic metal parts are more symphonic while the black metal sound of Dimmu is more black metal this time around. ",
            'genre' => "Metal",
            'release_date' => \Carbon\Carbon::parse('2018-05-04'),
            'cover_image' => "static/eonian.jpg",
        ]);
        DB::table('album_listings')->insert([
            'id' => 6,
            'name' => "Born 2 Rap",
            'artist' => "The Game",
            'description' => "Born 2 Rap is the ninth and purportedly final studio album by American rapper The Game. It was released on November 29, 2019 via Entertainment One. It features guest appearances from Dom Kennedy, Ed Sheeran, 21 Savage, Anderson . Paak, Bryson Tiller, Chris Brown, D Smoke, J.",
            'genre' => "Rap",
            'release_date' => \Carbon\Carbon::parse('2019-11-29'),
            'cover_image' => "static/born2rap.jpg",
        ]);
        
    }
}
