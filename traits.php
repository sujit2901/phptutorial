<?php
trait ABC
{
    function show(){
        echo "<br> called :",__METHOD__;

    }
    
    static function stat(){
        echo "<br> hello world";
    }
}
trait DEF{
    function display(){
        echo "<br> called:",__METHOD__;
    }
}
class A { use ABC; use DEF;}
$a =new A;
$a->show();
$a->display();
ABC::stat();

?>