<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $guarded = [];

    public function post_likes()
    {
        # code...

        return $this->hasMany('App\PostLike', 'post_id', 'id');
    }

    public function comments()
    {
        # code...

        return $this->hasMany('App\Comment', 'post_id', 'id');
    }

    public function featured_posts()
    {
        # code...

        return $this->hasMany('App\FeaturedPost', 'post_id', 'id');
    }

    public function post_categories()
    {
        # code...

        return $this->belongsTo('App\Category', 'category_id', 'id');
    }

    public function post_authors()
    {
        # code...

        return $this->belongsTo('App\User', 'user_id', 'id');
    }
    
}
