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
    public function store(Request $request, $id)
    {
        $card = Card::findOrFail($id);
        
        $transation = new Transation();
        $transation->user_id = auth()->user()->id;
        $transation->card_id = $id;
        $transation->amount = $request->amount;
        $transation->before_transation = $card->amount;
        $transation->after_transation = $transation->before_transation + $transation->amount;
        $transation->type = $request->type;
        $transation->description = $request->description;
        
        $card->amount += $request->amount;

        switch ($request->reference) {
            case '0':
                $card->expenses += $request->amount * 0.4;
                $card->forme += $request->amount * 0.3;
                $card->savings += $request->amount * 0.3;
                $transation->where = 'Geral';
                break;

            case 'expenses':
                $card->expenses += $request->amount;
                $transation->where = 'Despesas';
                break;

            case 'savings':
                $card->savings += $request->amount;
                $transation->where = 'Poupanças';
                break;

            case 'forme':
                $card->forme += $request->amount;
                $transation->where = 'Para mim';
                break;
            
            default:
                return redirect()->back()->with([
                    'title'       => 'Erro',
                    'description' => 'Esta opção não existe',
                    'type'        => 'danger'
                ]);
                break;
        }

        if ($card->save() && $transation->save()) {
            return redirect()->back()->with([
                'title'       => 'Sucesso',
                'description' => 'Recarga efectuada com sucesso',
                'type'        => 'success'
            ]);
        }

        return redirect()->back()->with([
            'title'       => 'Erro',
            'description' => 'Erro ao efectuar recarga',
            'type'        => 'danger'
        ]);
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
