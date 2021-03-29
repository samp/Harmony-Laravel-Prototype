<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            AlbumListingSeeder::class,
            AlbumSeeder::class,
            DiscSeeder::class,
            TrackSeeder::class,
            EventSeeder::class,
            ItemListingSeeder::class,
            ItemSeeder::class,
            CarouselSeeder::class,
        ]);
    }
}
