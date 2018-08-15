<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calculator;

class CalcController extends Controller
{
    public function home()
    {
        return $this->render();
    }

    public function calc(Request $request)
    {
        return $this->render($request->all());
    }

    private function render($items = null)
    {
        $c = new Calculator();        
        if (is_array($items) && isset($items['a']) && isset($items['b']) && isset($items['action'])){
            $action = $items['action'];
            $a = floatval($items['a']);
            $b = floatval($items['b']);
            
            if ($action == 'Deposite'){
                $result = $c->deposite($a, $b);
            }
            else if ($action == 'Transfer money'){
                $result = $c->transfer($a, $b);
            }
            
            $items['result'] = $result;
            
            
        }

       else if (is_array($items) && isset($items['x']) && isset($items['y']) && isset($items['action'])){
            $action = $items['action'];
            $x = floatval($items['x']);
            $y = floatval($items['y']);
            
            if ($action == 'Loan'){
                $r = $c->loan($x, $y);
               // $items['r'] = $r;
            }
            else if ($action == 'Intr'){
                $r = $c->interest($x, $y);
            }
            $items['r'] = $r;
            
            
        }


        else{
            $items = array(
                'a' => '',
                'b' => '',
                'c'=> '',
                'x'=>'',
                'y'=>'',


                'action' => 'deposite',
            );
        }
        return view('calc', $items);
    }
}