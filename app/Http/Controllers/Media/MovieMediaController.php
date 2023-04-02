<?php

namespace App\Http\Controllers\Media;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MovieMediaController extends Controller
{
    function index()
    {
        return view('media.movies');
    }
}
