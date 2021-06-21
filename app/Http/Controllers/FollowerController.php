<?php

namespace App\Http\Controllers;

use App\Follower;
use App\User;
use App\UserWallet;
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

        $author_data = User::where('id', $request->author_id)->first();

        $user_data = User::where('id', $request->follower_id)->first();

        $user_wallet = UserWallet::Create([
            'user_id' => $request->author_id,
            'amount' => 0.1,
            'description' => 'New Follower',
            'credit' => '1',
        ]);

        $notify_author = Notification::create([
            'user_id' => $request->author_id,
            'color_code' => '#FF9909',
            'title' => 'Credit Received',
            'message' => 'You just received 0.1 Pecece Credits on a new follower detected',
        ]);

        $notify_follower = Notification::create([
            'user_id' => $request->follower_id,
            'color_code' => '#FF9909',
            'title' => 'New Following',
            'message' => 'You started following, ' .$author_data->name,
        ]);

        $notify_f = Notification::create([
            'user_id' => $request->author_id,
            'color_code' => '#FF9909',
            'title' => 'New Follower',
            'message' => $user_data->name .' started following you'
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
