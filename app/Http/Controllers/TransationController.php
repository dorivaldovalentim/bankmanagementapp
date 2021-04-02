<?php

namespace App\Http\Controllers;

use App\Models\Transation;
use Illuminate\Http\Request;

class TransationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transations = auth()->user()->transations()->orderByDesc('created_at')->paginate(100);
        return view('transations.index', compact('transations'));
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
     * @param  \App\Models\Transation  $transation
     * @return \Illuminate\Http\Response
     */
    public function show(Transation $transation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transation  $transation
     * @return \Illuminate\Http\Response
     */
    public function edit(Transation $transation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transation  $transation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transation $transation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transation  $transation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transation $transation)
    {
        //
    }
}
