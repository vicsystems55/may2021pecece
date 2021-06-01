<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $guarded = [];

    public function posts()
    {
        # code...

        return $this->belongsTo('App\Post');
    }

    public function users()
    {
        # code...

        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
