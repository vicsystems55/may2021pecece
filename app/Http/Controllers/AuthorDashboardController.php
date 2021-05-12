<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        return view('dashboard.author.create_post');
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
