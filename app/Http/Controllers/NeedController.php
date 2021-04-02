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
        return view('needs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (auth()->user()->needs()->create($request->all())) {
            return redirect()->back()->with([
                'title'       => 'Sucesso',
                'description' => 'Necessidade cadastrada com sucesso',
                'type'        => 'success'
            ]);
        }

        return redirect()->back()->with([
            'title'       => 'Erro',
            'description' => 'Necessidade não cadastrada',
            'type'        => 'danger'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Need  $need
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $need = Need::findOrFail($id);
        return view('needs.show', compact('need'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Need  $need
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $need = Need::findOrFail($id);
        return view('needs.edit', compact('need'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Need  $need
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (auth()->user()->needs()->findOrFail($id)->status) {
            $need = array([
                'need' => $request->need,
                'amount' => $request->amount,
                'description' => $request->description,
            ]);
        } else {
            $need = $request->all();
        }
        

        if (auth()->user()->needs()->findOrFail($id)->fill($need)->save()) {
            return redirect()->back()->with([
                'title'       => 'Sucesso',
                'description' => 'Necessidade actualizada com sucesso',
                'type'        => 'success'
            ]);
        }

        return redirect()->back()->with([
            'title'       => 'Erro',
            'description' => 'Necessidade não actualizada',
            'type'        => 'danger'
        ]);
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
