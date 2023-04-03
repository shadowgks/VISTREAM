<?php

namespace App\Http\Controllers\Media;

use App\Http\Controllers\Controller;
use App\Models\Media;
use Illuminate\Http\Request;

class HomeMediaController extends Controller
{
    function index()
    {
        //Recommended
        $recommended = Media
            ::with('sliders')
            ->with('types')
            ->with('qualitie')
            ->with('countries')
            ->with('genres')
            ->with('actors')
            ->where('status', 1)
            ->orderBy('click', 'DESC')
            ->limit(12)
            ->get();

        //Latest
        $latest =  Media
            ::with('types')
            ->with('qualitie')
            ->with('countries')
            ->with('genres')
            ->with('actors')
            ->where('status', 1)
            ->limit(12)
            ->latest()
            ->get();

        return view('index', compact('recommended','latest'));
    }
}
