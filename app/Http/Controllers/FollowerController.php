<?php

namespace App\Http\Controllers;

use App\Follower;
use App\Notification;

use Illuminate\Http\Request;

class FollowerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getFollowers(Request $request)
    {

        
        //
        try {
            
            $followers = Follower::where('author_id', $request->author_id)->get()->count();

            $is_followed = Follower::where('author_id', $request->author_id)->where('follower_id', $request->follower_id)->first();
    
            if ($is_followed) {
                # code...
                $follower_status = true;
    
            }else{
    
                $follower_status = false;
    
            }
    
            $data = [
                'followers' => $followers,
                'follower_status' => $follower_status
            ];
    
    
            return $data;
        } catch (\Throwable $th) {
            //throw $th;
            return $th;
        }
    }

    public function followAuthor(Request $request)
    {
        //
        try {
            
            
        $follow = Follower::updateOrCreate([
            'follower_id' => $request->follower_id,
            'author_id' => $request->author_id
        ],[
            'follower_id' => $request->follower_id,
            'author_id' => $request->author_id
        ]);

        return $follow;
        } catch (\Throwable $th) {
            //throw $th;
            return $th;
        }
    }

    public function unfollowAuthor(Request $request)
    {
        //
        $unfollow = Follower::where('follower_id', $request->follower_id)->where('author_id', $request->author_id)->delete();

        return $unfollow;
    }


}
