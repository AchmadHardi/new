<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($i=0;$i<10;$i++){
            DB::table('article')->insert([
                'id' => $faker->unique()->randomNumber(),
                'title' => $faker->title,
                'content' => $faker->content,
                'user_id' => $faker->unique()->randomNumber(),
                'created_at' => date("Y-m-d H:i:s")
            ]);
        }
    }
}
