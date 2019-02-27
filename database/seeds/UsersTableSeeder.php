<?php

use Illuminate\Database\Seeder;

use App\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\User::create([

            [
                'name' => 'tay',
                'email' => 'tay@gmail.com',
                'password' => bcrypt('password')
            ],

            [
                'name' => 'ty',
                'email' => 'ty@gmail.com',
                'password' => bcrypt('password')
            ]

        ]);



    }
}
