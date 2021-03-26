<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            'id' => 1,
            'name' => "Leeds Festival",
            'artist' => "Various Artists",
            'time' => \Carbon\Carbon::parse('2021-08-26 08:00'),
            'location' => "Bramham Park, Wetherby",
            'description' => "Festivals… They are back! Since the government’s roadmap out of lockdown was announced, several UK festivals have said they are planning to go ahead this summer. One of the first to confirm its return was Leeds Festival.",
            'image' => "static/leeds-2021-small.webp",
        ]);
        DB::table('events')->insert([
            'id' => 2,
            'name' => "Melodrama tour",
            'artist' => "Lorde",
            'time' => \Carbon\Carbon::parse('2021-09-01 20:00'),
            'location' => "Birmingham NEC",
            'description' => "New Zealand-born singer-songwriter Lorde has finally released the long-awaited follow-up to her debut album Pure Heroine, and she is going out on a major World Tour in support of it!",
            'image' => "static/lorde-small.webp",
        ]);
        DB::table('events')->insert([
            'id' => 3,
            'name' => "Young Dumb Thrills Tour",
            'artist' => "McFly",
            'time' => \Carbon\Carbon::parse('2021-05-16 18:00'),
            'location' => "Manchester AO Arena",
            'description' => "McFly have announced their rescheduled dates for their Young Dumb Thrills Tour! They will now play UK arenas throughout May 2021. Original tickets remain valid.",
            'image' => "static/Mcfly-small.webp",
        ]);
        DB::table('events')->insert([
            'id' => 4,
            'name' => "God Save The Rave UK Tour",
            'artist' => "Scooter",
            'time' => \Carbon\Carbon::parse('2021-05-01 18:00'),
            'location' => "02 Victoria Warehouse, Manchester",
            'description' => "Germany's most successful techno-band Scooter have just announced their spectacular UK tour in early 2021. The sixth chapter of the band's history is in full swing and unstoppable.",
            'image' => "static/scooter-small.webp",
        ]);
        DB::table('events')->insert([
            'id' => 5,
            'name' => "European Rhapsody tour",
            'artist' => "Adam Lambert & Queen",
            'time' => \Carbon\Carbon::parse('2021-06-06 19:00'),
            'location' => "The 02, London",
            'description' => "Following Brian May and Roger Taylor's appearance with Adam Lambert on the final of American Idol in 2009, Queen + Adam Lambert became a long-term proposition, touring extensively with their new frontman. ",
            'image' => "static/queen-adam-lambert-small.webp",
        ]);
        DB::table('events')->insert([
            'id' => 6,
            'name' => "An Evening with Michael Bublé",
            'artist' => "Michael Bublé",
            'time' => \Carbon\Carbon::parse('2021-07-13 17:30'),
            'location' => "Harewood House, Leeds",
            'description' => "Grammy-award winning global megastar Michael Bublé will return to the UK next year with a very special tour that will visit beautiful stately homes, castles and cricket grounds across the country.",
            'image' => "static/michaelbuble-small.webp",
        ]);
    }
}
