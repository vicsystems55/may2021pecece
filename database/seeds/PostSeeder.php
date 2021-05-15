<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insertOrIgnore([

            [
                "user_id" => 1,
                "post_code" => Carbon::now()->timestamp,
                "post_title" => 
                "post_description" => 
                "post_tags" => 
                "post_body" => 
                "category_id" => 
                "featured_image" => 
                "status" => 
            ],
            
            
        ]);
            
    }
}


