<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];


    public function reviews()
    {
        return $this->belongsToMany(Book::class, 'reviews', 'user_id', 'book_id')->withPivot('content', 'score')->withTimestamps();
    }

    public function marks()
    {
        return $this->belongsToMany(Book::class, 'marks', 'user_id', 'book_id')->withPivot('read_status', 'favorite')->withTimestamps();
    }

    public function books()
    {
        return $this->belongsToMany(Book::class, 'owners', 'user_id', 'book_id');
    }

    public function comments()
    {
        return $this->belongsToMany(Review::class, 'comments', 'user_id', 'review_id')->withPivot('content')->withTimestamps();
    }

    public function likes()
    {
        return $this->belongsToMany(Activity::class, 'likes', 'user_id', 'activity_id')->withTimestamps();
    }

    public function followings()
    {
        return $this->belongsToMany(User::class, 'follows', 'follower_id', 'followed_id')->withTimestamps();
    }

    public function followers()
    {
        return $this->belongsToMany(User::class, 'follows', 'followed_id', 'follower_id')->withTimestamps();
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
