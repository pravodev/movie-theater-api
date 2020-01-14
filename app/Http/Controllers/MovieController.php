<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Http\Resources\MovieCollection;

class MovieController extends Controller
{
    public function index(Request $request)
    {
        return new MovieCollection(Movie::paginate());
    }
}
