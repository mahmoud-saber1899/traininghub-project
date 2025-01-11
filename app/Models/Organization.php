<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }
    public function getAverageRatingAttribute(): float
    {
        return $this->ratings()->avg('rating') ?? 0; // Calculate the average rating
    }
    protected $appends = ['average_rating'];
}
