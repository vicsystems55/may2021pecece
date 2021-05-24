<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategorySubscription extends Model
{
    //
    protected $guarded = [];

    public function categories()
    {

        # code...

        return $this->hasMany('App\Category', 'category_id', 'id');
    }
}
