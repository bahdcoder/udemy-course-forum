<?php

use Illuminate\Database\Seeder;

use App\Reply;

class RepliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $r1 = [
            'user_id' => 1,
            'discussion_id' => 1,
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto minus, laboriosam consequuntur ex aut dignissimos? Est qui nulla laboriosam deserunt ea non dicta sunt. Nemo ducimus nesciunt sint repellat officia.'
        ];

        $r2 = [
            'user_id' => 1,
            'discussion_id' => 2,
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto minus, laboriosam consequuntur ex aut dignissimos? Est qui nulla laboriosam deserunt ea non dicta sunt. Nemo ducimus nesciunt sint repellat officia.'
        ];

        $r3 = [
            'user_id' => 2,
            'discussion_id' => 3,
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto minus, laboriosam consequuntur ex aut dignissimos? Est qui nulla laboriosam deserunt ea non dicta sunt. Nemo ducimus nesciunt sint repellat officia.'
        ];
        $r4 = [
            'user_id' => 4,
            'discussion_id' => 4,
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto minus, laboriosam consequuntur ex aut dignissimos? Est qui nulla laboriosam deserunt ea non dicta sunt. Nemo ducimus nesciunt sint repellat officia.'
        ];

        Reply::create($r1);
        Reply::create($r2);
        Reply::create($r3);
        Reply::create($r4);
    }
}
