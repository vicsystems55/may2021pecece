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

use App\FeaturedPost;

use Carbon\Carbon;

use Auth;


class FrontPageController extends Controller
{
    
    //
    public function index()
    {
        $all_posts = Post::with('post_authors')->with('post_categories')->where('status', 'live')->latest()->get();
        
        return view('front_page.pages.index',[
            'all_posts' => $all_posts
        ]);
    }

    public function home()
    {
        $featured_posts = FeaturedPost::with('posts.post_authors')->with('posts.post_categories')->latest()->get();

        $latest_posts = Post::with('post_authors')->with('post_categories')->where('status', 'live')->latest()->limit(6)->get();

        $top_categories = Category::with('posts')->get();

        // dd($top_categories);
        
        return view('front_page.pages.home',[
            'featured_posts' => $featured_posts,
            'top_categories' => $top_categories,
            'latest_posts' => $latest_posts
        ]);
    }

    public function about()
    {
        
        return view('front_page.pages.about');
    }

    public function public_profile($id)
    {
        $authors_data = User::where('id', $id)->first();

        $posts_by_author = Post::with('post_categories')->with('post_authors')->with('comments')->where('status', 'live')->where('user_id', $id)->latest()->paginate();


        $popular_posts = Post::with('post_categories')->with('post_authors')->with('comments')->where('views', '>', '12')->get();

        $featured_posts = FeaturedPost::with('posts.post_authors')->with('posts.post_categories')->latest()->get();

        $categories = Category::with('posts')->latest()->get();

        return view('front_page.pages.public_profile',[
            'popular_posts' => $popular_posts,
            'featured_posts' => $featured_posts,
            'categories' => $categories,
            'authors_data' => $authors_data,
            'posts_by_author' => $posts_by_author

        ]);
    }

    public function contact()
    {
        
        return view('front_page.pages.contact');
    }

    public function blog()
    {

        $all_posts = Post::with('post_authors')->with('post_categories')->where('status', 'live')->latest()->get();
        
        return view('front_page.pages.blog',[
            'all_posts' => $all_posts
        ]);
    }

    public function search_results()
    {
        
        return view('front_page.pages.search_results');
    }

    public function single_post($post_code)
    {

        $update_views = Post::where('post_code', $post_code)->where('status', 'live')->increment('views', 1);

        // dd($update_views);

        $post_data = Post::with('post_categories')->with('post_authors')->with('comments')->where('post_code', $post_code)->first();

        $popular_posts = Post::with('post_categories')->with('post_authors')->with('comments')->where('views', '>', '12')->get();

        $featured_posts = FeaturedPost::with('posts.post_authors')->with('posts.post_categories')->latest()->get();

        //previous post

        // $previous_post = Post::with('post_categories')
        //     ->with('post_authors')
        //     ->with('comments')
        //     ->where('updated_at', $post_data->)
        //     ->first();


        // //next post

        // $next_post = Post::with('post_categories')
        // ->with('post_authors')
        // ->with('comments')
        // ->where('updated_at', $post_data->)
        // ->first();




        $post_comments = Comment::where('post_id', $post_data->id)->latest()->get();

        $categories = Category::with('posts')->latest()->get();

        // dd($featured_posts);
        
        return view('front_page.pages.single_post',[
            'post_data' => $post_data,
            'post_comments' => $post_comments,
            'categories' => $categories,
            'popular_posts' => $popular_posts,
            'featured_posts' => $featured_posts
        ]);
    }

    public function category($category_name)
    {
        $category = Category::where('name', $category_name)->first();

        if (!$category) {
            # code...
            $category_name = 'Not Found';
        }else{

            $category_name = $category->name;
        }

      
                # code...
                $category_posts = Post::with('post_categories')->with('post_authors')->where('category_id', $category->id??3000)->where('status', 'live')->latest()->get();


        
        return view('front_page.pages.single_category',[
            'category_posts' =>  $category_posts,
            'category_name' => $category_name,
            'category' => $category


        ]);
    }
}
