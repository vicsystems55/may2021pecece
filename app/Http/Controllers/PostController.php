<?php

namespace App\Http\Controllers;

use App\Post;
use App\PostLike;
use App\PostUnLike;
use FeedReader;
use Auth;
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
            'featured_image' => $newname
        ]);

        return $newname;

        
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


        return $post;

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
            
            $post_liked = PostLike::updateOrCreate([
                'user_id' => $request->user_id
            ],[
                'user_id' => $request->user_id,
                'post_id' => $request->post_id
            ]);

           PostUnLike::where('post_id', $request->post_id)->where('user_id', $request->user_id)->delete();
    
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
            
            $post_unliked = PostUnlike::updateOrCreate([
                'user_id' => $request->user_id
            ],[
                'user_id' =>$request->user_id,
                'post_id' => $request->post_id
            ]);

            

           PostLike::where('post_id', $request->post_id)->where('user_id', $request->user_id)->delete();


    
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
    public function destroy(Post $post)
    {
        //
    }
}
