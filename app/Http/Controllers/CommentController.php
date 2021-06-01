<?php

namespace App\Http\Controllers;

use App\Comment;
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

                $comment = Comment::create([
                    'user_id' => $user_id,
                    'comment' => $request->message,
                    'parent_id' => 0,
                    'post_id'=> $request->post_id
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
