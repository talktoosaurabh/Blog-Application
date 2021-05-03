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
              'tittle'=>'Dummy Text 1 UserID 1',
             'image'=>'https://www.infofast.com.br/wp-content/uploads/2020/04/Lorem-Ipsum.png',
             'content'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry '],

            [ 'userId'=>1,
             'tittle'=>'Dummy Text 2 UserID 1',
             'image'=>'https://www.infofast.com.br/wp-content/uploads/2020/04/Lorem-Ipsum.png',
             'content'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry '],

            [ 'userId'=>2,
             'tittle'=>'Dummy Text 1 UserID 2',
             'image'=>'https://www.infofast.com.br/wp-content/uploads/2020/04/Lorem-Ipsum.png',
             'content'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry '],

            [ 'userId'=>2,
              'tittle'=>'Dummy Text 2 UserID 2',
              'image'=>'https://www.infofast.com.br/wp-content/uploads/2020/04/Lorem-Ipsum.png',
              'content'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry']
         ]);
    }
}
