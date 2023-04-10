<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatisticController extends Controller
{
    function index()
    {
        return view('dashboard.statistics');
    }
}
