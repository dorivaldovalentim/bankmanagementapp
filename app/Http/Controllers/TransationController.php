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
    public function create($id)
    {
        $card = auth()->user()->cards()->findOrFail($id);
        return view('transations.create', compact('card'));
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
    public function show($id)
    {
        $transations = auth()->user()->transations()->whereCardId($id)->orderByDesc('created_at')->paginate(100);
        return view('transations.show', compact('transations'));
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
