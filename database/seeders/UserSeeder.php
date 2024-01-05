<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for($i =0; $i < 20; $i++){

            DB::table('items')->insert([
                'name'=> $faker->name,
                'desc'=> $faker->jobTitle,
                'price'=> $faker->numberBetween(25,40),
                'total'=> $faker->numberBetween(2,8),
            ]);
            
        }
    }
}
