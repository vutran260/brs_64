<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = [
        'content',
        'activitable_id',
        'activitable_type',
    ];

    public function activitable()
    {
        return $this->morphTo();
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
