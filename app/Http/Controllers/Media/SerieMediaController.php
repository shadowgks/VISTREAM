<?php

namespace App\Http\Controllers\Media;

use App\Http\Controllers\Controller;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SerieMediaController extends Controller
{
    function index()
    {
        //Series
        $series_query = Media
            ::with('sliders')
            ->with('types')
            ->with('qualitie')
            ->with('countries')
            ->with('genres')
            ->with('actors');
            if (Auth::check()) {
                $series_query = $series_query->with(['users' => function ($query) {
                    $query->where('users.id', Auth::user()->id);
                }]);
            }
            $series = $series_query->where('status', 1)
            ->where('type_id', 2)
            ->paginate('18');

        return view('media.tv-series', compact('series'));
    }
}
