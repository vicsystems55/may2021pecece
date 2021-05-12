<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    //
    public function index()
    {
        
        return view('front_page.pages.index');
    }

    public function home()
    {
        
        return view('front_page.pages.home');
    }

    public function about()
    {
        
        return view('front_page.pages.about');
    }

    public function contact()
    {
        
        return view('front_page.pages.contact');
    }

    public function blog()
    {
        
        return view('front_page.pages.blog');
    }

    public function search_results()
    {
        
        return view('front_page.pages.search_results');
    }

    public function single_post()
    {
        
        return view('front_page.pages.single_post');
    }
}
