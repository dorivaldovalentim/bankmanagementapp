<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = array();
        $data['cards'] = auth()->user()->cards()->count();
        $data['amount'] = auth()->user()->cards()->sum('amount');
        $data['needs'] = auth()->user()->needs()->whereStatus(0)->sum('amount');

        return view('home', compact('data'));
    }
}
