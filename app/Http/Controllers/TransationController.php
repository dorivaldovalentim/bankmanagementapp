<?php

namespace App\Http\Controllers;

use App\Models\Card;
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
        $card_amount = $card->amount;
        
        $transation = new Transation();
        $transation->user_id = auth()->user()->id;
        $transation->type = $request->type;
        $transation->card_id = $id;
        $transation->amount = $request->amount;
        
        if ($transation->type == 'O' && $card->amount == $transation->amount) {
            $transation->before_transation = $card->amount;
            $transation->after_transation = 0;
            $card->amount = 0;
            $card->expenses = 0;
            $card->forme = 0;
            $card->savings = 0;

            if ($card->save() && $transation->save()) {
                return redirect()->back()->with([
                    'title'       => 'Sucesso',
                    'description' => 'Transação efectuada com sucesso',
                    'type'        => 'success'
                ]);
            }
        }

        $transation->before_transation = $card->amount;
        $transation->after_transation = $transation->before_transation + $transation->amount;
        $transation->description = $request->description;
        
        if ($transation->type == 'I') {
            $card->amount += $request->amount;
        } elseif ($transation->type == 'O') {
            $card->amount -= $request->amount;
        }

        switch ($request->reference) {
            case '0':
                if ($transation->type == 'I') {
                    $card->expenses += $request->amount * 0.4;
                    $card->forme += $request->amount * 0.3;
                    $card->savings += $request->amount * 0.3;
                } elseif ($transation->type == 'O') {
                    if ($card->amount < $request->amount) {
                        return redirect()->back()->with([
                            'title'       => 'Aviso',
                            'description' => 'Só pode sacar até ' . number_format($card_amount, 2, ',', '.') . ' KZs',
                            'type'        => 'warning'
                        ]);
                    }

                    $card->expenses -= $request->amount * 0.4;
                    $card->forme -= $request->amount * 0.3;
                    $card->savings -= $request->amount * 0.3;
                }

                $transation->where = 'Geral';
                break;

            case 'expenses':
                if ($transation->type == 'I') {
                    $card->expenses += $request->amount;
                } elseif ($transation->type == 'O') {
                    if ($card->expenses < $request->amount) {
                        return redirect()->back()->with([
                            'title'       => 'Aviso',
                            'description' => 'Só pode sacar até ' . number_format($card->expenses, 2, ',', '.') . ' KZs',
                            'type'        => 'warning'
                        ]);
                    }
                    $card->expenses -= $request->amount;
                }

                $transation->where = 'Despesas';
                break;

            case 'savings':
                if ($transation->type == 'I') {
                    $card->savings += $request->amount;
                } elseif ($transation->type == 'O') {
                    if ($card->savings < $request->amount) {
                        return redirect()->back()->with([
                            'title'       => 'Aviso',
                            'description' => 'Só pode sacar até ' . number_format($card->savings, 2, ',', '.') . ' KZs',
                            'type'        => 'warning'
                        ]);
                    }
                    $card->savings -= $request->amount;
                }

                $transation->where = 'Poupanças';
                break;

            case 'forme':
                if ($transation->type == 'I') {
                    $card->forme += $request->amount;
                } elseif ($transation->type == 'O') {
                    if ($card->forme < $request->amount) {
                        return redirect()->back()->with([
                            'title'       => 'Aviso',
                            'description' => 'Só pode sacar até ' . number_format($card->forme, 2, ',', '.') . ' KZs',
                            'type'        => 'warning'
                        ]);
                    }
                    $card->forme -= $request->amount;
                }

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
                'description' => 'Transação efectuada com sucesso',
                'type'        => 'success'
            ]);
        }

        return redirect()->back()->with([
            'title'       => 'Erro',
            'description' => 'Erro ao efectuar transação',
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
        $card = Card::findOrFail($id);
        $transations = auth()->user()->transations()->whereCardId($id)->orderByDesc('created_at')->paginate(100);
        return view('transations.show', compact('transations', 'card'));
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

    public function search(Request $request, $id = null)
    {
        $transations = auth()->user()->transations();

        if ($request->begins_at)
            $transations = $transations->where('created_at', '>=', $request->begins_at);
        if ($request->ends_at)
            $transations = $transations->where('created_at', '<=', $request->ends_at);
        if ($request->description)
            $transations = $transations->where('description', 'LIKE', '%' . $request->description . '%');
        if ($request->reference)
            $transations = $transations->whereWhere($request->reference);
        if ($request->type)
            $transations = $transations->whereType($request->type);

        $transations = $transations->orderByDesc('created_at')->paginate(100);

        return $id ? view('transations.show', ['transations' => $transations, 'card' => Card::findOrFail($id)]) : view('transations.index', compact('transations'));
    }
}
