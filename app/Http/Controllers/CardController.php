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
        
        $transation = new Transation();
        $transation->card_id = $id;
        $transation->amount = $request->amount;
        $transation->before_transation = $card->amount;
        $transation->after_transation = $transation->before_transation + $transation->amount;
        $transation->type = 'I';
        
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
    
    public function dischargeForm($id)
    {
        $card = Card::findOrFail($id);
        return view('cards.discharge', compact('card'));
    }

    public function discharge(Request $request, $id)
    {
        $card = Card::findOrFail($id);

        $transation = new Transation();
        $transation->card_id = $id;
        $transation->amount = $request->amount;
        $transation->before_transation = $card->amount;
        $transation->after_transation = $transation->before_transation - $transation->amount;
        $transation->type = 'O';

        $card->amount -= $request->amount;

        switch ($request->reference) {
            case '0':
                $card->expenses -= $request->amount * 0.4;
                $card->forme -= $request->amount * 0.3;
                $card->savings -= $request->amount * 0.3;
                $transation->where = 'Geral';
                break;

            case 'expenses':
                $card->expenses -= $request->amount;
                $transation->where = 'Despesas';
                break;

            case 'savings':
                $card->savings -= $request->amount;
                $transation->where = 'Poupanças';
                break;

            case 'forme':
                $card->forme -= $request->amount;
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
                'description' => 'Valor retirado com sucesso',
                'type'        => 'success'
            ]);
        }

        return redirect()->back()->with([
            'title'       => 'Erro',
            'description' => 'Erro ao retirar valor',
            'type'        => 'danger'
        ]);
    }
}
