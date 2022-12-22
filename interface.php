<?php
interface Calc
{   //cannot contain constructor
    const pi=3.14; 
    function sum($a,$b);
    function mul(); 
}
interface Calc2
{   
    function div();
    function circlearea($r);
    
    function square($a);
}

 class Mycalc implements Calc,Calc2{
    function sum($a,$b){
        return $a+$b;
    }
    // function sum($a,$b,$c){}
    function circlearea($r)
    {
        echo "the area of circle ", Calc::pi*($r**2);
    }
    function mul(){}
    function div(){}
    function square($a){ return $a**2;}
}
$cal=new Mycalc;
echo $cal->sum(6,87);
echo "<br>",$cal->square(6);
echo "<br>",$cal->circlearea(6);



?>