<?php

namespace App\Http\Controllers;

use App\Models\Debit;
use Illuminate\Http\Request;

class DebitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $debits = auth()->user()->debits()->orderBy('name')->paginate(10);
        $debits_to_give = auth()->user()->debits()->where('amount', '<', '0')->sum('amount');
        $debits_to_receive = auth()->user()->debits()->where('amount', '>', '0')->sum('amount');

        $data = array(
            'debits_to_give' => $debits_to_give,
            'debits_to_receive' => $debits_to_receive,
            'debits_to_desfruit' => $debits_to_receive + $debits_to_give
        );

        return view('debits.index', compact('debits', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('debits.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (auth()->user()->debits()->create($request->all())) {
            return redirect()->back()->with([
                'title'       => 'Sucesso',
                'description' => 'Pessoa cadastrada com sucesso',
                'type'        => 'success'
            ]);
        }

        return redirect()->back()->with([
            'title'       => 'Erro',
            'description' => 'Pessoa não cadastrada',
            'type'        => 'danger'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Debit  $debit
     * @return \Illuminate\Http\Response
     */
    public function show(Debit $debit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Debit  $debit
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $debit = Debit::findOrFail($id);
        return view('debits.edit', compact('debit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Debit  $debit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $debit = (new Debit())->findOrFail($id);
        $debit->name = $request->name;

        if ($debit->update()) {
            return redirect()->back()->with([
                'title'       => 'Sucesso',
                'description' => 'Dívida actualizada com sucesso',
                'type'        => 'success'
            ]);
        }

        return redirect()->back()->with([
            'title'       => 'Erro',
            'description' => 'Dívida não actualizada',
            'type'        => 'danger'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Debit  $debit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Debit $debit)
    {
        //
    }
}
