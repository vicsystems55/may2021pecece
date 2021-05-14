<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

class AuthorDashboardController extends Controller
{
    //

    
    public function home() 
    {
        # code...

        return view('dashboard.author.home');
    }

    public function all_posts() 
    {
        # code...

        return view('dashboard.author.all_posts');
    }

    public function create_post() 
    {
        # code...

        // $post_code = rand(2320, 99900);

        $post_code = Carbon::now()->timestamp;

        // dd($post_code);

        return view('dashboard.author.create_post',[
            'post_code' => $post_code
        ]);
    }

    public function edit_post() 
    {
        # code...

        // $post_code = rand(2320, 99900);

        $post_code = Carbon::now()->timestamp;

        // dd($post_code);

        return view('dashboard.author.edit_post',[
            'post_code' => $post_code
        ]);
    }

    public function trashed_posts() 
    {
        # code...

        return view('dashboard.author.trashed_post');
    }

    public function draft_posts() 
    {
        # code...

        return view('dashboard.author.draft_post');
    }

    public function authors_feed() 
    {
        # code...

        return view('dashboard.author.authors_feed');
    }

    public function categories_feed() 
    {
        # code...

        return view('dashboard.author.categories_feed');
    }

    public function my_interest() 
    {
        # code...

        return view('dashboard.author.my_interest');
    }

    public function saved_posts() 
    {
        # code...

        return view('dashboard.author.saved_post');
    }

    public function notifications() 
    {
        # code...

        return view('dashboard.author.notifications');
    }

    public function my_profile() 
    {
        # code...

        return view('dashboard.author.my_profile');
    }

    public function settings() 
    {
        # code...

        return view('dashboard.author.settings');
    }

}
