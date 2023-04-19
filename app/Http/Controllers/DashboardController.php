<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\Country;
use App\Models\Genre;
use App\Models\Media;
use App\Models\Slider;
use App\Models\Type;
use App\Models\TypeQuality;
use App\Models\User;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index()
    {
        $users = User::get();
        $users_count = $users->count();
        $sliders = Slider::count();
        $media = Media::count();
        $movies = Media::where('type_id', 1)->count();
        $series = Media::where('type_id', 2)->count();
        $actors = Actor::count();
        $countries = Country::count();
        $types = Type::count();
        $genres = Genre::count();
        $qualities = TypeQuality::count();

        return view('dashboard',compact('users','users_count','sliders','media','movies','series','actors','countries','types','genres','qualities'));
    }
}
