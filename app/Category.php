<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $guarded = [];

    public function posts()
    {

        # code...

        return $this->hasMany('App\Post', 'category_id', 'id');
    }


}
