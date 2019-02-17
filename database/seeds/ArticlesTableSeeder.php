<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // let's truncate our existing records from scratch.
        //Article::truncate();

        factory(App\Article::class, 10)->create();
    }
}
