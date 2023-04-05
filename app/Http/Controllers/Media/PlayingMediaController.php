<?php

namespace App\Http\Controllers\Media;

use App\Http\Controllers\Controller;
use App\Models\Media;
use Illuminate\Http\Request;

class PlayingMediaController extends Controller
{
    function show($slug)
    {
        //Media play
        $media_play = Media
            ::where('slug', $slug)
            ->where('status', 1)
            ->first();

        //You may also like by country
        $this_media_like = Media
            ::where('country_id', $media_play->country_id)
            ->where('id', '!=' ,$media_play->id)
            ->get();

        return view('media.play', compact('media_play', 'this_media_like'));
    }
}
