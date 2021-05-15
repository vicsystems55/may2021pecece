<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insertOrIgnore([

            [
                "name" => "Education",
                "cover_image" => "education.png",
            ],

            [
                "name" => "Relgion",
                "cover_image" => "religion.png",
            ],

            [
                "name" => "Sports",
                "cover_image" => "sport.png",
            ],

            [
                "name" => "Technology",
                "cover_image" => "technology.png",
            ],

            [
                "name" => "Politics",
                "cover_image" => "politics.png",
            ],

            [
                "name" => "Fashion",
                "cover_image" => "fashion.png",
            ],

            [
                "name" => "Food",
                "cover_image" => "food.png",
            ],

            [
                "name" => "Travel",
                "cover_image" => "travel.png",
            ],

            [
                "name" => "Finance",
                "cover_image" => "finance.png",
            ],

            [
                "name" => "Science",
                "cover_image" => "science.png",
            ],

            [
                "name" => "Uncategorized",
                "cover_image" => "uncategorized.png",
            ],
            
            
        ]);
            
    }
}
