<?php

namespace App\Http\Controllers\Media;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Media;
use App\Models\Season;

class PlaySerieController extends Controller
{
    function show($slug, $season, $episodes)
    {
        //Media play
        $media_play = Media
            ::where('slug', $slug)
            ->where('status', 1)
            ->where('type_id', 2)
            ->first();


        //Get url this ep
        // $get_url_ep = Season
        // ::with(['media' => function($query) use ($slug){
        //     $query->where('id', $slug);
        // }])
        // ->with(['episodes' => function($query) use ($episodes){
        //     $query->where('num_ep', $episodes);
        // }])
        // ->where('num_season', $season)
        // ->first();

        $get_url_ep = Season
            ::where('media_id', $media_play->id)
            ->where('num_season', $season)
            ->with([
                'media',
                'episodes' => function ($query) use ($episodes) {
                    $query->where('num_ep', $episodes)->orderBy('num_ep', 'ASC');
                }
            ])
            ->first();

        //url
        $url_media = $get_url_ep->episodes[0]->url;

        //You may also like by country
        $this_media_like = Media
            ::where('country_id', $media_play->country_id)
            ->where('id', '!=', $media_play->id)
            ->get();

        //Seasons And Episodes
        $season_episode = Season
            ::where('media_id', $media_play->id)
            ->orderBy('num_season', 'ASC')
            ->with(['episodes' => function ($query) {
                $query->orderBy('num_ep', 'ASC');
            }])
            ->first();
        // dd($season_episode);
        return view('media.play-serie', compact('media_play', 'url_media', 'this_media_like', 'season_episode'));
    }
}
