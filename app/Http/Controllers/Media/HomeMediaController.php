<?php

namespace App\Http\Controllers\Media;

use App\Http\Controllers\Controller;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeMediaController extends Controller
{
    function index()
    {
        //Recommended
        $recommended_query = Media
            ::where('status', 1)
            ->orderBy('click', 'DESC');
        if (Auth::check()) {
            $recommended_query = $recommended_query->with(['users' => function ($query) {
                $query->where('users.id', Auth::user()->id);
            }]);
        }
        $recommended = $recommended_query->limit(12)->get();

        //Latest
        $latest_query = Media
            ::where('status', 1)
            ->limit(12);
        if (Auth::check()) {
            $latest_query = $latest_query->with(['users' => function ($query) {
                $query->where('users.id', Auth::user()->id);
            }]);
        }
        $latest = $latest_query->latest()->get();

        //slider
        $sliders = Media
            ::with('sliders')
            ->where('status', 1)
            ->get();

        return view('index', compact('recommended', 'latest', 'sliders'));
    }

    function search(Request $request)
    {
        //Ajax
        if ($request->ajax()) {
            $results = Media
                ::where('name', 'like', '%' . $request->name . '%')
                ->where('status', 1)
                ->limit(5)
                ->get();

            $output = '';
            if ($request->name == '') {
                return $output = '';
            } else {
                if (count($results) > 0) {
                    $output .= '
                    <li class="absolute top-11" style="list-style-type: none; left: -50px;">
                        <div class="block w-72 mr-12 absolute rounded top-full z-50 py-0.5 bg-color-primary-75 border border-gray-700 shadow-md">
                            <div class="show">';
                    foreach ($results as $item) {
                        $output .= '
                        <a href="' . ($item->type_id == 1 ? route('play-movie.show', $item->slug) : route('play-serie.show', [$item->slug, 1, 1])) . '" class="bg-red-300">
                            <div class="flex flex-wrap flex-row items-center border-b border-gray-700 !bg-red-900 bg-opacity-40 py-2">
                                <div class="flex-shrink max-w-full px-2 w-1/4 text-center">
                                    <div class="relative">
                                        <img src="' . asset($item->picture) . '" class="h-12 w-12 mx-auto object-cover" alt="Carlos Garcia">
                                    </div>
                                </div>
                                <div class="flex-shrink max-w-full px-2 w-3/4">
                                    <div class="text-sm text-gray-400 font-bold">' . $item->name . '</div>
                                    <div class="text-gray-500 text-xs mt-1">' . date('Y', strtotime($item->released_year)) . ' . ' . $item->duration . ' min</div>
                                    <div class="text-gray-500 text-sm mt-1 font-bold">' . ($item->type_id == 1 ? "Movie" : "Serie") . '</div>
                                </div>
                            </div>
                        </a>';
                    };
                    if (count($results) >= 5) {
                        $output .= '
                        </div>
                            <div class="p-3 text-gray-400 text-center font-normal">
                                <a href="' . route("search.media") . '" class="hover:underline">Show All Media</a>
                            </div>
                        </div>';
                    }

                    $output .= '</li>';
                }
                return $output;
            }
        }

        //View blade
        $name = $request->name; //null
        // dd($name);
        $results = Media
            ::where('name', 'like', '%' . $request->name . '%')
            ->paginate('18');
        return view('media.search', compact('results', 'name'));
    }

    function filter(Request $request)
    {
        // dd($request->all());
        $genres = $request->genres;
        $countries = $request->countries;
        $query = Media::query();
        // dd($genres);
        if ($genres != null) {
            $query->with(['genres' => function ($query) use ($genres) {
                return $query->whereIn('genres.id', $genres);
            }]);
        }
        if ($countries != null) {
            $query->with(['countries' => function ($query) use ($countries) {
                return $query->whereIn('id', $countries);
            }]);
        }
        if ($request->type != "all") {
            $query->where('type_id', $request->type);
        }
        if ($request->quality != "all") {
            $query->where('quality_id', $request->quality);
        }
        switch ($request->year) {
            case 'all':
                break;
            case 'older-2019':
                $query->whereYear('released_year', '<', '2019');
                break;
            default:
                $query->whereYear('released_year', $request->year);
                break;
        }
        $results = $query->get();
        return view('media.filter', compact('results'));
    }
}
