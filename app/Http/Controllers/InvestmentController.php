<?php

namespace App\Http\Controllers;

use App\Investment;
use App\Balance;
use Session;
use Illuminate\Http\Request;

class InvestmentController extends Controller
{
    public function index()
    {
        $investments = Investment::all();
        $salary = $this->getSalary(0);

        foreach($investments as $inv){
            $operation = rand(1, 3);

            if($operation == 1){
                $inv->valor = $inv->valor / 2;
            } else {
                $inv->valor = $inv->valor * 2;
            }

            $inv->save();
        }

        return view('investment.index')->with(['investments' => $investments, 'salary' => $salary]);
    }

    public function getSalary($money){
        $balance = Balance::all();
        $salary = 0;

        foreach($balance as $item){
            $salary += $item->importe;
        }

        $salary -= $money;

        return $salary;
    }

    public function buy($id){
        $inv = Investment::find($id);

        if($inv->acciones > 0){
            $salary = $this->getSalary(0);

            if($salary >= $inv->valor){
                $inv->acciones -= 1;
                $inv->save();

                $balance = new Balance();

                $balance->fecha = date('Y-m-d');
                $balance->desc = "Compra de Accion: " . $inv->empresa;
                $balance->importe = $inv->valor * -1;
                $balance->save();



                Session::flash('payMsg', 'Se compro una accion de la empresa ' . strtoupper($inv->empresa));
                Session::flash('alertClass', 'alert-primary');
            } else {

                Session::flash('payMsg','No tienes suficiente dinero en la cuenta!');
                Session::flash('alertClass','alert-danger');
            }
        } else {

            Session::flash('payMsg','No hay acciones para comprar!');
            Session::flash('alertClass','alert-danger');
        }
        return redirect()->route('investments');
    }

    public function sell($id){
        $inv = Investment::find($id);

        if($inv->acciones > 0){
            if($inv->acciones >= $inv->total){
               Session::flash('payMsg','No tenes acciones compradas!');
               Session::flash('alertClass','alert-danger');
            }

            $salary = $this->getSalary($inv->valor);

            if($salary >= 0){
                $inv->acciones += 1;
                $inv->save();

                $balance = new Balance();

                $balance->fecha = date('Y-m-d');
                $balance->desc = "Venta de Accion: " . $inv->empresa;
                $balance->importe = $inv->valor;
                $balance->save();



                Session::flash('payMsg',"Se vendio una accion de la empresa " . strtoupper($inv->empresa));
                Session::flash('alertClass', 'alert-primary');
            } else {

                Session::flash('payMsg','No tienes suficiente dinero en la cuenta!');
                Session::flash('alertClass','alert-danger');
            }

        } else {

            Session::flash('payMsg','No hay acciones para vender!');
            Session::flash('alertClass','alert-danger');
        }
        return redirect()->route('investments');
    }

}
