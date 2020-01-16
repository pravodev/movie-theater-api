<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Show extends Model
{
    public function movie()
    {
        return $this->belongsTo(Movie::class ,'movie_id');
    }

    public function theaterStudios()
    {
        return $this->hasMany(ShowTime::class);
    }
    
    public function getData()
    {
        $request = request();
        $model = new Show;
        if($date = $request->query('date')){
            if($date == 'now'){
                $date = now();
            }else{
                $date = Carbon::parse($date);
            }
            
            $model = $model->whereDate('date', $date);
        }
        return $model;
    }
}
