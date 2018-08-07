<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        'name' => 'Karla',
        'email' => 'karlalkunze@gmail.com',
        'password' => bcrypt('mysupersecretadminpassword51'),
        'role_id' => 1,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()
      ]);

      DB::table('users')->insert([
        'name' => 'Jerry',
        'email' => 'moodyinthecity@gmail.com',
        'password' => bcrypt('jerry1227'),
        'role_id' => 1,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()
      ]);


      $names = ['John', 'Ringo', 'Paul', 'George'];

        foreach ($names as $name) {

          DB::table('users')->insert([
            'name' => $name,
            'email' => strtolower($name) . '@example.com',
            'password' => bcrypt(strtolower($name)),
            'role_id' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
          ]);

        }

        $categoryNames = ['Art', 'Music', 'Places', 'Eat & Drink', 'Local Business'];

          foreach ($categoryNames as $categoryName) {

            DB::table('categories')->insert([
              'name' => $categoryName,
              'created_at' => Carbon::now(),
              'updated_at' => Carbon::now()
            ]);

        }

        DB::table('posts')->insert([
          'title' => 'test 1',
          'body' => 'Let me not to the marriage of true minds Admit impediments. Love is not love Which alters when it alteration finds, Or bends with the remover to remove. ',
          'status' => 1,
          'creator_id' => '1',
          'category_id' => '1',
          'tag' => '8',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
        ]);

        DB::table('posts')->insert([
          'title' => 'test 2',
          'body' => 'Let me not to the marriage of true minds Admit impediments. Love is not love Which alters when it alteration finds, Or bends with the remover to remove. ',
          'status' => 1,
          'creator_id' => '2',
          'category_id' => '2',
          'tag' => '8',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
        ]);

        DB::table('posts')->insert([
          'title' => 'test 3',
          'body' => 'Let me not to the marriage of true minds Admit impediments. Love is not love Which alters when it alteration finds, Or bends with the remover to remove. ',
          'status' => 1,
          'creator_id' => '3',
          'category_id' => '3',
          'tag' => '8',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
        ]);

        DB::table('posts')->insert([
          'title' => 'test 4',
          'body' => 'Let me not to the marriage of true minds Admit impediments. Love is not love Which alters when it alteration finds, Or bends with the remover to remove. ',
          'status' => 1,
          'creator_id' => '4',
          'category_id' => '4',
          'tag' => '8',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
        ]);

        DB::table('posts')->insert([
          'title' => 'test 5',
          'body' => 'Let me not to the marriage of true minds Admit impediments. Love is not love Which alters when it alteration finds, Or bends with the remover to remove. ',
          'status' => 1,
          'creator_id' => '5',
          'category_id' => '5',
          'tag' => '8',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
        ]);

    }

  }
