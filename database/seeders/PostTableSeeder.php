<?php

namespace Database\Seeders;
use App\Models\Post;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $faker  =   Factory::create();
        foreach (range(1,100) as $index){
            Post::create([
                "category_id"   =>      rand(1,5),
                "user_id"       =>      rand(1,20),
                "title"         =>      $faker->sentence,
                "content"       =>      $faker->paragraph,
                "thumbnail"     =>      $faker->imageUrl(),
                "status"        =>      $this->getRandomStatus(),
            ]);
        }
    }
    public function getRandomStatus(){
        $statuses   =   array('draft','published');
        return $statuses[array_rand($statuses)];
    }
}
