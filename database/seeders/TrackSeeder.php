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



        DB::table('tracks')->insert([
            'name' => "The Unveiling",
            'length' => "5:47",
            'disc_id' => 14,
        ]);
        DB::table('tracks')->insert([
            'name' => "Interdimensional Summit",
            'length' => "4:39",
            'disc_id' => 14,
        ]);
        DB::table('tracks')->insert([
            'name' => "Ætheric",
            'length' => "5:27",
            'disc_id' => 14,
        ]);
        DB::table('tracks')->insert([
            'name' => "Council of Wolves and Snakes",
            'length' => "5:19",
            'disc_id' => 14,
        ]);
        DB::table('tracks')->insert([
            'name' => "The Empyrean Phoenix",
            'length' => "4:44",
            'disc_id' => 14,
        ]);
        DB::table('tracks')->insert([
            'name' => "Lightbringer",
            'length' => "6:06",
            'disc_id' => 14,
        ]);
        DB::table('tracks')->insert([
            'name' => "I Am Sovereign",
            'length' => "6:48",
            'disc_id' => 14,
        ]);
        DB::table('tracks')->insert([
            'name' => "Archaic Correspondance",
            'length' => "4:55",
            'disc_id' => 14,
        ]);
        DB::table('tracks')->insert([
            'name' => "Alpha Aeon Omega",
            'length' => "5:18",
            'disc_id' => 14,
        ]);
        DB::table('tracks')->insert([
            'name' => "Rite of Passage (Instrumental)",
            'length' => "5:16",
            'disc_id' => 14,
        ]);



        DB::table('tracks')->insert([
            'name' => "City of Sin (Feat. Ed Sheeran)",
            'length' => "1:43",
            'disc_id' => 13,
        ]);
        DB::table('tracks')->insert([
            'name' => "No Smoke (Feat. Miguel and Travis Barker)",
            'length' => "3:19",
            'disc_id' => 13,
        ]);
        DB::table('tracks')->insert([
            'name' => "Five Hundred Dollar Candles (Feat. Dom Kennedy)",
            'length' => "4:47",
            'disc_id' => 13,
        ]);
        DB::table('tracks')->insert([
            'name' => "The Light",
            'length' => "3:19",
            'disc_id' => 13,
        ]);
        DB::table('tracks')->insert([
            'name' => "Carmen Electra (Feat. Mozzy, OSBE Chill and TOBi)",
            'length' => "4:16",
            'disc_id' => 13,
        ]);
        DB::table('tracks')->insert([
            'name' => "Dead Homies (Feat. Red Cafe)",
            'length' => "2:53",
            'disc_id' => 13,
        ]);
        DB::table('tracks')->insert([
            'name' => "Gold Daytonas (Feat. Dom Kennedy)",
            'length' => "2:53",
            'disc_id' => 13,
        ]);
        DB::table('tracks')->insert([
            'name' => "West Side",
            'length' => "2:50",
            'disc_id' => 13,
        ]);
        DB::table('tracks')->insert([
            'name' => "40 Ounce Love (Feat. Just Liv)",
            'length' => "2:57",
            'disc_id' => 13,
        ]);
        DB::table('tracks')->insert([
            'name' => "Gucci Flip Flops",
            'length' => "2:57",
            'disc_id' => 13,
        ]);
        DB::table('tracks')->insert([
            'name' => "Born 2 Rap",
            'length' => "3:50",
            'disc_id' => 13,
        ]);
        DB::table('tracks')->insert([
            'name' => "Welcome Home (Feat. Nipsey Hussle)",
            'length' => "4:33",
            'disc_id' => 13,
        ]);
        DB::table('tracks')->insert([
            'name' => "Help Me (Interlude) [feat. Sly]",
            'length' => "2:18",
            'disc_id' => 13,
        ]);
        DB::table('tracks')->insert([
            'name' => "I Didn't Wanna Write This Song (Feat. Marsha Ambrosius)",
            'length' => "4:21",
            'disc_id' => 13,
        ]);
        DB::table('tracks')->insert([
            'name' => "The Code (Feat. 21 Savage)",
            'length' => "5:49",
            'disc_id' => 13,
        ]);
        DB::table('tracks')->insert([
            'name' => "Stay Down (Feat. Bryson Tiller)",
            'length' => "3:36",
            'disc_id' => 13,
        ]);
        DB::table('tracks')->insert([
            'name' => "Hug the Block",
            'length' => "4:57",
            'disc_id' => 13,
        ]);
        DB::table('tracks')->insert([
            'name' => "Ask for Me",
            'length' => "2:38",
            'disc_id' => 13,
        ]);
        DB::table('tracks')->insert([
            'name' => "Stainless (Feat. Anderson .Paak)",
            'length' => "3:59",
            'disc_id' => 13,
        ]);
        DB::table('tracks')->insert([
            'name' => "Gangstas Make the Girls Go Wild (Feat. Chris Brown)",
            'length' => "2:48",
            'disc_id' => 13,
        ]);
        DB::table('tracks')->insert([
            'name' => "Blood Thicker Than Water (Feat. Trey Songz)",
            'length' => "3:46",
            'disc_id' => 13,
        ]);
        DB::table('tracks')->insert([
            'name' => "Rewind II",
            'length' => "2:24",
            'disc_id' => 13,
        ]);
        DB::table('tracks')->insert([
            'name' => "One Life (Feat. J. Stone and Masego)",
            'length' => "5:14",
            'disc_id' => 13,
        ]);
        DB::table('tracks')->insert([
            'name' => "Cross On Jesus Back (Feat. D Smoke)",
            'length' => "3:28",
            'disc_id' => 13,
        ]);
        DB::table('tracks')->insert([
            'name' => "Roadside (Feat. Ed Sheeran)",
            'length' => "3:54",
            'disc_id' => 13,
        ]);



        DB::table('tracks')->insert([
            'name' => "Shut Up",
            'length' => "2:37",
            'buyable' => true,
            'price' => 0.49,
            'disc_id' => 15,
        ]);
        DB::table('tracks')->insert([
            'name' => "34+35",
            'length' => "2:53",
            'buyable' => true,
            'price' => 0.49,
            'disc_id' => 15,
        ]);
        DB::table('tracks')->insert([
            'name' => "Motive (with Doja Cat)",
            'length' => "2:47",
            'buyable' => true,
            'price' => 0.49,
            'disc_id' => 15,
        ]);
        DB::table('tracks')->insert([
            'name' => "Just like Magic",
            'length' => "2:29",
            'buyable' => true,
            'price' => 0.49,
            'disc_id' => 15,
        ]);
        DB::table('tracks')->insert([
            'name' => "Off the Table (with the Weeknd)",
            'length' => "3:59",
            'buyable' => true,
            'price' => 0.49,
            'disc_id' => 15,
        ]);
        DB::table('tracks')->insert([
            'name' => "Six Thirty",
            'length' => "3:04",
            'buyable' => true,
            'price' => 0.49,
            'disc_id' => 15,
        ]);
        DB::table('tracks')->insert([
            'name' => "Safety Net",
            'length' => "3:28",
            'buyable' => true,
            'price' => 0.49,
            'disc_id' => 15,
        ]);
        DB::table('tracks')->insert([
            'name' => "My Hair",
            'length' => "2:38",
            'buyable' => true,
            'price' => 0.49,
            'disc_id' => 15,
        ]);
        DB::table('tracks')->insert([
            'name' => "Nasty",
            'length' => "3:20",
            'buyable' => true,
            'price' => 0.49,
            'disc_id' => 15,
        ]);
        DB::table('tracks')->insert([
            'name' => "West Side",
            'length' => "2:12",
            'buyable' => true,
            'price' => 0.49,
            'disc_id' => 15,
        ]);
        DB::table('tracks')->insert([
            'name' => "Love Language",
            'length' => "2:59",
            'buyable' => true,
            'price' => 0.49,
            'disc_id' => 15,
        ]);
        DB::table('tracks')->insert([
            'name' => "Positions",
            'length' => "2:52",
            'buyable' => true,
            'price' => 0.49,
            'disc_id' => 15,
        ]);
        DB::table('tracks')->insert([
            'name' => "Obvious",
            'length' => "2:28",
            'buyable' => true,
            'price' => 0.49,
            'disc_id' => 15,
        ]);
        DB::table('tracks')->insert([
            'name' => "POV",
            'length' => "3:21",
            'buyable' => true,
            'price' => 0.49,
            'disc_id' => 15,
        ]);
        DB::table('tracks')->insert([
            'name' => "Someone like u (interlude)",
            'length' => "1:16",
            'disc_id' => 15,
        ]);
        DB::table('tracks')->insert([
            'name' => "Test Drive",
            'length' => "2:02",
            'disc_id' => 15,
        ]);
        DB::table('tracks')->insert([
            'name' => "34+35 (remix) (featuring Doja Cat and Megan Thee Stallion)",
            'length' => "3:03",
            'disc_id' => 15,
        ]);
        DB::table('tracks')->insert([
            'name' => "Worst Behaviour",
            'length' => "2:04",
            'disc_id' => 15,
        ]);
        DB::table('tracks')->insert([
            'name' => "Main Thing",
            'length' => "2:09",
            'disc_id' => 15,
        ]);


        DB::table('tracks')->insert([
            'name' => "Shut Up",
            'length' => "2:37",
            'disc_id' => 16,
        ]);
        DB::table('tracks')->insert([
            'name' => "34+35",
            'length' => "2:53",
            'disc_id' => 16,
        ]);
        DB::table('tracks')->insert([
            'name' => "Motive (with Doja Cat)",
            'length' => "2:47",
            'disc_id' => 16,
        ]);
        DB::table('tracks')->insert([
            'name' => "Just like Magic",
            'length' => "2:29",
            'disc_id' => 16,
        ]);
        DB::table('tracks')->insert([
            'name' => "Off the Table (with the Weeknd)",
            'length' => "3:59",
            'disc_id' => 16,
        ]);
        DB::table('tracks')->insert([
            'name' => "Six Thirty",
            'length' => "3:04",
            'disc_id' => 16,
        ]);
        DB::table('tracks')->insert([
            'name' => "Safety Net",
            'length' => "3:28",
            'disc_id' => 16,
        ]);
        DB::table('tracks')->insert([
            'name' => "My Hair",
            'length' => "2:38",
            'disc_id' => 16,
        ]);
        DB::table('tracks')->insert([
            'name' => "Nasty",
            'length' => "3:20",
            'disc_id' => 16,
        ]);
        DB::table('tracks')->insert([
            'name' => "West Side",
            'length' => "2:12",
            'disc_id' => 16,
        ]);
        DB::table('tracks')->insert([
            'name' => "Love Language",
            'length' => "2:59",
            'disc_id' => 16,
        ]);
        DB::table('tracks')->insert([
            'name' => "Positions",
            'length' => "2:52",
            'disc_id' => 16,
        ]);
        DB::table('tracks')->insert([
            'name' => "Obvious",
            'length' => "2:28",
            'disc_id' => 16,
        ]);
        DB::table('tracks')->insert([
            'name' => "POV",
            'length' => "3:21",
            'disc_id' => 16,
        ]);




        DB::table('tracks')->insert([
            'name' => "Imagine",
            'length' => "3:32",
            'buyable' => true,
            'price' => 0.49,
            'disc_id' => 17,
        ]);
        DB::table('tracks')->insert([
            'name' => "Needy",
            'length' => "2:51",
            'buyable' => true,
            'price' => 0.49,
            'disc_id' => 17,
        ]);
        DB::table('tracks')->insert([
            'name' => "NASA",
            'length' => "3:02",
            'buyable' => true,
            'price' => 0.49,
            'disc_id' => 17,
        ]);
        DB::table('tracks')->insert([
            'name' => "Bloodline",
            'length' => "3:36",
            'buyable' => true,
            'price' => 0.49,
            'disc_id' => 17,
        ]);
        DB::table('tracks')->insert([
            'name' => "Fake Smile",
            'length' => "3:28",
            'buyable' => true,
            'price' => 0.49,
            'disc_id' => 17,
        ]);
        DB::table('tracks')->insert([
            'name' => "Bad Idea",
            'length' => "4:27",
            'buyable' => true,
            'price' => 0.49,
            'disc_id' => 17,
        ]);
        DB::table('tracks')->insert([
            'name' => "Make Up",
            'length' => "2:20",
            'buyable' => true,
            'price' => 0.49,
            'disc_id' => 17,
        ]);
        DB::table('tracks')->insert([
            'name' => "Ghostin",
            'length' => "4:31",
            'buyable' => true,
            'price' => 0.49,
            'disc_id' => 17,
        ]);
        DB::table('tracks')->insert([
            'name' => "In My Head",
            'length' => "3:42",
            'buyable' => true,
            'price' => 0.49,
            'disc_id' => 17,
        ]);
        DB::table('tracks')->insert([
            'name' => "7 Rings",
            'length' => "2:58",
            'buyable' => true,
            'price' => 0.49,
            'disc_id' => 17,
        ]);
        DB::table('tracks')->insert([
            'name' => "Thank U, Next",
            'length' => "3:27",
            'buyable' => true,
            'price' => 0.49,
            'disc_id' => 17,
        ]);
        DB::table('tracks')->insert([
            'name' => "Break Up with Your Girlfriend, I'm Bored",
            'length' => "3:10",
            'buyable' => true,
            'price' => 0.49,
            'disc_id' => 17,
        ]);



        DB::table('tracks')->insert([
            'name' => "Imagine",
            'length' => "3:32",
            'disc_id' => 18,
        ]);
        DB::table('tracks')->insert([
            'name' => "Needy",
            'length' => "2:51",
            'disc_id' => 18,
        ]);
        DB::table('tracks')->insert([
            'name' => "NASA",
            'length' => "3:02",
            'disc_id' => 18,
        ]);
        DB::table('tracks')->insert([
            'name' => "Bloodline",
            'length' => "3:36",
            'disc_id' => 18,
        ]);
        DB::table('tracks')->insert([
            'name' => "Fake Smile",
            'length' => "3:28",
            'disc_id' => 18,
        ]);
        DB::table('tracks')->insert([
            'name' => "Bad Idea",
            'length' => "4:27",
            'disc_id' => 18,
        ]);
        DB::table('tracks')->insert([
            'name' => "Make Up",
            'length' => "2:20",
            'disc_id' => 18,
        ]);
        DB::table('tracks')->insert([
            'name' => "Ghostin",
            'length' => "4:31",
            'disc_id' => 18,
        ]);
        DB::table('tracks')->insert([
            'name' => "In My Head",
            'length' => "3:42",
            'disc_id' => 18,
        ]);
        DB::table('tracks')->insert([
            'name' => "7 Rings",
            'length' => "2:58",
            'disc_id' => 18,
        ]);
        DB::table('tracks')->insert([
            'name' => "Thank U, Next",
            'length' => "3:27",
            'disc_id' => 18,
        ]);
        DB::table('tracks')->insert([
            'name' => "Break Up with Your Girlfriend, I'm Bored",
            'length' => "3:10",
            'disc_id' => 18,
        ]);




        DB::table('tracks')->insert([
            'name' => "Raindrops (An Angel Cried)",
            'length' => "0:37",
            'disc_id' => 19,
        ]);
        DB::table('tracks')->insert([
            'name' => "Blazed (featuring Pharrell Williams)",
            'length' => "3:16",
            'buyable' => true,
            'price' => 0.49,
            'disc_id' => 19,
        ]);
        DB::table('tracks')->insert([
            'name' => "The Light Is Coming (featuring Nicki Minaj)",
            'length' => "3:48",
            'buyable' => true,
            'price' => 0.49,
            'disc_id' => 19,
        ]);
        DB::table('tracks')->insert([
            'name' => "R.E.M.",
            'length' => "4:05",
            'buyable' => true,
            'price' => 0.49,
            'disc_id' => 19,
        ]);
        DB::table('tracks')->insert([
            'name' => "God Is a Woman",
            'length' => "3:17",
            'buyable' => true,
            'price' => 0.49,
            'disc_id' => 19,
        ]);
        DB::table('tracks')->insert([
            'name' => "Sweetener",
            'length' => "3:28",
            'buyable' => true,
            'price' => 0.49,
            'disc_id' => 19,
        ]);
        DB::table('tracks')->insert([
            'name' => "Successful",
            'length' => "3:47",
            'buyable' => true,
            'price' => 0.49,
            'disc_id' => 19,
        ]);
        DB::table('tracks')->insert([
            'name' => "Everytime",
            'length' => "2:52",
            'buyable' => true,
            'price' => 0.49,
            'disc_id' => 19,
        ]);
        DB::table('tracks')->insert([
            'name' => "Breathin",
            'length' => "3:18",
            'buyable' => true,
            'price' => 0.49,
            'disc_id' => 19,
        ]);
        DB::table('tracks')->insert([
            'name' => "No Tears Left to Cry",
            'length' => "3:25",
            'buyable' => true,
            'price' => 0.49,
            'disc_id' => 19,
        ]);
        DB::table('tracks')->insert([
            'name' => "Borderline (featuring Missy Elliott)",
            'length' => "2:57",
            'buyable' => true,
            'price' => 0.49,
            'disc_id' => 19,
        ]);
        DB::table('tracks')->insert([
            'name' => "Better Off",
            'length' => "2:51",
            'buyable' => true,
            'price' => 0.49,
            'disc_id' => 19,
        ]);
        DB::table('tracks')->insert([
            'name' => "Goodnight n Go",
            'length' => "3:09",
            'buyable' => true,
            'price' => 0.49,
            'disc_id' => 19,
        ]);
        DB::table('tracks')->insert([
            'name' => "Pete Davidson",
            'length' => "1:13",
            'buyable' => true,
            'price' => 0.49,
            'disc_id' => 19,
        ]);
        DB::table('tracks')->insert([
            'name' => "Get Well Soon",
            'length' => "5:22",
            'buyable' => true,
            'price' => 0.49,
            'disc_id' => 19,
        ]);



        DB::table('tracks')->insert([
            'name' => "Raindrops (An Angel Cried)",
            'length' => "0:37",
            'disc_id' => 20,
        ]);
        DB::table('tracks')->insert([
            'name' => "Blazed (featuring Pharrell Williams)",
            'length' => "3:16",
            'disc_id' => 20,
        ]);
        DB::table('tracks')->insert([
            'name' => "The Light Is Coming (featuring Nicki Minaj)",
            'length' => "3:48",
            'disc_id' => 20,
        ]);
        DB::table('tracks')->insert([
            'name' => "R.E.M.",
            'length' => "4:05",
            'disc_id' => 20,
        ]);
        DB::table('tracks')->insert([
            'name' => "God Is a Woman",
            'length' => "3:17",
            'disc_id' => 20,
        ]);
        DB::table('tracks')->insert([
            'name' => "Sweetener",
            'length' => "3:28",
            'disc_id' => 20,
        ]);
        DB::table('tracks')->insert([
            'name' => "Successful",
            'length' => "3:47",
            'disc_id' => 20,
        ]);
        DB::table('tracks')->insert([
            'name' => "Everytime",
            'length' => "2:52",
            'disc_id' => 20,
        ]);
        DB::table('tracks')->insert([
            'name' => "Breathin",
            'length' => "3:18",
            'disc_id' => 20,
        ]);
        DB::table('tracks')->insert([
            'name' => "No Tears Left to Cry",
            'length' => "3:25",
            'disc_id' => 20,
        ]);
        DB::table('tracks')->insert([
            'name' => "Borderline (featuring Missy Elliott)",
            'length' => "2:57",
            'disc_id' => 20,
        ]);
        DB::table('tracks')->insert([
            'name' => "Better Off",
            'length' => "2:51",
            'disc_id' => 20,
        ]);
        DB::table('tracks')->insert([
            'name' => "Goodnight n Go",
            'length' => "3:09",
            'disc_id' => 20,
        ]);
        DB::table('tracks')->insert([
            'name' => "Pete Davidson",
            'length' => "1:13",
            'disc_id' => 20,
        ]);
        DB::table('tracks')->insert([
            'name' => "Get Well Soon",
            'length' => "5:22",
            'disc_id' => 20,
        ]);





        DB::table('tracks')->insert([
            'name' => "Moonlight",
            'length' => "3:22",
            'buyable' => true,
            'price' => 0.49,
            'disc_id' => 21,
        ]);
        DB::table('tracks')->insert([
            'name' => "Dangerous Woman",
            'length' => "3:56",
            'buyable' => true,
            'price' => 0.49,
            'disc_id' => 21,
        ]);
        DB::table('tracks')->insert([
            'name' => "Be Alright",
            'length' => "2:59",
            'buyable' => true,
            'price' => 0.49,
            'disc_id' => 21,
        ]);
        DB::table('tracks')->insert([
            'name' => "Into You",
            'length' => "4:04",
            'buyable' => true,
            'price' => 0.49,
            'disc_id' => 21,
        ]);
        DB::table('tracks')->insert([
            'name' => "Side to Side",
            'length' => "3:46",
            'buyable' => true,
            'price' => 0.49,
            'disc_id' => 21,
        ]);
        DB::table('tracks')->insert([
            'name' => "Let Me Love You",
            'length' => "3:44",
            'buyable' => true,
            'price' => 0.49,
            'disc_id' => 21,
        ]);
        DB::table('tracks')->insert([
            'name' => "Greedy",
            'length' => "3:35",
            'buyable' => true,
            'price' => 0.49,
            'disc_id' => 21,
        ]);
        DB::table('tracks')->insert([
            'name' => "Leave Me Lonely",
            'length' => "3:50",
            'buyable' => true,
            'price' => 0.49,
            'disc_id' => 21,
        ]);
        DB::table('tracks')->insert([
            'name' => "Everyday",
            'length' => "3:15",
            'buyable' => true,
            'price' => 0.49,
            'disc_id' => 21,
        ]);
        DB::table('tracks')->insert([
            'name' => "Sometimes",
            'length' => "3:47",
            'disc_id' => 21,
        ]);
        DB::table('tracks')->insert([
            'name' => "I Don't Care",
            'length' => "2:58",
            'disc_id' => 21,
        ]);
        DB::table('tracks')->insert([
            'name' => "Bad Decisions",
            'length' => "3:46",
            'disc_id' => 21,
        ]);
        DB::table('tracks')->insert([
            'name' => "Touch It",
            'length' => "4:20",
            'buyable' => true,
            'price' => 0.49,
            'disc_id' => 21,
        ]);
        DB::table('tracks')->insert([
            'name' => "Knew Better / Forever Boy",
            'length' => "4:59",
            'disc_id' => 21,
        ]);
        DB::table('tracks')->insert([
            'name' => "Thinking Bout You",
            'length' => "3:20",
            'buyable' => true,
            'price' => 0.49,
            'disc_id' => 21,
        ]);




        DB::table('tracks')->insert([
            'name' => "Moonlight",
            'length' => "3:22",
            'disc_id' => 22,
        ]);
        DB::table('tracks')->insert([
            'name' => "Dangerous Woman",
            'length' => "3:56",
            'disc_id' => 22,
        ]);
        DB::table('tracks')->insert([
            'name' => "Be Alright",
            'length' => "2:59",
            'disc_id' => 22,
        ]);
        DB::table('tracks')->insert([
            'name' => "Into You",
            'length' => "4:04",
            'disc_id' => 22,
        ]);
        DB::table('tracks')->insert([
            'name' => "Side to Side",
            'length' => "3:46",
            'disc_id' => 22,
        ]);
        DB::table('tracks')->insert([
            'name' => "Let Me Love You",
            'length' => "3:44",
            'disc_id' => 22,
        ]);
        DB::table('tracks')->insert([
            'name' => "Greedy",
            'length' => "3:35",
            'disc_id' => 22,
        ]);
        DB::table('tracks')->insert([
            'name' => "Leave Me Lonely",
            'length' => "3:50",
            'disc_id' => 22,
        ]);
        DB::table('tracks')->insert([
            'name' => "Everyday",
            'length' => "3:15",
            'disc_id' => 22,
        ]);
        DB::table('tracks')->insert([
            'name' => "Sometimes",
            'length' => "3:47",
            'disc_id' => 22,
        ]);
        DB::table('tracks')->insert([
            'name' => "I Don't Care",
            'length' => "2:58",
            'disc_id' => 22,
        ]);
        DB::table('tracks')->insert([
            'name' => "Bad Decisions",
            'length' => "3:46",
            'disc_id' => 22,
        ]);
        DB::table('tracks')->insert([
            'name' => "Touch It",
            'length' => "4:20",
            'disc_id' => 22,
        ]);
        DB::table('tracks')->insert([
            'name' => "Knew Better / Forever Boy",
            'length' => "4:59",
            'disc_id' => 22,
        ]);
        DB::table('tracks')->insert([
            'name' => "Thinking Bout You",
            'length' => "3:20",
            'disc_id' => 22,
        ]);



        DB::table('tracks')->insert([
            'name' => "The 1",
            'length' => "3:30",
            'buyable' => true,
            'price' => 0.99,
            'disc_id' => 23,
        ]);
        DB::table('tracks')->insert([
            'name' => "Cardigan",
            'length' => "3:59",
            'buyable' => true,
            'price' => 0.99,
            'disc_id' => 23,
        ]);
        DB::table('tracks')->insert([
            'name' => "The Last Great American Dynasty",
            'length' => "3:51",
            'buyable' => true,
            'price' => 0.99,
            'disc_id' => 23,
        ]);
        DB::table('tracks')->insert([
            'name' => "Exile (Feat. Bon Iver)",
            'length' => "4:45",
            'buyable' => true,
            'price' => 0.99,
            'disc_id' => 23,
        ]);
        DB::table('tracks')->insert([
            'name' => "My Tears Ricochet",
            'length' => "4:15",
            'buyable' => true,
            'price' => 0.99,
            'disc_id' => 23,
        ]);
        DB::table('tracks')->insert([
            'name' => "Mirrorball",
            'length' => "3:29",
            'buyable' => true,
            'price' => 0.99,
            'disc_id' => 23,
        ]);
        DB::table('tracks')->insert([
            'name' => "Seven",
            'length' => "3:28",
            'buyable' => true,
            'price' => 0.99,
            'disc_id' => 23,
        ]);
        DB::table('tracks')->insert([
            'name' => "August",
            'length' => "4:21",
            'buyable' => true,
            'price' => 0.99,
            'disc_id' => 23,
        ]);
        DB::table('tracks')->insert([
            'name' => "This Is Me Trying",
            'length' => "3:15",
            'buyable' => true,
            'price' => 0.99,
            'disc_id' => 23,
        ]);
        DB::table('tracks')->insert([
            'name' => "Illicit Affairs",
            'length' => "3:10",
            'buyable' => true,
            'price' => 0.99,
            'disc_id' => 23,
        ]);
        DB::table('tracks')->insert([
            'name' => "Invisible String",
            'length' => "4:12",
            'buyable' => true,
            'price' => 0.99,
            'disc_id' => 23,
        ]);
        DB::table('tracks')->insert([
            'name' => "Mad Woman",
            'length' => "3:57",
            'buyable' => true,
            'price' => 0.99,
            'disc_id' => 23,
        ]);
        DB::table('tracks')->insert([
            'name' => "Epiphany",
            'length' => "4:49",
            'buyable' => true,
            'price' => 0.99,
            'disc_id' => 23,
        ]);
        DB::table('tracks')->insert([
            'name' => "Betty",
            'length' => "4:54",
            'buyable' => true,
            'price' => 0.99,
            'disc_id' => 23,
        ]);
        DB::table('tracks')->insert([
            'name' => "Peace",
            'length' => "5:54",
            'buyable' => true,
            'price' => 0.99,
            'disc_id' => 23,
        ]);
        DB::table('tracks')->insert([
            'name' => "Hoax",
            'length' => "3:40",
            'buyable' => true,
            'price' => 0.99,
            'disc_id' => 23,
        ]);
        DB::table('tracks')->insert([
            'name' => "The Lakes",
            'length' => "3:32",
            'buyable' => true,
            'price' => 0.99,
            'disc_id' => 23,
        ]);



        DB::table('tracks')->insert([
            'name' => "Invitation",
            'length' => "3:19",
            'buyable' => true,
            'price' => 0.99,
            'disc_id' => 24,
        ]);
        DB::table('tracks')->insert([
            'name' => "Do You Wanna Come Over?",
            'length' => "3:22",
            'buyable' => true,
            'price' => 0.99,
            'disc_id' => 24,
        ]);
        DB::table('tracks')->insert([
            'name' => "Make Me... (Feat. G-Eazy)",
            'length' => "3:51",
            'buyable' => true,
            'price' => 0.99,
            'disc_id' => 24,
        ]);
        DB::table('tracks')->insert([
            'name' => "Private Show",
            'length' => "3:54",
            'buyable' => true,
            'price' => 0.99,
            'disc_id' => 24,
        ]);
        DB::table('tracks')->insert([
            'name' => "Man On the Moon",
            'length' => "3:46",
            'buyable' => true,
            'price' => 0.99,
            'disc_id' => 24,
        ]);
        DB::table('tracks')->insert([
            'name' => "Just Luv Me",
            'length' => "4:01",
            'buyable' => true,
            'price' => 0.99,
            'disc_id' => 24,
        ]);
        DB::table('tracks')->insert([
            'name' => "Clumsy",
            'length' => "3:02",
            'buyable' => true,
            'price' => 0.99,
            'disc_id' => 24,
        ]);
        DB::table('tracks')->insert([
            'name' => "Slumber Party",
            'length' => "3:34",
            'buyable' => true,
            'price' => 0.99,
            'disc_id' => 24,
        ]);
        DB::table('tracks')->insert([
            'name' => "Just Like Me",
            'length' => "2:44",
            'buyable' => true,
            'price' => 0.99,
            'disc_id' => 24,
        ]);
        DB::table('tracks')->insert([
            'name' => "Love Me Down",
            'length' => "3:18",
            'buyable' => true,
            'price' => 0.99,
            'disc_id' => 24,
        ]);
        DB::table('tracks')->insert([
            'name' => "Hard to Forget Ya",
            'length' => "3:30",
            'buyable' => true,
            'price' => 0.99,
            'disc_id' => 24,
        ]);
        DB::table('tracks')->insert([
            'name' => "What You Need",
            'length' => "3:07",
            'buyable' => true,
            'price' => 0.99,
            'disc_id' => 24,
        ]);
        DB::table('tracks')->insert([
            'name' => "Better",
            'length' => "3:10",
            'buyable' => true,
            'price' => 0.99,
            'disc_id' => 24,
        ]);
        DB::table('tracks')->insert([
            'name' => "Change Your Mind (No Seas Cortes)",
            'length' => "3:00",
            'buyable' => true,
            'price' => 0.99,
            'disc_id' => 24,
        ]);
        DB::table('tracks')->insert([
            'name' => "Liar",
            'length' => "3:16",
            'buyable' => true,
            'price' => 0.99,
            'disc_id' => 24,
        ]);
        DB::table('tracks')->insert([
            'name' => "If I'm Dancing",
            'length' => "3:24",
            'buyable' => true,
            'price' => 0.99,
            'disc_id' => 24,
        ]);
        DB::table('tracks')->insert([
            'name' => "Coupure Electrique",
            'length' => "2:22",
            'buyable' => true,
            'price' => 0.99,
            'disc_id' => 24,
        ]);


        DB::table('tracks')->insert([
            'name' => "Invitation",
            'length' => "3:19",
            'disc_id' => 25,
        ]);
        DB::table('tracks')->insert([
            'name' => "Do You Wanna Come Over?",
            'length' => "3:22",
            'disc_id' => 25,
        ]);
        DB::table('tracks')->insert([
            'name' => "Make Me... (Feat. G-Eazy)",
            'length' => "3:51",
            'disc_id' => 25,
        ]);
        DB::table('tracks')->insert([
            'name' => "Private Show",
            'length' => "3:54",
            'disc_id' => 25,
        ]);
        DB::table('tracks')->insert([
            'name' => "Man On the Moon",
            'length' => "3:46",
            'disc_id' => 25,
        ]);
        DB::table('tracks')->insert([
            'name' => "Just Luv Me",
            'length' => "4:01",
            'disc_id' => 25,
        ]);
        DB::table('tracks')->insert([
            'name' => "Clumsy",
            'length' => "3:02",
            'disc_id' => 25,
        ]);
        DB::table('tracks')->insert([
            'name' => "Slumber Party",
            'length' => "3:34",
            'disc_id' => 25,
        ]);
        DB::table('tracks')->insert([
            'name' => "Just Like Me",
            'length' => "2:44",
            'disc_id' => 25,
        ]);
        DB::table('tracks')->insert([
            'name' => "Love Me Down",
            'length' => "3:18",
            'disc_id' => 25,
        ]);
        DB::table('tracks')->insert([
            'name' => "Hard to Forget Ya",
            'length' => "3:30",
            'disc_id' => 25,
        ]);
        DB::table('tracks')->insert([
            'name' => "What You Need",
            'length' => "3:07",
            'disc_id' => 25,
        ]);
        DB::table('tracks')->insert([
            'name' => "Better",
            'length' => "3:10",
            'disc_id' => 25,
        ]);
        DB::table('tracks')->insert([
            'name' => "Change Your Mind (No Seas Cortes)",
            'length' => "3:00",
            'disc_id' => 25,
        ]);
        DB::table('tracks')->insert([
            'name' => "Liar",
            'length' => "3:16",
            'disc_id' => 25,
        ]);
        DB::table('tracks')->insert([
            'name' => "If I'm Dancing",
            'length' => "3:24",
            'disc_id' => 25,
        ]);
        DB::table('tracks')->insert([
            'name' => "Coupure Electrique",
            'length' => "2:22",
            'disc_id' => 25,
        ]);
        
        
    }
}
