<?php

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
        factory(App\Artist::class, 5)->create()->each(function ($artist) {
            $artist->allmusics()->saveMany(factory(App\Track::class, 10)->make());
        });
    }
}
