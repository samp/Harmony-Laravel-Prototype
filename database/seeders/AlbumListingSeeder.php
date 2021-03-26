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
            'cover_image' => "static/darksideofthemoon.jpg",
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
        DB::table('album_listings')->insert([
            'id' => 7,
            'name' => "Positions",
            'artist' => "Ariana Grande",
            'description' => "Positions is the sixth studio album by American singer Ariana Grande. It was released by Republic Records on October 30, 2020. Grande worked with a variety of producers on the album, including Tommy Brown, Anthony M. Jones, London on da Track, Murda Beatz, the Rascals, Scott Storch, Shea Taylor and Charles Anderson, accompanied by longtime co-writers Victoria Monét and Tayla Parx.",
            'genre' => "RnB",
            'release_date' => \Carbon\Carbon::parse('2020-10-30'),
            'cover_image' => "static/positions.jpg",
        ]);
        DB::table('album_listings')->insert([
            'id' => 8,
            'name' => "thank u, next",
            'artist' => "Ariana Grande",
            'description' => "Thank U, Next (stylized in all lowercase) is the fifth studio album by American singer Ariana Grande, released on February 8, 2019, by Republic Records.[5][6] It was released six months after her fourth studio album Sweetener (2018), created in the midst of Grande's personal struggles, including the death of ex-boyfriend Mac Miller and her breakup with then-fiancé Pete Davidson.",
            'genre' => "Pop",
            'release_date' => \Carbon\Carbon::parse('2019-02-08'),
            'cover_image' => "static/thankunext.jpg",
        ]);
        DB::table('album_listings')->insert([
            'id' => 9,
            'name' => "Sweetener",
            'artist' => "Ariana Grande",
            'description' => "Sweetener is the fourth studio album by American singer Ariana Grande. It was released on August 17, 2018, through Republic Records. Sweetener is primarily a pop, R&B and trap album, while incorporating a diversity of other music genres, including house, funk, neo soul, hip hop, synth-pop and other minimalist urban influences.",
            'genre' => "Pop",
            'release_date' => \Carbon\Carbon::parse('2018-08-17'),
            'cover_image' => "static/sweetener.jpg",
        ]);
        DB::table('album_listings')->insert([
            'id' => 10,
            'name' => "Dangerous Woman",
            'artist' => "Ariana Grande",
            'description' => "Dangerous Woman is the third studio album by American singer Ariana Grande, that was released by Republic Records on May 20, 2016. The album features guest appearances from Nicki Minaj, Lil Wayne, Macy Gray and Future. Dangerous Woman is primarily a pop and R&B record, with influences of dance-pop, disco, house, trap, and reggae genres.",
            'genre' => "Pop",
            'release_date' => \Carbon\Carbon::parse('2016-05-20'),
            'cover_image' => "static/dangerouswoman.jpg",
        ]);
        DB::table('album_listings')->insert([
            'id' => 11,
            'name' => "Folklore",
            'artist' => "Taylor Swift",
            'description' => "Eighth studio album by the American singer-songwriter. The album was created in isolation during the COVID-19 pandemic, with production from Aaron Dessner (The National), Jack Antonoff (Bleachers) and Swift herself. Departing from the mainstream pop sound of Swift's previous releases, 'Folklore' is an indie folk, alternative rock, electro-folk and chamber pop album driven by pianos and guitars.",
            'genre' => "Pop",
            'release_date' => \Carbon\Carbon::parse('2020-08-07'),
            'cover_image' => "static/folklore.jpg",
        ]);
        DB::table('album_listings')->insert([
            'id' => 12,
            'name' => "Glory",
            'artist' => "Britney Spears",
            'description' => "Ninth studio album from the American pop singer. Featuring the singles 'Make Me... (feat. G-Eazy)' and 'Slumber Party', this release debuted in the UK Albums Chart at #2. The deluxe edition includes an additional five bonus tracks.",
            'genre' => "Pop",
            'release_date' => \Carbon\Carbon::parse('2016-08-26'),
            'cover_image' => "static/glory.jpg",
        ]);
        DB::table('album_listings')->insert([
            'id' => 13,
            'name' => "Under the Covers",
            'artist' => "Prince",
            'description' => "A master of both composition and of interpretation, Prince was among an elite group of artists who was as comfortable performing his own material as he was covering numbers written by others. This remarkable CD brings together the great man s versions of songs originally written and performed by other musical greats, which Prince played live in concert across his sadly short career. ",
            'genre' => "Rock",
            'release_date' => \Carbon\Carbon::parse('2017-10-13'),
            'cover_image' => "static/underthecovers.jpg",
        ]);
        DB::table('album_listings')->insert([
            'id' => 14,
            'name' => "High Expectations",
            'artist' => "Mabel",
            'description' => "High Expectations is the debut studio album by British singer and songwriter Mabel, released on 2 August 2019 internationally by Polydor Records and in the United States by Capitol Records and Universal. Mabel worked with writers and producers such as Tre Jean-Marie, Steve Mac and MNEK to create the album, with its music incorporating genres of pop and R&B.",
            'genre' => "Pop",
            'release_date' => \Carbon\Carbon::parse('2019-08-02'),
            'cover_image' => "static/highexpectations.jpg",
        ]);
        DB::table('album_listings')->insert([
            'id' => 15,
            'name' => "Trench",
            'artist' => "Twenty-One Pilots",
            'description' => "Trench is the fifth studio album by American musical duo Twenty-One Pilots, released on October 5, 2018 through Fuelled by Ramen. It is the band's first studio album in three years, after the breakthrough success of their previous album, Blurryface.",
            'genre' => "Rock",
            'release_date' => \Carbon\Carbon::parse('2018-10-05'),
            'cover_image' => "static/trench.webp",
        ]);
        DB::table('album_listings')->insert([
            'id' => 16,
            'name' => "Magic Hour",
            'artist' => "Scissor Sisters",
            'description' => "Magic Hour is the fourth studio album by the American group Scissor Sisters, released on May 25, 2012 by Polydor Records. The first single from the album was initially 'Shady Love' but was later replaced by 'Only the Horses', co-produced by recording artist and DJ Calvin Harris, which entered and peaked at number twelve on the UK Singles Chart.",
            'genre' => "Dance",
            'release_date' => \Carbon\Carbon::parse('2012-05-25'),
            'cover_image' => "static/magichours.webp",
        ]);
        DB::table('album_listings')->insert([
            'id' => 17,
            'name' => "Hot Pink",
            'artist' => "Doja Cat",
            'description' => "Hot Pink is the second studio album by American singer and rapper Doja Cat. The album was released on November 7, 2019, by Kemosabe and RCA Records. A departure from the sound of her debut album Amala (2018), Hot Pink is a pop and R&B record containing elements of funk and soul. It was written by Doja Cat alongside other songwriters and producers. Hot Pink was predominantly produced by Yeti Beats and Dr. Luke (under the pseudonym Tyson Trax). Guest vocals are contributed by Smino, Tyga, and Gucci Mane.",
            'genre' => "Pop",
            'release_date' => \Carbon\Carbon::parse('2019-11-07'),
            'cover_image' => "static/hotpink.jpg",
        ]);
        
    }
}
