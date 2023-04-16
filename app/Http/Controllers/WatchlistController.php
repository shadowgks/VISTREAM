<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WatchListController extends Controller
{
    function index()
    {
        // Get a user's watch lists
        $watchlist = User::where('id', Auth::user()->id)
        ->with('media')->first();
        return view('media.watchlist', compact('watchlist'));
    }

    function store($slug)
    {
        $this_media = Media::where('slug', $slug)->first();
        $this_user = Auth::user();

        $this_user->media()
            ->syncWithoutDetaching($this_media);
    }

    function count()
    {
        $watchlist = User::where('id', Auth::user()->id)
        ->with('media')->first();
        $count = $watchlist->media->count();
        return response()->json(['count'=>$count]);
    }
}
