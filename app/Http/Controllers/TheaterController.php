<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Theater;
use App\Http\Resources\TheaterResource;

class TheaterController extends ApiController
{
    protected $model = Theater::class;
    protected $resources = TheaterResource::class;
}
