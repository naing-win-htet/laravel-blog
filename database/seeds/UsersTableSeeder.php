<?php

use Illuminate\Database\Seeder;

use Faker\Factory;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $faker = Factory::create();

      for($i=0; $i<5; $i++) {
        DB::table('users')->insert([
          [
            'name' => $faker->name,
            'email' => $faker->email,
            'password' => bcrypt('yourPassword'),
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
          ],
        ]);
      }

    }
}
