<?php

namespace App\Http\Controllers\Media;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeMediaController extends Controller
{
    function index()
    {
        return view('index');
    }
}
