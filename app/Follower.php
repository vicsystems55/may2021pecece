<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follower extends Model
{
    //
    protected $guarded = [];

    public function authors()
    {
        return $this->belongsTo('App\User', 'author_id', 'id');
    }
}
