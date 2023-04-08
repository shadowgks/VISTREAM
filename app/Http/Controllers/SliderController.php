<?php

namespace App\Http\Controllers;

use App\Http\Requests\SliderRequest;
use App\Models\Media;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider = Slider::with('media')->get();
        $media = Media::where('status',1)->get();

        return view('dashboard.slider', compact('slider','media'));
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
    public function store(SliderRequest $request)
    {
        $slider = $request->all();
        //----------B Upload pictures--------------
        $picture = $request->picture;
        $fileName = time() . $picture->getClientOriginalName();
        $path = $picture->storeAs('images', $fileName, 'public');
        $slider["picture"] = 'storage/' . $path;
        //----------E Upload pictures--------------
        $create = Slider::create($slider);
        if($create){
            Session::flash('success', 'Created Successfully');
        }else{
            Session::flash('failed', 'Created Failed!');
        }
        return redirect('dashboard/slider');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(SliderRequest $request, Slider $slider)
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

        $update = $slider->update($inputs);
        if($update){
            Session::flash('success', 'Updated Successfully');
        }else{
            Session::flash('failed', 'Updated Failed!');
        }
        return redirect('dashboard/slider');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        $delete = $slider->delete();
        if($delete){
            Session::flash('success', 'Created Successfully');
        }else{
            Session::flash('failed', 'Created Failed!');
        }
        return redirect('dashboard/slider');
    }
}
