<?php

namespace App\Http\Controllers;

use App\Models\Need;
use Illuminate\Http\Request;

class NeedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $needs = auth()->user()->needs()->get();
        return view('needs.index', compact('needs'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Need  $need
     * @return \Illuminate\Http\Response
     */
    public function show(Need $need)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Need  $need
     * @return \Illuminate\Http\Response
     */
    public function edit(Need $need)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Need  $need
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Need $need)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Need  $need
     * @return \Illuminate\Http\Response
     */
    public function destroy(Need $need)
    {
        //
    }
}
