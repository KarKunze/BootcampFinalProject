<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
       $names = ['John', 'Ringo', 'Paul', 'George'];

         foreach ($names as $name) {

           DB::table('users')->insert([
             'name' => $name,
             'email' => strtolower($name) . '@example.com',
             'password' => bcrypt(strtolower($name)),
             'role_id' => 1,
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now()
           ]);

         }
}
