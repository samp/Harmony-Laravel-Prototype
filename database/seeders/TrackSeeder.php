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
            'disc_id' => 2,
        ]);
        DB::table('tracks')->insert([
            'name' => "Sober",
            'length' => "3:17",
            'disc_id' => 2,
        ]);
        DB::table('tracks')->insert([
            'name' => "Homemade Dynamite",
            'length' => "3:10",
            'disc_id' => 2,
        ]);
        DB::table('tracks')->insert([
            'name' => "Liability",
            'length' => "2:52",
            'disc_id' => 2,
        ]);
        DB::table('tracks')->insert([
            'name' => "Hard Feelings",
            'length' => "6:07",
            'disc_id' => 2,
        ]);
        DB::table('tracks')->insert([
            'name' => "Sober II (Melodrama)",
            'length' => "2:59",
            'disc_id' => 2,
        ]);
        DB::table('tracks')->insert([
            'name' => "Writer in the Dark",
            'length' => "3:37",
            'disc_id' => 2,
        ]);
        DB::table('tracks')->insert([
            'name' => "Supercut",
            'length' => "4:38",
            'disc_id' => 2,
        ]);
        DB::table('tracks')->insert([
            'name' => "Liability (Reprise)",
            'length' => "2:16",
            'disc_id' => 2,
        ]);
        DB::table('tracks')->insert([
            'name' => "Perfect places",
            'length' => "3:42",
            'disc_id' => 2,
        ]);
    }
}