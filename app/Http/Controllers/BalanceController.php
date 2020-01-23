<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Balance;

class BalanceController extends Controller
{
    public function index()
    {
        $balance = Balance::orderBy('id', 'DESC')->get();

        $salary = 0;

        foreach($balance as $item){
            $salary += $item->importe;
        }

        return view('balance.index')->with([
            'balances' => $balance,
            'salary' => $salary
        ]);
    }
    
}
