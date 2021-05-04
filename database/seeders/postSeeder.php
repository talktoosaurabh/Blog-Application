<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class postSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('posts')->insert([
            [ 'userId'=>1,
              'tittle'=>'Cool Image',
             'image'=>'https://img.freepik.com/free-photo/cool-geometric-triangular-figure-neon-laser-light-great-backgrounds-wallpapers_181624-9331.jpg?size=626&ext=jpg',
             'content'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry '],

            [ 'userId'=>1,
             'tittle'=>'Best Image',
             'image'=>'https://wallpaperaccess.com/full/167408.jpg',
             'content'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry '],

            [ 'userId'=>2,
             'tittle'=>'Lion King',
             'image'=>'https://wallpaperaccess.com/full/167408.jpg',
             'content'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry '],

            [ 'userId'=>2,
              'tittle'=>'Hacker Boy',
              'image'=>'https://wallpapercave.com/wp/wp2553589.jpg',
              'content'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry']
         ]);
    }
}
