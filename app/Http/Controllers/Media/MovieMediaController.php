<?php

namespace App\Http\Controllers\Media;

use App\Http\Controllers\Controller;
use App\Models\Media;
use Illuminate\Http\Request;

class MovieMediaController extends Controller
{
    function index()
    {
        //Recommended
        $movies = Media
            ::with('sliders')
            ->with('types')
            ->with('qualitie')
            ->with('countries')
            ->with('genres')
            ->with('actors')
            ->where('status', 1)
            ->paginate('1');

        return view('media.movies', compact('movies'));
    }
}
