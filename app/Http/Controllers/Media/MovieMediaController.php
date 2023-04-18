<?php

namespace App\Http\Controllers\Media;

use App\Http\Controllers\Controller;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MovieMediaController extends Controller
{
    function index()
    {
        //Movies
        $movies_query = Media
            ::with('sliders')
            ->with('types')
            ->with('qualitie')
            ->with('countries')
            ->with('genres')
            ->with('actors');
            if (Auth::check()) {
                $movies_query = $movies_query->with(['users' => function ($query) {
                    $query->where('users.id', Auth::user()->id);
                }]);
            }
            $movies = $movies_query->where('status', 1)
            ->where('type_id', 1)
            ->paginate('18');

        return view('media.movies', compact('movies'));
    }
}
