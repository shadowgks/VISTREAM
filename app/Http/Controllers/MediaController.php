<?php

namespace App\Http\Controllers;

use App\Http\Requests\MediaRequest;
use App\Models\Media;
use App\Models\Country;
use App\Models\Genre;
use App\Models\Actor;
use App\Models\Type;
use App\Models\TypeQuality;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //join
        $media = Media::with('actors')
        ->with('genres')
        ->with('countries')
        ->with('qualitie')
        ->with('types')
        ->get();

        $country = Country::orderBy('name', 'ASC')->get();
        $quality = TypeQuality::orderBy('name', 'ASC')->get();
        $type = Type::orderBy('name', 'ASC')->get();
        $genre = Genre::orderBy('name', 'ASC')->get();
        $actor = Actor::orderBy('fullname', 'ASC')->get();

        return view('dashboard.media', compact('media', 'country', 'quality', 'type', 'genre', 'actor'));
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
    public function store(MediaRequest $request)
    {
        $media = $request->all();

        //B Random data
        $chars = array_merge(range('0', '9'), range('a', 'z'), range('A', 'Z'), array('!', '@', '#', '$', '%', '^', '&', '*', '(', ')'));
        $random_string = '';
        for ($i = 0; $i < 10; $i++) {
            $random_index = random_int(0, count($chars) - 1);
            $random_string .= $chars[$random_index];
        }
        //E Random data
        $url_media = $request->name . ' ' . $random_string;
        $media['slug'] = str_replace(' ', '-', $url_media);
        //----------B Upload pictures--------------
        $picture = $request->picture;
        $fileName = time() . $picture->getClientOriginalName();
        $path = $picture->storeAs('images', $fileName, 'public');
        $media["picture"] = 'storage/' . $path;
        //----------E Upload pictures--------------

        $this_media = Media::create($media);
        $this_media->actors()
            ->syncWithoutDetaching($request->actors);
        $this_media->genres()
            ->syncWithoutDetaching($request->genres);

        return redirect('dashboard/media');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function show(Media $media)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function edit(Media $media)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function update(MediaRequest $request, $media)
    {
        $inputs = $request->all();

        $picture = $request->picture;
        //----------B Upload pictures--------------
        if ($picture) {
            $fileName = time() . $picture->getClientOriginalName();
            $path = $picture->storeAs('images', $fileName, 'public');
            $inputs["picture"] = 'storage/' . $path;
        } else {
            unset($inputs["picture"]);
        }
        //----------E Upload pictures--------------
        // dd($inputs);
        $this_media = Media::find($media);
        // $id = $this_media->id;
        $this_media->update($inputs);
        $this_media->actors()
            ->sync($request->actors);
        $this_media->genres()
            ->sync($request->genres);

        return redirect('dashboard/media');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function destroy($media)
    {
        $this_media = Media::find($media);
        $this_media->delete();
        return redirect('dashboard/media');
    }
}
