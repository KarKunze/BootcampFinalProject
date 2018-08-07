<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('posts')->insert([
        'title' => 'test',
        'subtitle' => 'just a test',
        'body' => 'Let me not to the marriage of true minds Admit impediments. Love is not love Which alters when it alteration finds, Or bends with the remover to remove. ',
        'status' => 1,
        'creator_id' => 1,
        'category_id' => 2,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()
      ]);
    }
}
