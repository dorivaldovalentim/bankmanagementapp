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
        return dd(
            (new Debit)->find(1)->debits_logs()->get(),
            (new DebitsLog)->find(1)->user,
            (new DebitsLog)->find(1)->debit
        );
    }
}
