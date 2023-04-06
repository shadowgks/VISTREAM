<?php

namespace App\Http\Controllers;

use App\Http\Requests\TypeQualityRequest;
use App\Models\TypeQuality;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
        $create = TypeQuality::create($request->all());
        if($create){
            Session::flash('success', 'Created Successfully');
        }else{
            Session::flash('failed', 'Created Failed!');
        }
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
        $update = $quality->update($request->all());
        if($update){
            Session::flash('success', 'Created Successfully');
        }else{
            Session::flash('failed', 'Created Failed!');
        }
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
        $delete = $quality->delete();
        if($delete){
            Session::flash('success', 'Created Successfully');
        }else{
            Session::flash('failed', 'Created Failed!');
        }
        return redirect('dashboard/quality');
    }
}
