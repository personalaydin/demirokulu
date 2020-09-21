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
        $this->call(PagesTableSeeder::class);
        $this->call(SentencesTableSeeder::class);
        $this->call(VideoCategoryTableSeeder::class);
        $this->call(BroadcastTableSeeder::class);
        $this->call(VideoTableSeeder::class);
    }
}
