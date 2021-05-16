<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeaturedPost extends Model
{
    //

    public function posts()
    {
        # code...

        return $this->belongsTo('App\Post', 'post_id', 'id');
    }


}
