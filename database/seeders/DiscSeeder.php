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
            'name' => "Disc 1",
        ]);
        DB::table('discs')->insert([
            'id' => 3,
            'album_id' => 3,
            'name' => "Disc 1",
        ]);
        DB::table('discs')->insert([
            'id' => 4,
            'album_id' => 4,
            'name' => "Disc 1",
        ]);
        DB::table('discs')->insert([
            'id' => 5,
            'album_id' => 5,
            'name' => "Disc 1",
        ]);
        DB::table('discs')->insert([
            'id' => 6,
            'album_id' => 5,
            'name' => "Disc 2",
        ]);
    }
}
