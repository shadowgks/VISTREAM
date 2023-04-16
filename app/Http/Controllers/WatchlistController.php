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
        $watchlist = Media::with(['users' => function($query){
            $query->id = Auth::user()->id;
        }])->get();
        // dd($watchlist[0]->users);
        return view('media.watchlist', compact('watchlist'));
    }

    function store($slug)
    {
        $this_media = Media::where('slug', $slug)->first();
        $this_user = Auth::user();

        $this_user->media()
            ->syncWithoutDetaching($this_media);
    }
}
