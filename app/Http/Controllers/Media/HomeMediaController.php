<?php

namespace App\Http\Controllers\Media;

use App\Http\Controllers\Controller;
use App\Models\Media;
use Illuminate\Http\Request;

class HomeMediaController extends Controller
{
    function index()
    {
        //Recommended
        $recommended = Media
            ::where('status', 1)
            ->orderBy('click', 'DESC')
            ->limit(12)
            ->get();

        //Latest
        $latest = Media
            ::where('status', 1)
            ->limit(12)
            ->latest()
            ->get();

        return view('index', compact('recommended', 'latest'));
    }

    function search(Request $request)
    {
        //Ajax
        if ($request->ajax()) {
            $results = Media
                ::where('name', 'like', '%' . $request->name . '%')
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
                                        <img src="' . asset($item->picture) . '" class="h-14 w-14 mx-auto object-cover" alt="Carlos Garcia">
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
        return view('media.search', compact('results','name'));
    }

    function filter(Request $request)
    {
        return view('media.filter');
    }
}
