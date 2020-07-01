<?php

use App\User;
use Illuminate\Database\Seeder;

class FriendSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = User::findOrFail(1);
        $user2 = User::findOrFail(2);
        $user3 = User::findOrFail(3);
        $user4 = User::findOrFail(4);
        $user5 = User::findOrFail(5);
        $user6 = User::findOrFail(6);
        $user7 = User::findOrFail(7);
        $user8 = User::findOrFail(8);


        $user1->friends()->attach($user2);
        $user2->friends()->attach($user1);

        $user1->friends()->attach($user3);
        $user3->friends()->attach($user1);

        $user1->friends()->attach($user4);
        $user4->friends()->attach($user1);
        
        $user1->friends()->attach($user5);
        $user5->friends()->attach($user1);

        /********************************/

        $user2->friends()->attach($user6);
        $user6->friends()->attach($user2);

        $user2->friends()->attach($user7);
        $user7->friends()->attach($user2);

        $user2->friends()->attach($user8);
        $user8->friends()->attach($user2);

        /********************************/

        $user4->friends()->attach($user2);
        $user2->friends()->attach($user4);

    }
}
