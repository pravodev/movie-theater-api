<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShowTime extends Model
{
    public function theater()
    {
        return $this->belongsTo(Theater::class, 'theater_id');
    }

    public function studio()
    {
        return $this->belongsTo(TheaterStudio::class,'studio_id');
    }
}
