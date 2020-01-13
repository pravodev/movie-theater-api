<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'title',
        'rating',
        'release_date',
        'duration',
        'director',
        'synopsis'
    ];

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'movie_genres');
    }

    public function casts()
    {
        return $this->belongsToMany(Cast::class, 'movie_casts');
    }
}
