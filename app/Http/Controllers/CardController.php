<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\Card;
use App\Models\Transation;
use Illuminate\Http\Request;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cards = auth()->user()->cards()->get();
        return view('cards.index', compact('cards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $banks = (new Bank())->orderBy('name')->get();
        return view('cards.create', compact('banks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $card = new Card();
        $card->user_id = auth()->user()->id;
        $card->bank_id = $request->bank_id;
        $card->amount = 0;
        $card->expenses = 0;
        $card->savings = 0;
        $card->forme = 0;
        $card->number = $request->number;
        $card->iban = $request->iban;
        $card->expires_at = $request->expires_at;
        
        if ($card->save()) {
            return redirect()->back()->with([
                'title'       => 'Sucesso',
                'description' => 'Cartão cadastrado com sucesso',
                'type'        => 'success'
            ]);
        }

        return redirect()->back()->with([
            'title'       => 'Erro',
            'description' => 'Cartão não cadastrado',
            'type'        => 'danger'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $card = Card::findOrFail($id);
        return view('cards.show', compact('card'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $banks = (new Bank())->orderBy('name')->get();
        $card = Card::findOrFail($id);
        return view('cards.edit', compact('banks', 'card'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $card = auth()->user()->cards()->findOrFail($id);
        $card->number = $request->number;
        $card->iban = $request->iban;
        $card->expires_at = $request->expires_at;
        $card->bank_id = $request->bank_id;

        if ($card->save()) {
            return redirect()->back()->with([
                'title'       => 'Sucesso',
                'description' => 'Dados do cartão actualizados com sucesso',
                'type'        => 'success'
            ]);
        }

        return redirect()->back()->with([
            'title'       => 'Erro',
            'description' => 'Erro ao actualizar os dados do cartão',
            'type'        => 'danger'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function destroy(Card $card)
    {
        //
    }
}
