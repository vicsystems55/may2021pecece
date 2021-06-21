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

use App\UserWallet;

use Illuminate\Support\Facades\Hash;

use Auth;

class AuthorDashboardController extends Controller
{
    //

    
    public function home() 
    {
        # code...
        $user_id = Auth::user()->id;

        $my_posts = Post::where('user_id', $user_id)->where('status', '!=','session')->latest()->get();

        $notifications = Notification::where('user_id', $user_id)->where('status', 'unread')->latest()->get()->take(5);

        $credit = UserWallet::where('user_id', $user_id)->where('credit', '1')->sum('amount');
        $debit = UserWallet::where('user_id', $user_id)->where('debit', '0')->sum('amount');

        $balance = $credit - $debit;
        // dd($notifications);

        return view('dashboard.author.home',[
            'my_posts' => $my_posts,
            'notifications' => $notifications,
            'balance' => $balance
        ]);
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

        $all_posts = Post::with('post_categories')->where('user_id', $user_id)->where('status', 'trash')->get();

        $categories = Category::latest()->get();

        return view('dashboard.author.trashed_post',[
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
        $user_id = Auth::user()->id;

        $all_authors = Follower::where('follower_id', $user_id)->get()->pluck('author_id');

        $feeds = Post::with('post_authors')->with('post_categories')->where('status', 'live')->whereIn('user_id', $all_authors)->get();

        // dd($feeds);



        return view('dashboard.author.authors_feed',[
            'feeds' => $feeds
        ]);
    }

    public function categories_feed() 
    {
        # code...
        $user_id = Auth::user()->id;

        $all_categories = CategorySubscription::where('user_id', $user_id)->get()->pluck('category_id');

        $feeds = Post::with('post_authors')->with('post_categories')->where('status', 'live')->whereIn('category_id', $all_categories)->get();

        // dd($feeds);

        return view('dashboard.author.categories_feed',[
            'feeds' => $feeds
        ]);
    }

    public function my_interest() 
    {
        # code...

        $categories = Category::with('posts')->latest()->get();

        // dd($categories);

        return view('dashboard.author.my_interest',[
            'categories' => $categories
        ]);
    }

    public function saved_posts() 
    {
        # code...

        return view('dashboard.author.saved_post');
    }

    public function notifications() 
    {
        # code...

        $notifications = Notification::where('user_id', Auth::user()->id)->latest()->paginate(10);

        $notificationz = Notification::where('user_id', Auth::user()->id)->latest()->take(12)->update([
            'status' => 'read'
        ]);

        // dd($notificationz);

        return view('dashboard.author.notifications',[
            'notifications' => $notifications
        ]);
    }

    

    public function my_profile() 
    {
        # code...

        $user_data = User::with('followers')->with('posts')->with('user_category_subscriptions.categories')->find(Auth::user()->id);

        

        // dd($user_data->user_category_subscriptions[0]->categories);

        return view('dashboard.author.my_profile',[
            'user_data' => $user_data
        ]);
    }

    public function settings() 
    {
        # code...

        return view('dashboard.author.settings');
    }

    public function update_password(Request $request) 
    {
        # code...
        $request->validate([
            'new_password' =>  ['required', 'string', 'min:8', 'confirmed'],
            // 'amount' => 'required|numeric|min:99700|between:0,99.99',
            // 'number_of_accounts' => 'required|numeric|min:1|max:15',
            // 'file' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            
        ]);
        

        $user_id = Auth::user()->id;

        $hash = Hash::make($request->old_password);

        

        if (1==1) {
            # code...
            $user_data = User::where('id', $user_id)->update([
                'password' => Hash::make($request->new_password),
            ]);
            return back()->with('message', 'Password updated successfully');

        }else{
            return back()->with('message', 'This is not your old password');
        }


       

       
    }

    public function update_email(Request $request) 
    {
        # code...
        $user_id = Auth::user()->id;
        $request->validate([
            'email' =>  ['required', 'string', 'max:255', 'unique:users'],
            
            // 'amount' => 'required|numeric|min:99700|between:0,99.99',
            // 'number_of_accounts' => 'required|numeric|min:1|max:15',
            // 'file' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            
        ]);
        
        if (1==1) {
            # code...
            $user_data = User::where('id', $user_id)->update([
                'email' => $request->email,
            ]);
            return back()->with('message', 'Email updated successfully');

        }else{
            return back()->with('message', 'This is not your old email');
        }


        

    }

    public function update_username(Request $request) 
    {
        # code...

        $user_id = Auth::user()->id;
        $request->validate([
            'username' =>  ['required', 'string', 'max:255', 'unique:users'],
            // 'amount' => 'required|numeric|min:99700|between:0,99.99',
            // 'number_of_accounts' => 'required|numeric|min:1|max:15',
            // 'file' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            
        ]);

        

        $user_data = User::where('id', $user_id)->update([
            'username' => $request->username,
        ]);

        return back()->with('message', 'Username updated successfully');

        if ($request->email == Auth::user()->email) {
            # code...
            $user_data = User::where('id', $user_id)->update([
                'email' => $request->new_email,
            ]);

            return back()->with('message', 'Username updated successfully');

        }else{
            return back()->with('message', 'This is not your old email');
        }


        return back()->with('message', 'Email updated successfully');

    }

    



}
