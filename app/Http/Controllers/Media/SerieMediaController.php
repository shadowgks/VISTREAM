<?php

namespace App\Http\Controllers\Media;

use App\Http\Controllers\Controller;
use App\Models\Media;
use Illuminate\Http\Request;

class SerieMediaController extends Controller
{
    function index()
    {
        //Recommended
        $series = Media
            ::with('sliders')
            ->with('types')
            ->with('qualitie')
            ->with('countries')
            ->with('genres')
            ->with('actors')
            ->where('status', 1)
            ->where('type_id', 2)
            ->paginate('18');

        return view('media.tv-series', compact('series'));
    }
}
