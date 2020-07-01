<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            [
                    'id' => 1,
                    'name' => 'user',
                    'email' => 'user1@gmail.com',
                    'email_verified_at' => now(),
                    'password' => bcrypt('user1'),
                    "id_role" => "1"
            ],

            [   
        
                    'id' => 2,
                    'name' => 'user',
                    'email' => 'user2@gmail.com',
                    'email_verified_at' => now(),
                    'password' => bcrypt('user2'),
                    "id_role" => "2"
            ],

            [   
        
                    'id' => 3,
                    'name' => 'user',
                    'email' => 'user3@gmail.com',
                    'email_verified_at' => now(),
                    'password' => bcrypt('user3'),
                    "id_role" => "3"
            ],

            [   
        
                    'id' => 4,
                    'name' => 'user',
                    'email' => 'user4@gmail.com',
                    'email_verified_at' => now(),
                    'password' => bcrypt('user4'),
                    "id_role" => "4"
            ],

            [   
        
                    'id' => 5,
                    'name' => 'user',
                    'email' => 'user5@gmail.com',
                    'email_verified_at' => now(),
                    'password' => bcrypt('user5'),
                    "id_role" => "5"
            ],

            [   
        
                    'id' => 6,
                    'name' => 'user',
                    'email' => 'user6@gmail.com',
                    'email_verified_at' => now(),
                    'password' => bcrypt('user6'),
                    "id_role" => "6"
            ],

            [   
        
                    'id' => 7,
                    'name' => 'user',
                    'email' => 'user7@gmail.com',
                    'email_verified_at' => now(),
                    'password' => bcrypt('user7'),
                    "id_role" => "7"
            ],

            [   
        
                    'id' => 8,
                    'name' => 'user',
                    'email' => 'user8@gmail.com',
                    'email_verified_at' => now(),
                    'password' => bcrypt('user8'),
                    "id_role" => "8"
            ],


        ];

                DB::table('users')->insert(
                $array
            );
    }
}
