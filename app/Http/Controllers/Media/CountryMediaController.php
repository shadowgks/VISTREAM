<?php

namespace App\Http\Controllers\Media;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Media;
use Illuminate\Http\Request;

class CountryMediaController extends Controller
{
    function show($name)
    {
        $country_this = Media
            ::with('countries')
            ->where('status', 1)
            ->paginate('18');

        dd($country_this);
        return view('media.genre', compact('genre_this', 'name'));
    }
}
