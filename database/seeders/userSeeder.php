<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [ 'name'=>'Admin',
             'email'=>'admin@gmail.com',
             'contact'=>'9002221144',
             'password'=>Hash::make('admin')],

            ['name'=>'Saurabh Singh',
            'email'=>'talktoosaurabh@gmail.com',
            'contact'=>'902472660',
            'password'=>Hash::make('saurabh4828')]
         ]);
    }
}
