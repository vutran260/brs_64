<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'content',
        'score',
        'user_id',
        'book_id',
    ];

    public function comments()
    {
        return $this->belongsToMany(User::class, 'comments', 'review_id', 'user_id')->withPivot('content')->withTimestamps();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function activities()
    {
        return $this->morphMany(Activity::class, 'activitable');
    }
}
