<?php

namespace App\Http\Controllers;

use App\Http\Requests\SerieRequest;
use App\Models\Episode;
use App\Models\Media;
use App\Models\NumSeason;
use App\Models\Season;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SerieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $media_series = Media::orderBy('name', 'asc')
            ->where('status', 1)
            ->where('type_id', 2)
            ->get();
        $data_table = Season
        ::with('media')
        ->with('episodes')
        ->get();
        // dd($data_table);
        $num_season = NumSeason::orderBy('number', 'asc')->get();
        // dd($num_season);
        return view('dashboard/serie', compact('data_table', 'media_series', 'num_season'));
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
        //season
        $this_season = Season
            ::updateOrCreate($request->except(['_token', 'season_id', 'num_ep', 'url', 'save']));

        //episode
        //add multipple data
        $num_ep = $request->num_ep;
        $url = $request->url;
        foreach ($num_ep as $key => $no) {
            $input['num_ep'] = $num_ep[$key];
            $input['url'] = $url[$key];
            $input['season_id'] = $this_season->id;

            $episode = Episode
                ::where('num_ep', $input['num_ep'])
                ->where('season_id', $input['season_id'])
                ->first();

            if ($episode !== null) {
                $episode->url = $input['url'];
                $episode->save();
                Session::flash('success', 'Updated URL Successfully');
            } else {
                $episode = Episode::create($input);
                Session::flash('success', 'Created Successfully');
            }
        }

        return redirect()->back();
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

        $id_ep = $request->ep_id;
        $num_ep = $request->num_ep_update;
        $num_ep = $request->num_ep_update;
        $url = $request->url_update;

        foreach($num_ep AS $key => $item){

            $episode = Episode::find($id_ep[$key]);

            // dd($episode);

            $episode->update([
                'num_ep' => $num_ep[$key],
                'url' => $url[$key],
            ]);
        }
        
        return redirect()->back();
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
