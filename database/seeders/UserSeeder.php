<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i =0; $i < 20; $i++){

            DB::table('items')->insert([
                'name'=> Str::random(10),
                'desc'=> Str::random(30),
                'price'=> 1,
                'total'=> 2,
            ]);
            
        }
    }
}
