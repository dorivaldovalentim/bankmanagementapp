<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Bank;
use App\Models\Card;
use App\Models\Debit;
use App\Models\DebitsLog;
use App\Models\Transation;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $in = DebitsLog::whereType('I')->get();
        $out = DebitsLog::whereType('O')->get();

        foreach($in as $key) {
            $key->type = 'O';
            $key->save();
        }

        foreach($out as $key) {
            $key->amount *= -1;
            $key->type = 'I';
            $key->save();
        }

        dd('Done 😉');
    }
}
