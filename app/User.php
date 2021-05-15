<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'email', 'password', 'provider', 'provider_id', 'status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function posts()
    {
        # code...

        return $this->hasMany('App\Post', 'user_id', 'id');
    }

    public function user_likes()
    {
        # code...

        return $this->hasMany('App\PostLike', 'user_id', 'id');
    }

    public function user_unlikes()
    {
        # code...

        return $this->hasMany('App\PostUnLike', 'user_id', 'id');
    }

    public function user_category_subscriptions()
    {
        # code...

        return $this->hasMany('App\CategorySubscription', 'user_id', 'id');
    }

    public function comments()
    {
        # code...

        return $this->hasMany('App\Comment', 'user_id', 'id');
    }

    public function users_comments_unlikes()
    {
        # code...

        return $this->hasMany('App\CommentUnLike', 'user_id', 'id');
    }

    public function users_comments_likes()
    {
        # code...

        return $this->hasMany('App\CommentLike', 'user_id', 'id');
    }

    public function notifications()
    {
        # code...

        return $this->hasMany('App\Notification', 'user_id', 'id');
    }



    public function followers()
    {
        # code...

        return $this->hasMany('App\Follower', 'user_id', 'id');
    }

    public function authors()
    {
        # code...

        return $this->hasMany('App\Follower', 'author_id', 'id');
    }
}
