<?php
    abstract class Calc{
    //abstract class can have only constangt and data member
    //if class contain abstract method class mustt be declared as abstract 
    // abstarct class can have both abstract and normal methods
    //abstract keywords is must if you want to declare a method
    //an abstract class may or may not have abstract method
    //you cannot instantiate abstract class /can't create object of abstract class
    const code=3645;
    function __construct()
    {   
        echo "<br> ",__CLASS__," method ",__METHOD__;
    }
    abstract function sum($a,$b);

    function mul($a,$b)
    {
        return $a*$b;
    } 
    static function info(){
        echo "<br> calling class ",__class__; 
    }
 }
 //INHERETING ABSTRACT CLASS
  class Mycalc extends Calc{
    function __construct()
    {   parent::__construct();
        echo "<br> ",__CLASS__," method ",__METHOD__;
    }
    //child class inheriting from parent abstract class must define / Implement all parent 
    //abstract method or declare itself as abstarct
    function sum($a,$b){
        return $a+$b;
    }
    function div($a,$b){
        return $a/$b;
    }
  }
//   $c=new Calc;
    $c=new Mycalc;
    $result=$c->sum(5,4);
    echo "<br> sum of 5 & 4 is ",$result;
    echo "<br> division of 50 & 5 is ",$c->div(50,5);
    Calc::info();
    echo "<br> code :", Calc::code;

?>
