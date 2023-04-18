<?php

namespace App\Http\Controllers\Media;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Genre;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GenreMediaController extends Controller
{
    function show($name)
    {
        $genre_query = Media::with(['genres' => function ($query) use ($name) {
            $query->where('name', $name);
        }]);
        if (Auth::check()) {
            $genre_query = $genre_query->with(['users' => function ($query) {
                $query->where('users.id', Auth::user()->id);
            }]);
        }
        $genre_this = $genre_query->where('status', 1)
        ->paginate(18);

        return view('media.genre', compact('genre_this','name'));
    }
}
