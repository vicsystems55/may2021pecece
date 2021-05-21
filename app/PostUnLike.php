<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostUnLike extends Model
{

    //
    protected $guarded = [];
    
    public function post_unlikes()
    {
        # code...

        return $this->hasMany('App\PostUnLike', 'post_id', 'id');
    }
}
