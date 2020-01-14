<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;
use App\Http\Resources\GenreResource;

class GenreController extends Controller
{
    protected $model = Genre::class;
    protected $resource = GenreResource::class;
}
