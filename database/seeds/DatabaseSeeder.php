<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $faker = Faker::create();
        foreach (range(1,2) as $index) {
            DB::table('mit_users')->insert([
                'username' => $faker->userName,
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'email' => $faker->email,
                'password' => bcrypt('secret'),
            ]);
        }

    }
}
