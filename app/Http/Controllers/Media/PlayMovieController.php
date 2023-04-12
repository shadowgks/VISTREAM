<?php

namespace App\Http\Controllers\Media;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Media;
use App\Models\Season;

class PlayMovieController extends Controller
{
    function show($slug)
    {
        //Media play
        $media_play = Media
            ::where('slug', $slug)
            ->where('status', 1)
            ->where('type_id', 1)
            ->first();

        $url_media = $media_play->link_media;

        //You may also like by country
        $this_media_like = Media
            ::where('country_id', $media_play->country_id)
            ->where('id', '!=', $media_play->id)
            ->get();

        return view('media.play-movie', compact('media_play', 'url_media', 'this_media_like'));
    }
}
