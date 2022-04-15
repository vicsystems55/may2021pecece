<?php

namespace App\Http\Controllers;

use App\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categories()
    {

        $categories = Category::with(['posts' => function ($query) {
            $query->latest()->limit(5);
        }])->get();
        
    
        return $categories;
    }
}
