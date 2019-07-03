<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        App\User::create([
            'name' => 'admin',
            'password' => bcrypt('admin'),
            'email' => 'ayangefelix8@gmail.com',
            'admin' => 1,
            'avatar' => asset('avatars/avatar.png')

        ]);


        App\User::create([
            'name' => 'priscilla',
            'password' => bcrypt('admin'),
            'email' => 'priscilla@gmail.com',
            'admin' => 0,
            'avatar' => asset('avatars/avatar.png')

        ]);

        
        App\User::create([
            'name' => 'daniel',
            'password' => bcrypt('admin'),
            'email' => 'danielpave@gmail.com',
            'admin' => 0,
            'avatar' => asset('avatars/avatar.png')

        ]);
    }
}
