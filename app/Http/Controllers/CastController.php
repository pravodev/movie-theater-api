<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cast;
use App\Http\Resources\CastResource;

class CastController extends ApiController
{
    protected $model = Cast::class;
    protected $resource = CastResource::class;

    public function rules()
    {
        return [
            'name' => 'required|unique:casts',
        ];
    }
}
