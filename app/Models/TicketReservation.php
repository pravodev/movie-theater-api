<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class TicketReservation extends Model
{
    protected $fillable = [
        'code_ticket',
        'theater_id',
        'show_id',
        'studio_id',
        'total_price',
        'persons'
    ];

    public function theater()
    {
        return $this->belongsTo(Theater::class);
    }

    public function show()
    {
        return $this->belongsTo(Show::class);
    }

    public function studio()
    {
        return $this->belongsTo(TheaterStudio::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function($model){
            $showTime = ShowTime::find($model->show_id);
            $model->total_price = $model->persons * $showTime->total_price;
            $model->code_ticket = Str::random();
        });
    }
}
