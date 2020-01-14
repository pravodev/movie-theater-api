<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Theater extends Model
{
    protected $fillable = [
        'name',
        'about',
        'address',
        'city',
        'province',
        'website'
    ];

    public function studios()
    {
        return $this->hasMany(TheaterStudio::class);
    }
}
