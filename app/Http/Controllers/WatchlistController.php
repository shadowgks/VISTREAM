<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WatchListController extends Controller
{
    function index()
    {
        // Get a user's watch list
        $user = Auth::user();
        $watchlist = $user->media->get();
        dd($watchlist);
        return view('media.watchlist');
    }

    function store($slug)
    {
        $this_media = Media::where('slug', $slug)->first();
        $this_user = Auth::user();

        $this_user->media()
            ->syncWithoutDetaching($this_media);
    }
}
