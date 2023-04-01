<?php

namespace App\Http\Controllers;

use App\Http\Requests\TypeQualityRequest;
use App\Models\TypeQuality;
use Illuminate\Http\Request;

class TypeQualityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quality = TypeQuality::all();
        return view('dashboard.quality',compact('quality'));
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
    public function store(TypeQualityRequest $request)
    {
        TypeQuality::create($request->all());
        return redirect('dashboard/quality');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TypeQuality  $typeQuality
     * @return \Illuminate\Http\Response
     */
    public function show(TypeQuality $typeQuality)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TypeQuality  $typeQuality
     * @return \Illuminate\Http\Response
     */
    public function edit(TypeQuality $typeQuality)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TypeQuality  $typeQuality
     * @return \Illuminate\Http\Response
     */
    public function update(TypeQualityRequest $request, TypeQuality $quality)
    {
        $quality->update($request->all());
        return redirect('dashboard/quality');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TypeQuality  $typeQuality
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypeQuality $quality)
    {
        $quality->delete();
        return redirect('dashboard/quality');
    }
}
