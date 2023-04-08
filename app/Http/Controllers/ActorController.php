<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActorRequest;
use App\Models\Actor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class ActorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actor = Actor::All();
        return view('dashboard.actor',compact('actor'));
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
    public function store(ActorRequest $request)
    {
        $actor = $request->all();
        // dd($actor);
        //----------B Upload pictures--------------
        $picture = $request->picture;
        if($picture == null){
            $actor["picture"] = 'build/assets/images/default/actor.jpg';
        }else{
            $fileName = time() . $picture->getClientOriginalName();
            $path = $picture->storeAs('images', $fileName, 'public');
            $actor["picture"] = 'storage/' . $path;
        }
        //----------E Upload pictures--------------
        $create = Actor::create($actor);

        if($create){
            Session::flash('success', 'Created Successfully');
        }else{
            Session::flash('failed', 'Created Failed!');
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function show(Actor $actor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function edit(Actor $actor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function update(ActorRequest $request, Actor $actor)
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
        $update = $actor->update($inputs);
        if($update){
            Session::flash('success', 'Updated Successfully');
        }else{
            Session::flash('failed', 'Updated Failed!');
        }
        return redirect('dashboard/actor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Actor $actor)
    {
        $delete = $actor->delete();
        if($delete){
            Session::flash('success', 'Deleted Successfully');
        }else{
            Session::flash('failed', 'Deleted Failed!');
        }
        return redirect('dashboard/actor');
    }
}
