<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Bank;
use App\Models\Card;
use App\Models\Transation;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return dd((new Transation)->find(1)->user);
    }
}
