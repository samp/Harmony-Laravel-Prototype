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
    }
}
