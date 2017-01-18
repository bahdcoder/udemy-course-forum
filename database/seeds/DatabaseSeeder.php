<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserstableSeeder::class);
        $this->call(ChannelsTableSeeder::class);
        $this->call(DiscussionsTableSeeder::class);
        $this->call(RepliesTableSeeder::class);
    }
}
