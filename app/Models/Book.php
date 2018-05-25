<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title',
        'description',
        'publish_date',
        'author',
        'thumb',
        'number_of_pages',
        'rating',
        'status',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function reviews()
    {
        return $this->belongsToMany(User::class, 'reviews', 'book_id', 'user_id')->withPivot('content', 'score')->withTimestamps();
    }

    public function marks()
    {
        return $this->belongsToMany(User::class, 'marks', 'book_id', 'user_id')->withPivot('read_status', 'favorite')->withTimestamps();
    }

    public function owners()
    {
        return $this->belongsToMany(User::class, 'owners', 'book_id', 'user_id')->withTimestamps();
    }
}
