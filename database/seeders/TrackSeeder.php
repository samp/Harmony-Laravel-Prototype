<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tracks')->insert([
            'name' => "Green Light",
            'length' => "3:55",
            'disc_id' => 1,
        ]);
        DB::table('tracks')->insert([
            'name' => "Sober",
            'length' => "3:17",
            'disc_id' => 1,
        ]);
        DB::table('tracks')->insert([
            'name' => "Homemade Dynamite",
            'length' => "3:10",
            'disc_id' => 1,
        ]);
        DB::table('tracks')->insert([
            'name' => "Liability",
            'length' => "2:52",
            'disc_id' => 1,
        ]);
        DB::table('tracks')->insert([
            'name' => "Hard Feelings",
            'length' => "6:07",
            'disc_id' => 1,
        ]);
        DB::table('tracks')->insert([
            'name' => "Sober II (Melodrama)",
            'length' => "2:59",
            'disc_id' => 1,
        ]);
        DB::table('tracks')->insert([
            'name' => "Writer in the Dark",
            'length' => "3:37",
            'disc_id' => 1,
        ]);
        DB::table('tracks')->insert([
            'name' => "Supercut",
            'length' => "4:38",
            'disc_id' => 1,
        ]);
        DB::table('tracks')->insert([
            'name' => "Liability (Reprise)",
            'length' => "2:16",
            'disc_id' => 1,
        ]);
        DB::table('tracks')->insert([
            'name' => "Perfect places",
            'length' => "3:42",
            'disc_id' => 1,
        ]);

        DB::table('tracks')->insert([
            'name' => "Green Light",
            'length' => "3:55",
            'price' => 0.99,
            'buyable' => true,
            'disc_id' => 2,
        ]);
        DB::table('tracks')->insert([
            'name' => "Sober",
            'length' => "3:17",
            'price' => 0.99,
            'buyable' => true,
            'disc_id' => 2,
        ]);
        DB::table('tracks')->insert([
            'name' => "Homemade Dynamite",
            'length' => "3:10",
            'price' => 0.99,
            'buyable' => true,
            'disc_id' => 2,
        ]);
        DB::table('tracks')->insert([
            'name' => "Liability",
            'length' => "2:52",
            'price' => 0.99,
            'buyable' => true,
            'disc_id' => 2,
        ]);
        DB::table('tracks')->insert([
            'name' => "Hard Feelings",
            'length' => "6:07",
            'price' => 0.99,
            'buyable' => true,
            'disc_id' => 2,
        ]);
        DB::table('tracks')->insert([
            'name' => "Sober II (Melodrama)",
            'length' => "2:59",
            'price' => 0.99,
            'buyable' => true,
            'disc_id' => 2,
        ]);
        DB::table('tracks')->insert([
            'name' => "Writer in the Dark",
            'length' => "3:37",
            'price' => 0.99,
            'buyable' => true,
            'disc_id' => 2,
        ]);
        DB::table('tracks')->insert([
            'name' => "Supercut",
            'length' => "4:38",
            'price' => 0.99,
            'buyable' => true,
            'disc_id' => 2,
        ]);
        DB::table('tracks')->insert([
            'name' => "Liability (Reprise)",
            'length' => "2:16",
            'buyable' => false,
            'disc_id' => 2,
        ]);
        DB::table('tracks')->insert([
            'name' => "Perfect places",
            'length' => "3:42",
            'price' => 0.99,
            'buyable' => true,
            'disc_id' => 2,
        ]);




        DB::table('tracks')->insert([
            'name' => "Alone Again",
            'length' => "4:10",
            'price' => 0.99,
            'buyable' => true,
            'disc_id' => 3,
        ]);
        DB::table('tracks')->insert([
            'name' => "Too Late",
            'length' => "3:59",
            'price' => 0.99,
            'buyable' => true,
            'disc_id' => 3,
        ]);
        DB::table('tracks')->insert([
            'name' => "Hardest to Love",
            'length' => "3:31",
            'price' => 0.99,
            'buyable' => true,
            'disc_id' => 3,
        ]);
        DB::table('tracks')->insert([
            'name' => "Scared to Live",
            'length' => "3:11",
            'price' => 0.99,
            'buyable' => true,
            'disc_id' => 3,
        ]);
        DB::table('tracks')->insert([
            'name' => "Snowchild",
            'length' => "4:07",
            'price' => 0.99,
            'buyable' => true,
            'disc_id' => 3,
        ]);
        DB::table('tracks')->insert([
            'name' => "Escape from LA",
            'length' => "5:55",
            'price' => 0.99,
            'buyable' => true,
            'disc_id' => 3,
        ]);
        DB::table('tracks')->insert([
            'name' => "Heartless",
            'length' => "3:21",
            'price' => 0.99,
            'buyable' => true,
            'disc_id' => 3,
        ]);
        DB::table('tracks')->insert([
            'name' => "Faith",
            'length' => "4:43",
            'price' => 0.99,
            'buyable' => true,
            'disc_id' => 3,
        ]);
        DB::table('tracks')->insert([
            'name' => "Blinding Lights",
            'length' => "3:21",
            'price' => 0.99,
            'buyable' => true,
            'disc_id' => 3,
        ]);
        DB::table('tracks')->insert([
            'name' => "In Your Eyes",
            'length' => "3:57",
            'price' => 0.99,
            'buyable' => true,
            'disc_id' => 3,
        ]);
        DB::table('tracks')->insert([
            'name' => "Save Your Tears",
            'length' => "3:35",
            'price' => 0.99,
            'buyable' => true,
            'disc_id' => 3,
        ]);
        DB::table('tracks')->insert([
            'name' => "Repeat After Me (Interlude)",
            'length' => "3:15",
            'buyable' => false,
            'disc_id' => 3,
        ]);
        DB::table('tracks')->insert([
            'name' => "After Hours",
            'length' => "6:01",
            'price' => 0.99,
            'buyable' => true,
            'disc_id' => 3,
        ]);
        DB::table('tracks')->insert([
            'name' => "Until I Bleed Out",
            'length' => "3:12",
            'price' => 0.99,
            'buyable' => true,
            'disc_id' => 3,
        ]);
        



        DB::table('tracks')->insert([
            'name' => "Alone Again",
            'length' => "4:10",
            'disc_id' => 4,
        ]);
        DB::table('tracks')->insert([
            'name' => "Too Late",
            'length' => "3:59",
            'disc_id' => 4,
        ]);
        DB::table('tracks')->insert([
            'name' => "Hardest to Love",
            'length' => "3:31",
            'disc_id' => 4,
        ]);
        DB::table('tracks')->insert([
            'name' => "Scared to Live",
            'length' => "3:11",
            'disc_id' => 4,
        ]);
        DB::table('tracks')->insert([
            'name' => "Snowchild",
            'length' => "4:07",
            'disc_id' => 4,
        ]);
        DB::table('tracks')->insert([
            'name' => "Escape from LA",
            'length' => "5:55",
            'disc_id' => 4,
        ]);
        DB::table('tracks')->insert([
            'name' => "Heartless",
            'length' => "3:21",
            'disc_id' => 4,
        ]);
        DB::table('tracks')->insert([
            'name' => "Faith",
            'length' => "4:43",
            'disc_id' => 4,
        ]);
        DB::table('tracks')->insert([
            'name' => "Blinding Lights",
            'length' => "3:21",
            'disc_id' => 4,
        ]);
        DB::table('tracks')->insert([
            'name' => "In Your Eyes",
            'length' => "3:57",
            'disc_id' => 4,
        ]);
        DB::table('tracks')->insert([
            'name' => "Save Your Tears",
            'length' => "3:35",
            'disc_id' => 4,
        ]);
        DB::table('tracks')->insert([
            'name' => "Repeat After Me (Interlude)",
            'length' => "3:15",
            'disc_id' => 4,
        ]);
        DB::table('tracks')->insert([
            'name' => "After Hours",
            'length' => "6:01",
            'disc_id' => 4,
        ]);
        DB::table('tracks')->insert([
            'name' => "Until I Bleed Out",
            'length' => "3:12",
            'disc_id' => 4,
        ]);
        



        DB::table('tracks')->insert([
            'name' => "Alone Again",
            'length' => "4:10",
            'disc_id' => 5,
        ]);
        DB::table('tracks')->insert([
            'name' => "Too Late",
            'length' => "3:59",
            'disc_id' => 5,
        ]);
        DB::table('tracks')->insert([
            'name' => "Hardest to Love",
            'length' => "3:31",
            'disc_id' => 5,
        ]);
        DB::table('tracks')->insert([
            'name' => "Scared to Live",
            'length' => "3:11",
            'disc_id' => 5,
        ]);
        DB::table('tracks')->insert([
            'name' => "Snowchild",
            'length' => "4:07",
            'disc_id' => 5,
        ]);
        DB::table('tracks')->insert([
            'name' => "Escape from LA",
            'length' => "5:55",
            'disc_id' => 5,
        ]);
        DB::table('tracks')->insert([
            'name' => "Heartless",
            'length' => "3:21",
            'disc_id' => 5,
        ]);
        DB::table('tracks')->insert([
            'name' => "Faith",
            'length' => "4:43",
            'disc_id' => 5,
        ]);


        DB::table('tracks')->insert([
            'name' => "Blinding Lights",
            'length' => "3:21",
            'disc_id' => 6,
        ]);
        DB::table('tracks')->insert([
            'name' => "In Your Eyes",
            'length' => "3:57",
            'disc_id' => 6,
        ]);
        DB::table('tracks')->insert([
            'name' => "Save Your Tears",
            'length' => "3:35",
            'disc_id' => 6,
        ]);
        DB::table('tracks')->insert([
            'name' => "Repeat AFter Me (Interlude)",
            'length' => "3:15",
            'disc_id' => 6,
        ]);
        DB::table('tracks')->insert([
            'name' => "After Hours",
            'length' => "6:01",
            'disc_id' => 6,
        ]);
        DB::table('tracks')->insert([
            'name' => "Until I Bleed Out",
            'length' => "3:12",
            'disc_id' => 6,
        ]);





        DB::table('tracks')->insert([
            'name' => "Speak To Me",
            'length' => "1:13",
            'disc_id' => 7,
        ]);
        DB::table('tracks')->insert([
            'name' => "Breathe",
            'length' => "2:43",
            'disc_id' => 7,
        ]);
        DB::table('tracks')->insert([
            'name' => "On the Run",
            'length' => "3:36",
            'disc_id' => 7,
        ]);
        DB::table('tracks')->insert([
            'name' => "Time",
            'length' => "6:53",
            'disc_id' => 7,
        ]);
        DB::table('tracks')->insert([
            'name' => "The Great Gig in the Sky",
            'length' => "4:36",
            'disc_id' => 7,
        ]);

        DB::table('tracks')->insert([
            'name' => "Money",
            'length' => "6:23",
            'disc_id' => 8,
        ]);
        DB::table('tracks')->insert([
            'name' => "Us and Them",
            'length' => "7:51",
            'disc_id' => 8,
        ]);
        DB::table('tracks')->insert([
            'name' => "Any Colour You Like",
            'length' => "3:26",
            'disc_id' => 8,
        ]);
        DB::table('tracks')->insert([
            'name' => "Brain Damage",
            'length' => "3:49",
            'disc_id' => 8,
        ]);
        DB::table('tracks')->insert([
            'name' => "Eclipse",
            'length' => "2:03",
            'disc_id' => 8,
        ]);

        


        DB::table('tracks')->insert([
            'name' => "I Don't Want to Know",
            'length' => "3:15",
            'disc_id' => 9,
        ]);
        DB::table('tracks')->insert([
            'name' => "Dreams",
            'length' => "4:14",
            'disc_id' => 9,
        ]);
        DB::table('tracks')->insert([
            'name' => "Never Going Back Again",
            'length' => "2:14",
            'disc_id' => 9,
        ]);
        DB::table('tracks')->insert([
            'name' => "Don't Stop",
            'length' => "3:13",
            'disc_id' => 9,
        ]);
        DB::table('tracks')->insert([
            'name' => "Go Your Own Way",
            'length' => "3:43",
            'disc_id' => 9,
        ]);
        DB::table('tracks')->insert([
            'name' => "Songbird",
            'length' => "3:20",
            'disc_id' => 10,
        ]);
        DB::table('tracks')->insert([
            'name' => "The Chain",
            'length' => "4:30",
            'disc_id' => 10,
        ]);
        DB::table('tracks')->insert([
            'name' => "You Make Loving Fun",
            'length' => "3:31",
            'disc_id' => 10,
        ]);
        DB::table('tracks')->insert([
            'name' => "Second Hand News",
            'length' => "2:56",
            'disc_id' => 10,
        ]);
        DB::table('tracks')->insert([
            'name' => "Oh Daddy",
            'length' => "3:56",
            'disc_id' => 10,
        ]);
        DB::table('tracks')->insert([
            'name' => "Gold Dust Woman",
            'length' => "4:56",
            'disc_id' => 10,
        ]);



        DB::table('tracks')->insert([
            'name' => "I Don't Want to Know",
            'length' => "3:15",
            'buyable' => true,
            'price' => 0.99,
            'disc_id' => 11,
        ]);
        DB::table('tracks')->insert([
            'name' => "Dreams",
            'length' => "4:14",
            'buyable' => true,
            'price' => 0.99,
            'disc_id' => 11,
        ]);
        DB::table('tracks')->insert([
            'name' => "Never Going Back Again",
            'length' => "2:14",
            'buyable' => true,
            'price' => 0.99,
            'disc_id' => 11,
        ]);
        DB::table('tracks')->insert([
            'name' => "Don't Stop",
            'length' => "3:13",
            'buyable' => true,
            'price' => 0.99,
            'disc_id' => 11,
        ]);
        DB::table('tracks')->insert([
            'name' => "Go Your Own Way",
            'length' => "3:43",
            'buyable' => true,
            'price' => 0.99,
            'disc_id' => 11,
        ]);
        DB::table('tracks')->insert([
            'name' => "Songbird",
            'length' => "3:20",
            'buyable' => true,
            'price' => 0.99,
            'disc_id' => 11,
        ]);
        DB::table('tracks')->insert([
            'name' => "The Chain",
            'length' => "4:30",
            'buyable' => true,
            'price' => 0.99,
            'disc_id' => 11,
        ]);
        DB::table('tracks')->insert([
            'name' => "You Make Loving Fun",
            'length' => "3:31",
            'buyable' => true,
            'price' => 0.99,
            'disc_id' => 11,
        ]);
        DB::table('tracks')->insert([
            'name' => "Second Hand News",
            'length' => "2:56",
            'buyable' => true,
            'price' => 0.99,
            'disc_id' => 11,
        ]);
        DB::table('tracks')->insert([
            'name' => "Oh Daddy",
            'length' => "3:56",
            'buyable' => true,
            'price' => 0.99,
            'disc_id' => 11,
        ]);
        DB::table('tracks')->insert([
            'name' => "Gold Dust Woman",
            'length' => "4:56",
            'buyable' => true,
            'price' => 0.99,
            'disc_id' => 11,
        ]);




        DB::table('tracks')->insert([
            'name' => "The Unveiling",
            'length' => "5:47",
            'buyable' => true,
            'price' => 0.99,
            'disc_id' => 12,
        ]);
        DB::table('tracks')->insert([
            'name' => "Interdimensional Summit",
            'length' => "4:39",
            'buyable' => true,
            'price' => 0.99,
            'disc_id' => 12,
        ]);
        DB::table('tracks')->insert([
            'name' => "Ætheric",
            'length' => "5:27",
            'buyable' => true,
            'price' => 0.99,
            'disc_id' => 12,
        ]);
        DB::table('tracks')->insert([
            'name' => "Council of Wolves and Snakes",
            'length' => "5:19",
            'buyable' => true,
            'price' => 0.99,
            'disc_id' => 12,
        ]);
        DB::table('tracks')->insert([
            'name' => "The Empyrean Phoenix",
            'length' => "4:44",
            'buyable' => true,
            'price' => 0.99,
            'disc_id' => 12,
        ]);
        DB::table('tracks')->insert([
            'name' => "Lightbringer",
            'length' => "6:06",
            'buyable' => true,
            'price' => 0.99,
            'disc_id' => 12,
        ]);
        DB::table('tracks')->insert([
            'name' => "I Am Sovereign",
            'length' => "6:48",
            'buyable' => true,
            'price' => 0.99,
            'disc_id' => 12,
        ]);
        DB::table('tracks')->insert([
            'name' => "Archaic Correspondance",
            'length' => "4:55",
            'buyable' => true,
            'price' => 0.99,
            'disc_id' => 12,
        ]);
        DB::table('tracks')->insert([
            'name' => "Alpha Aeon Omega",
            'length' => "5:18",
            'buyable' => true,
            'price' => 0.99,
            'disc_id' => 12,
        ]);
        DB::table('tracks')->insert([
            'name' => "Rite of Passage (Instrumental)",
            'length' => "5:16",
            'disc_id' => 12,
        ]);

    }
}
