<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class StatisticController extends Controller
{
    function index()
    {
        $user = User::all();
        // dd($user);
        return view('dashboard.statistics',compact('user'));
        // return view('dashboard.statistics');
    }
}
