<?php

namespace App\Http\Controllers;

use App\Http\Requests\MediaRequest;
use App\Models\Actor;
use App\Models\Country;
use App\Models\Genre;
use App\Models\Media;
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
        $media = Media::all();
        $country = Country::all();
        $quality = TypeQuality::all();
        $type = Type::all();
        $genre = Genre::all();
        $actor = Actor::all();
        return view('dashboard.media', compact('media', 'country', 'quality', 'type', 'genre','actor'));
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
    public function update(Request $request, Media $media)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function destroy(Media $media)
    {
        //
    }
}
