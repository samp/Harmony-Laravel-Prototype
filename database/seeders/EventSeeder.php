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
            'name' => "Event 1",
            'artist' => "Artist 1",
            'time' => \Carbon\Carbon::parse('2020-08-20'),
            'location' => "Location 1",
            'description' => "Description 1",
            'image' => "static/melodrama.jpg",
        ]);
        DB::table('events')->insert([
            'id' => 2,
            'name' => "Event 2",
            'artist' => "Artist 2",
            'time' => \Carbon\Carbon::parse('2021-08-21'),
            'location' => "Location 2",
            'description' => "Description 2",
            'image' => "static/melodrama.jpg",
        ]);
        DB::table('events')->insert([
            'id' => 3,
            'name' => "Event 3",
            'artist' => "Artist 3",
            'time' => \Carbon\Carbon::parse('2021-08-22'),
            'location' => "Location 3",
            'description' => "Description 3",
            'image' => "static/melodrama.jpg",
        ]);
    }
}
