<?php

namespace App\Http\Controllers\Media;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SerieMediaController extends Controller
{
    function index()
    {
        return view('media.tv-series');
    }
}
