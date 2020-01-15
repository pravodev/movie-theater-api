<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Show;
use App\Http\Resources\ShowResource;

class ShowTimeController extends ApiController
{
    protected $model = Show::class;
    protected $resource = ShowResource::class;
}
