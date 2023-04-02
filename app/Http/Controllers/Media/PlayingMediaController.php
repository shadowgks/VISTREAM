<?php

namespace App\Http\Controllers\Media;

use App\Http\Controllers\Controller;
use App\Models\Media;
use Illuminate\Http\Request;

class PlayingMediaController extends Controller
{
    function show($slug)
    {
        $media_play = Media::with('sliders')
        ->with('types')
        ->with('qualitie')
        ->with('countries')
        ->with('genres')
        ->with('actors')
        ->where('slug', $slug)
        ->where('status', 1)
        ->first();

        return view('media.play', compact('media_play'));
    }
}
