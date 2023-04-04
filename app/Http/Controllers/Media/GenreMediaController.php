<?php

namespace App\Http\Controllers\Media;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Genre;
use App\Models\Media;
use Illuminate\Http\Request;

class GenreMediaController extends Controller
{
    function show($name)
    {
        $genre_this = Media::with(['genres' => function ($query) use ($name) {
            $query->where('name', $name);
        }])
        ->where('status', 1)
        ->paginate(18);

        dd($genre_this);

        return view('media.genre', compact('genre_this','name'));
    }
}
