<?php

namespace App\Http\Controllers\Media;

use App\Http\Controllers\Controller;
use App\Models\Actor;
use Illuminate\Http\Request;

class ActorMediaController extends Controller
{
    function index()
    {
        $actors = Actor::paginate(12);
        return view('media.actors', compact('actors'));
    }
}
