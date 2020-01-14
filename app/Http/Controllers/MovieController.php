<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Http\Resources\MovieCollection;
use App\Http\Resources\MovieResource;
use App\Http\Requests\MovieRequest;
use DB;

class MovieController extends ApiController
{
    protected $model = Movie::class;
    protected $resource = MovieResource::class;

    public function rules()
    {
        $validateCast = function($attribute, $value, $fail){
            if(is_string($value)){
                $fail(':attribute must be array');
            }
        };

        return [
            'title' => 'required',
            'rating' => 'nullable',
            'release_date' => 'required|date',
            'duration' => 'required|numeric',
            'director' => 'required|string',
            'casts' => ['required', $validateCast]
        ];
    }
}
