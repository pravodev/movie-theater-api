<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TheaterStudio extends Model
{
    protected $fillable = [
        'name',
        'total_seat',
        'theater_id'
    ];

    public function theater()
    {
        return $this->belongsTo(Theater::class);
    }
}
