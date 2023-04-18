<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WatchListController extends Controller
{
    function index()
    {
        // Get a user's watch lists
        $watchlist = User::where('id', Auth::user()->id)
            ->with('media')->first();
        return view('media.watchlist', compact('watchlist'));
    }

    function toggle($slug)
    {
        $this_media = Media::where('slug', $slug)->first();
        $this_user = Auth::user();

        $watchItem = DB::table('watchlists')
            ->where('user_id', $this_user->id)
            ->where('media_id', $this_media->id)
            ->first();
        // dd(!$watchItem);
        if ($watchItem == null) {
            $this_user->media()
                ->syncWithoutDetaching($this_media);
            return 'Stored';
        } else {
            DB::table('watchlists')
                ->where('id', $watchItem->id)
                ->delete();
            return 'Deleted';
        }
    }

    function count()
    {
        $watchlist = User::where('id', Auth::user()->id)
            ->with('media')->first();
        $count = $watchlist->media->count();
        return response()->json(['count' => $count]);
    }
}
