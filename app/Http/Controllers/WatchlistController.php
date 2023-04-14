<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WatchListController extends Controller
{
    function index()
    {
        return view('media.watchlist');
    }
}
