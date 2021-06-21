<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use App\Notification;

use App\UserWallet;
use Auth;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAllComments(Request $request)
    {
        //

        $allComments = Comment::with('users')->where('post_id', $request->post_id)->where('parent_id', 0)->latest()->get();

        return $allComments;
    }

    public function getSecondGenComments(Request $request)
    {
        //

        try {
            
            $comments = Comment::where('parent_id', $request->comment_id)->latest()->get();

            return $comments;
        } catch (\Throwable $th) {
            //throw $th;
            return $th;
        }
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function post_comment(Request $request)
    {
        //
            try {
                
                $user_id = Auth::user()->id;

                $post = Post::where('id', $request->post_id)->first();

                $comment = Comment::create([
                    'user_id' => $user_id,
                    'comment' => $request->message,
                    'parent_id' => 0,
                    'post_id'=> $request->post_id
                ]);

                $notifier = Notification::create([
                    'user_id' => $post->user_id,
                    'color_code' => '#FF9909',
                    'title' => 'New Comment',
                    'message' => 'You just recevied a comment on your post :' .$post->post_title,
                    ]);

                    $user_wallet = UserWallet::Create([
                        'user_id' => $post->user_id,
                        'amount' => 0.1,
                        'description' => 'New Comment',
                        'credit' => '1',
                    ]);
        
                    $notify_author = Notification::create([
                        'user_id' => $post->user_id,
                        'color_code' => '#FF9909',
                        'title' => 'Credit Received',
                        'message' => 'You just received 0.1 Pecece Credits on new comment received',
                    ]);

                return $comment;

            } catch (\Throwable $th) {
                //throw $th;

                return $th;
            }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
