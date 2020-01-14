<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use Carbon\Carbon;

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

    public static function createData($attributes)
    {
        DB::beginTransaction();
        try {
            $model = new static;
            $attributes['release_date'] = Carbon::parse($attributes['release_date']);
            $model->fill($attributes);
            $model->save();

            foreach($attributes['casts'] as $cast){
                $modelCast = Cast::firstOrCreate([
                    'name' => $cast
                ]);
                $model->casts()->attach($modelCast);
            }
            DB::commit();
            return $model;
        } catch (\Throwable $th) {
            DB::rollback();
            throw $th;
        }
    }
}
