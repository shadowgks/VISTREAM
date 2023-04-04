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
            ::with(['countries' => function($query) use ($name){
                $query->where('name', $name);
            }])
            ->where('status', 1)
            ->paginate('18');

        return view('media.country', compact('country_this', 'name'));
    }
}
