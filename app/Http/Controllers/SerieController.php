<?php

namespace App\Http\Controllers;

use App\Http\Requests\SerieRequest;
use App\Models\Episode;
use App\Models\Media;
use App\Models\NumSeason;
use App\Models\Season;
use Illuminate\Http\Request;

class SerieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $media = Media::orderBy('name', 'asc')->where('status', 1)->get();
        $num_season = NumSeason::orderBy('number', 'asc')->get();
        // dd($num_season);
        return view('dashboard/serie', compact('media', 'num_season'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SerieRequest $request)
    {
        $num_ep = $request->num_ep;
        $url = $request->url;

        //season
        $this_season = Season::create($request->all());

        //episode
        foreach ($num_ep as $key => $no) {
            $input['num_ep'] = $num_ep[$key];
            $input['url'] = $url[$key];
            $input['season_id'] = $this_season->id;

            Episode::create($input);
        }
        dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
