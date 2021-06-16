<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class SearchController extends Controller
{
    //

    public function query_posts(Request $request)
    {
        # code...

        $searchTerm = $request->key;

        $all_posts = Post::with('post_authors')->with('post_categories')

        ->where('post_title', 'LIKE', "%{$searchTerm}%")
        ->orWhere('post_description','LIKE', "%{$searchTerm}%")
        ->orWhere('post_body', 'LIKE', "%{$searchTerm}%")
        
        ->where('status', 'live')
        ->latest()
        ->get();

        // dd($all_posts);

        return view('front_page.pages.search_results',[
            'all_posts' => $all_posts,
            'searchTerm' => $searchTerm
        ]);
    }
}
