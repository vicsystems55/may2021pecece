<?php

namespace App\Http\Controllers;

use App\CategorySubscription;
use App\Category;
use App\Notification;
use Illuminate\Http\Request;

class CategorySubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getSubscriptionStatus(Request $request)
    {
        //

        try {
            //code...
            $subscription = CategorySubscription::where('user_id', $request->user_id)->where('category_id', $request->category_id)->first();

            if ($subscription == null) {
                # code...
                $subscription_status = false;

            }else{
                $subscription_status = true;

            }
    
            return $subscription_status;

        } catch (\Throwable $th) {
            //throw $th;

            return $th;
        }
    }

    public function subscribeCategory(Request $request)
    {
        //
        try {

            $category_data = Category::where('id', $request->category_id)->first();
            
            $subscribe = CategorySubscription::updateOrCreate([
                'user_id' => $request->user_id,
                'category_id' => $request->category_id
            ],[
                'user_id' => $request->user_id,
                'category_id' => $request->category_id
            ]);
    
            if ($subscribe) {
                # code...
                $subscribed = true;

                $notifier = Notification::create([
                    'user_id' => $request->user_id,
                    'color_code' => '#FF9909',
                    'title' => 'Category Subscription',
                    'message' => 'You just subscribed to '.$category_data->name,
                    ]);
    
            }else{
    
                $subscribed = false;
    
            }
    
            return $subscribed;
            
        } catch (\Throwable $th) {
            //throw $th;

            return $th;

        }
    }

    public function unsubscribeCategory(Request $request)
    {
        //
        try {
            
            $subscription = CategorySubscription::where('user_id', $request->user_id)->where('category_id', $request->category_id)->delete();
            
            $category_data = Category::where('id', $request->category_id)->first();

            if ($subscription) {
                # code...
                $unsubscribed = true;

                $notifier = Notification::create([
                    'user_id' => $request->user_id,
                    'color_code' => '#FF9909',
                    'title' => 'Category Subscription Cancelled',
                    'message' => 'You just unsubscribed from '.$category_data->name,
                    ]);
    
            }else{
    
                $unsubscribed = false;
    
            }
    
            return $unsubscribed;
            
        } catch (\Throwable $th) {
            //throw $th;

            return $th;

        }
    }




}
