<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\PostUnLike;

use App\PostLike;

use App\Post;

use App\Notification;

use App\Follower;

use App\CommentUnLike;

use App\CommentLike;

use App\Comment;

use App\CategorySubscription;

use App\Category;

use Carbon\Carbon;

use Auth;

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
        $user_id = Auth::user()->id;

        $all_posts = Post::whereIn('status', ['live', 'draft', 'trashed'])->where('user_id', $user_id)->latest()->get();

        return view('dashboard.author.all_posts',[
            'all_posts' => $all_posts
        ]);
    }

    public function create_post() 
    {
        # code...

        // $post_code = rand(2320, 99900);

        $categories = Category::latest()->get();

        $post_code = Carbon::now()->timestamp;

        $user_id = Auth::user()->id;

        $post_session = Post::create([
            "user_id" => $user_id,
            "post_code" => $post_code,
            "post_title" => 'session',
            "post_description" => 'session',
            "post_tags" => 'session',
            "post_body" => 'session',
            "category_id" => 1,
            "featured_image" => 'default.png',
            "status" => 'session',
        ]);

        // dd($post_code);

        return view('dashboard.author.create_post',[
            'post_code' => $post_session->post_code,
            'categories' => $categories
        ]);
    }

    public function edit_post($post_code) 
    {
        # code...

        // $post_code = rand(2320, 99900);

        // $post_code = Carbon::now()->timestamp;

        $post_data = Post::with('post_categories')->where('post_code', $post_code)->first();

        $categories = Category::latest()->get();

        return view('dashboard.author.edit_post',[
            'post_data' => $post_data,
            'categories' => $categories
        ]);
    }

    public function trashed_posts() 
    {
        # code...

        // $post_code = rand(2320, 99900);

        // $post_code = Carbon::now()->timestamp;

        $user_id = Auth::user()->id;

        $all_posts = Post::with('post_categories')->where('user_id', $user_id)->where('status', 'trashed')->get();

        $categories = Category::latest()->get();

        return view('dashboard.author.draft_post',[
            'all_posts' => $all_posts,
            'categories' => $categories
        ]);
    }

    public function draft_posts() 
    {
        # code...

        // $post_code = rand(2320, 99900);

        // $post_code = Carbon::now()->timestamp;

        $user_id = Auth::user()->id;

        $all_posts = Post::with('post_categories')->where('user_id', $user_id)->where('status', 'draft')->get();

        $categories = Category::latest()->get();

        return view('dashboard.author.draft_post',[
            'all_posts' => $all_posts,
            'categories' => $categories
        ]);
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
