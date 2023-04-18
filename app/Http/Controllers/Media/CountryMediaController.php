<?php

namespace App\Http\Controllers\Media;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CountryMediaController extends Controller
{
    function show($name)
    {
        $country_query = Media
            ::with(['countries' => function ($query) use ($name) {
                $query->where('name', $name);
            }]);
        if (Auth::check()) {
            $country_query = $country_query->with(['users' => function ($query) {
                $query->where('users.id', Auth::user()->id);
            }]);
        }
        $country_this = $country_query->where('status', 1)
            ->paginate('18');

        return view('media.country', compact('country_this', 'name'));
    }
}
