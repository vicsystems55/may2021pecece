<?php

namespace App\Http\Controllers;

use App\Post;
use App\PostLike;
use App\PostUnLike;
use App\Notification;
use App\UserWallet;
use App\User;
use FeedReader;
use Auth;
use Illuminate\Support\Facades\Http;


use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function upload_post_image(Request $request)
    {
        //

        $image = $request->file('image');

        $post_code = $request->post_code;

        $newname = rand(233,9000).'.'.$image->getClientOriginalExtension();

        $image->move(public_path('post_images'), $newname);

        $post = Post::where('post_code', $post_code)->update([
            'featured_image' => config('app.url').'post_images/'.$newname
        ]);

        return $newname;

        
    }

    public function get_wp_posts()
    {
        $response = Http::get('https://repo.pecece.com/wp-json/wp/v2/posts?per_page=100');



        $posts = $response->json();



        for ($i=0; $i < count($posts) ; $i++) { 
            # code...
            if ($posts[$i]['categories'] == 33) {
                # code...
    
                $category_id = 5;
            }
    
            if ($posts[$i]['categories'] == 29) {
                # code...
    
                $category_id = 1;
            }
    
            if ($posts[$i]['categories'] == 30) {
                # code...
    
                $category_id = 2;
            }
    
            if ($posts[$i]['categories'] == 31) {
                # code...
    
                $category_id = 3;
            }
    
            if ($posts[$i]['categories'] == 32) {
                # code...
    
                $category_id = 4;
            }
    
            if ($posts[$i]['categories'] == 34) {
                # code...
    
                $category_id = 6;
            }
    
            if ($posts[$i]['categories'] == 35) {
                # code...
    
                $category_id = 7;
            }


            Post::updateOrcreate([
                'post_title' => $posts[$i]['title']['rendered']
            ],[
            'user_id' => 1,
            'post_code' => rand(1000, 99000),
            'post_title' => $posts[$i]['title']['rendered'],
            'post_description' => $posts[$i]['yoast_head_json']['og_description'],
            'post_body' => $posts[$i]['content']['rendered'],
            'category_id' => 1,
            'featured_image' => ($posts[$i]['yoast_head_json']['og_image'][0]['url'])??config('app.url').'post_images/default.png',
            'status' => 'live',
            ]);
        }

  
        
        return count($posts);
    }

    public function update_post_image(Request $request)
    {
        //

        $image = $request->file('image');

        $post_code = $request->post_code;

        $newname = rand(233,9000).'.'.$image->getClientOriginalExtension();

        $image->move(public_path('post_images'), $newname);

        $post = Post::where('post_code', $post_code)->update([
            'featured_image' => $newname
        ]);

        return $newname;

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_post(Request $request)
    {
        //

        $user_id = Auth::user()->id;

        $post = Post::where('post_code', $request->post_code)->update([
            'user_id' => $user_id,
            'post_code' => $request->post_code,
            'post_title' => $request->post_title,
            'post_description' => $request->post_description,
            'post_tags' => $request->post_tags,
            'post_body' => $request->post_body,
            'category_id' => $request->category_id,
            'status' => $request->status,
        ]);

        $notify_author = Notification::create([
            'user_id' => $user_id,
            'color_code' => '#FF9909',
            'title' => 'New Post Created',
            'message' => 'You just created a new post with title: ' .$request->post_title,
        ]);

        UserWallet::Create([
            'user_id' => $user_id,
            'amount' => 0.5,
            'description' => 'New Post Creation',
            'credit' => '1',
        ]);

        $notify_author = Notification::create([
            'user_id' => $user_id,
            'color_code' => '#FF9909',
            'title' => 'Credit Received',
            'message' => 'Your just received 0.1 PC on a new post published',
        ]);


        return 123;

    }

    public function draft_post(Request $request)
    {
        //

        $user_id = Auth::user()->id;

        $post = Post::where('post_code', $request->post_code)->update([
            'user_id' => $user_id,
            'post_code' => $request->post_code,
            'post_title' => $request->post_title,
            'post_description' => $request->post_description,
            'post_tags' => $request->post_tags,
            'post_body' => $request->post_body,
            'category_id' => $request->category_id,
            'status' => $request->status,
        ]);

        

        


        return $post;

    }

    public function edit_post(Request $request )
    {
        //

        // return $request->all();

        

        $post = Post::where('post_code', $request->post_code)->update([
           
          
            'post_title' => $request->post_title,
            'post_description' => $request->post_description,
            'post_tags' => $request->post_tags,
            'post_body' => $request->post_body,
            'category_id' => $request->category_id,
            'status' => $request->status,
        ]);


        return $post;

    }

    public function trash_post(Request $request )
    {
        //

        // return $request->all();

        

        $post = Post::where('post_code', $request->post_code)->update([

            'status' => 'trash',
        ]);

        $notify_author = Notification::create([
            'user_id' => $user_id,
            'color_code' => '#FF9909',
            'title' => 'Post Edited',
            'message' => 'You just edited a with title: ' .$request->post_title,
        ]);

        $notify_author = Notification::create([
            'user_id' => $user_id,
            'color_code' => '#FF9909',
            'title' => 'New Post Created',
            'message' => 'You just trashed a  post with title: ' .$request->post_title,
        ]);


        return $post;

    }

    public function feeds()
    {
        
        $f = FeedReader::read('https://www.techmeme.com/feed.xml?x=1');

        // $data = array(
        //     'title'     => $f->get_title(),
        //     'permalink' => $f->get_permalink(),
        //     'items'     => $f->get_image_link(),
        //   );

        // return $data;

        foreach ($f->get_items() as $item)
            {
                echo $item->get_image();
                echo "<p>";
            }

        // echo $f->get_title();
        // echo $f->get_items()[0]->get_title();
        // echo $f->get_items()[0]->get_content();
        // echo $f->get_items()[0]->get_image_link();
     

    }
    public function get_views()
    {
        # code...

       $user_id = Auth::user()->id;

       $monthly_views = array();

       for ($i=4; $i < 12 ; $i++) { 

        $views = Post::where('user_id', $user_id)->whereMonth('updated_at', '=', $i)->sum('views');

        array_push($monthly_views, $views);

           # code...
       }


        return $monthly_views;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //

        return 123;
    }

    




    public function getLikes(Request $request)
    {
        # code...

        try {



            
            $post_likes = PostLike::where('post_id', $request->post_id )->get()->count();

            $user_liked = PostLike::where('user_id', $request->user_id)->where('post_id', $request->post_id)->first();

      

            if($user_liked){

                $liked_by_user = true;

            }else{

                $liked_by_user = false;

            }





            $results=[
                'liked_by_user' => $liked_by_user,
                'post_likes' => $post_likes
            ];

            return $results;

            
        } catch (\Throwable $th) {
            //throw $th;
            return $th;
        }

        
    }

    public function getUnlikes(Request $request)
    {
        # code...
        try {

            
            
            $post_unlikes = PostUnLike::where('post_id', $request->post_id )->get()->count();

            $user_unliked = PostUnLike::where('user_id', $request->user_id)->where('post_id', $request->post_id)->first();

            if($user_unliked){

                $unliked_by_user = true;

            }else{

                $unliked_by_user = false;

            }


            $results=[
                'unliked_by_user' => $unliked_by_user,
                'post_unlikes' => $post_unlikes
            ];

            return $results;
        } catch (\Throwable $th) {
            //throw $th;
            return $th;
        }

    }

    public function registerLike(Request $request)
    {
        # code...

        

        try {

            $post_data = Post::where('id', $request->post_id)->first();

            $authors_id = $post_data->user_id;

            $user_data = User::where('id', $request->user_id)->first();
            
            $post_liked = PostLike::updateOrCreate([
                'user_id' => $request->user_id
            ],[
                'user_id' => $request->user_id,
                'post_id' => $request->post_id
            ]);

           PostUnLike::where('post_id', $request->post_id)->where('user_id', $request->user_id)->delete();

           $notify_viewer = Notification::create([
            'user_id' => $request->user_id,
            'color_code' => '#FF9909',
            'title' => 'Post Liked',
            'message' => 'You just liked : ' .$post_data->post_title,
        ]);

        $notify_author = Notification::create([
            'user_id' => $authors_id,
            'color_code' => '#FF9909',
            'title' => 'Post Liked',
            'message' => 'Your post :' .$post_data->post_title  .' just got liked by ' .$user_data->username,
        ]);

        if ($request->user_id != $authors_id) {
            # code...
            UserWallet::Create([
                'user_id' => $authors_id,
                'amount' => 0.1,
                'description' => 'Like Received',
                'credit' => '1',
            ]);
    
            $notify_author = Notification::create([
                'user_id' => $authors_id,
                'color_code' => '#FF9909',
                'title' => 'Credit Received',
                'message' => 'Your just received 0.1 PC on a post like received',
            ]);
        }


    
            return $post_liked;

        } catch (\Throwable $th) {
            //throw $th;

            return $th;
        }

    }

    public function registerUnlike(Request $request)
    {

        # code...

        try {

            
            $post_data = Post::where('id', $request->post_id)->first();

            $authors_id = $post_data->user_id;

            $user_data = User::where('id', $request->user_id)->first();
            
            $post_unliked = PostUnlike::updateOrCreate([
                'user_id' => $request->user_id
            ],[
                'user_id' =>$request->user_id,
                'post_id' => $request->post_id
            ]);

            

           PostLike::where('post_id', $request->post_id)->where('user_id', $request->user_id)->delete();


           $notify_viewer = Notification::create([
            'user_id' => $request->user_id,
            'color_code' => '#FF9909',
            'title' => 'Post Uniked',
            'message' => 'You just unliked : ' .$post_data->post_title,
            ]);

            $notify_author = Notification::create([
                'user_id' => $authors_id,
                'color_code' => '#FF9909',
                'title' => 'Post Uniked',
                'message' => 'Your post :' .$post_data->post_title  .' just got unliked by ' .$user_data->username,
            ]);

            if ($request->user_id != $authors_id) {
                # code...
                UserWallet::Create([
                    'user_id' => $authors_id,
                    'amount' => 0.1,
                    'description' => 'Like Received',
                    'credit' => '1',
                ]);
        
                $notify_author = Notification::create([
                    'user_id' => $authors_id,
                    'color_code' => '#FF9909',
                    'title' => 'Credit Received',
                    'message' => 'Your just received 0.1 PC on a post like received',
                ]);
            }

    
            return $post_unliked;

        } catch (\Throwable $th) {
            //throw $th;

            return $th;
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function all_posts(Request $request)
    {
        //


        if ($request->post_id) {
            # code...

            try {
                //code...

                $post = Post::where('id', $request->post_id)->with('post_categories')->first();

                return $post;

            } catch (\Throwable $th) {
                //throw $th;

                return $th;
            }
            

        }
        else{
           try {
               //code...
               $posts = Post::with('post_authors')->with('post_categories')->latest()->get();

               return $posts;
           } catch (\Throwable $th) {
               //throw $th;

               return $th;
           }
        }
       
    }
}
