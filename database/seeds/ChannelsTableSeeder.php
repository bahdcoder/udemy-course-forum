<?php

use App\Channel;
use Illuminate\Database\Seeder;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $channel1 = ['title' => 'Laravel'];
        $channel2 = ['title' => 'Vuejs'];
        $channel3 = ['title' => 'CSS3'];
        $channel4 = ['title' => 'Javascript'];
        $channel5 = ['title' => 'PHP Testing'];
        $channel6 = ['title' => 'Spark'];
        $channel7 = ['title' => 'Lumen'];
        $channel8 = ['title' => 'Forge'];

        Channel::create($channel1);
        Channel::create($channel2);
        Channel::create($channel3);
        Channel::create($channel4);
        Channel::create($channel5);
        Channel::create($channel6);
        Channel::create($channel7);
        Channel::create($channel8);

    }
}
