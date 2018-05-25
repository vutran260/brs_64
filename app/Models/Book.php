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
        return $this->hasMany(Review::class);
    }

    public function marks()
    {
        return $this->hasMany(Mark::class);
    }

    public function owners()
    {
        return $this->belongsToMany(User::class, 'owners', 'book_id', 'user_id');
    }
}
