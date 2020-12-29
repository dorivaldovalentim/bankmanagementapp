<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\Card;
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
    public function edit(Card $card)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Card $card)
    {
        //
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

    public function rechargeForm($id)
    {
        $card = Card::findOrFail($id);
        return view('cards.recharge', compact('card'));
    }

    public function recharge(Request $request, $id)
    {
        $card = Card::findOrFail($id);
        $card->amount += $request->amount;

        switch ($request->reference) {
            case '0':
                $card->expenses += $request->amount * 0.4;
                $card->forme += $request->amount * 0.3;
                $card->savings += $request->amount * 0.3;
                break;

            case 'expenses':
                $card->expenses += $request->amount;
                break;

            case 'savings':
                $card->savings += $request->amount;
                break;

            case 'forme':
                $card->forme += $request->amount;
                break;
            
            default:
                return redirect()->back()->with([
                    'title'       => 'Erro',
                    'description' => 'Esta opção não existe',
                    'type'        => 'danger'
                ]);
                break;
        }

        if ($card->save()) {
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
}
