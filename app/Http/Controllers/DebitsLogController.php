<?php

namespace App\Http\Controllers;

use App\Models\Debit;
use App\Models\DebitsLog;
use Illuminate\Http\Request;

class DebitsLogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $debits_logs = (new Debit)->findOrFail($id)->debits_logs()->orderByDesc('created_at')->paginate(50);
        return view("debits_logs.index", compact('debits_logs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $debit = (new Debit)->findOrFail($id);
        return view('debits_logs.create', compact('debit'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $debit = auth()->user()->debits()->findOrFail($id);

        $debits_log = new DebitsLog();
        $debits_log->debit_id = $id;
        $debits_log->user_id = auth()->user()->id;
        $debits_log->amount = $request->amount;
        $debits_log->type = $request->type;
        $debits_log->description = $request->description;

        if ($debits_log->save()) {
            if ($request->type == 'I') {
                $debit->amount -= $request->amount;
            } else {
                $debit->amount += $request->amount;
            }
    
            if ($debit->update()) {
                return redirect()->back()->with([
                    'title'       => 'Sucesso',
                    'description' => 'Log cadastrado com sucesso',
                    'type'        => 'success'
                ]);
            }
        }
    
        return redirect()->back()->with([
            'title'       => 'Erro',
            'description' => 'Log não cadastrado',
            'type'        => 'danger'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DebitsLog  $debitsLog
     * @return \Illuminate\Http\Response
     */
    public function show(DebitsLog $debitsLog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DebitsLog  $debitsLog
     * @return \Illuminate\Http\Response
     */
    public function edit(DebitsLog $debitsLog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DebitsLog  $debitsLog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DebitsLog $debitsLog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DebitsLog  $debitsLog
     * @return \Illuminate\Http\Response
     */
    public function destroy(DebitsLog $debitsLog)
    {
        //
    }
}
