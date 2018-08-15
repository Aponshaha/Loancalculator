<?php

namespace App;

class Calculator
{
    
    public function deposite($x, $y) 
    {
        $z = $x + $y;
        return $z;
    }
   
    public function transfer($x, $y) 
    {
        $z = $x - $y;
        return $z;
    }

    public function interest($x,$y)
        {
            $p=$x*$y*.05;
            return $p;
        } 

    public function loan($x,$y)
           {
               //$mon=$ad=$amt2=$amt=$amt_mon=0;
 
               $mon=(.05/1200);
               $ad=1+$mon;
               $l=((1-(($mon*$x)/$y)));
               $amt_mon=-1*(log($l));
               //$val2 = floor(log10($val))
               $amt2=(log($ad));
               $p=($amt_mon/$amt2);

               return round($p);
           }       
}