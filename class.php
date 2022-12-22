<?php
class Student
{
    public $rollno;
    public $name;
    public $email;
    function __construct($rollno,$name,$email){
        // echo "<br> Student class constuctor called...",__METHOD__;
        $this->rollno=$rollno;
        $this->name=$name;
        $this->email=$email;
    }
    function showDetails(){
        echo "<br><hr><h2> rollno:",$this->rollno, "Name:",$this->name,
        "Email:", $this->email;
    }
}
$s1=new Student(1,"sujit","Sujit.sahu@somaiya.edu");
$s2=new Student(2,"shyam","Shyam@somaiya.edu");
$s1->showDetails();
$s2->showDetails();
 class MCA{
    //access specifiers
    //constructor
    protected $name;
    function __construct($name)
    {   $this->name=$name;
        echo "<br> MCA constructor called",__CLASS__;

    }
    function showname()
    {
        echo "<br> show() name:",$this->name;
    }
    function __destruct()
    {
        echo "<br> destructor called",__CLASS__;
    }
 }
 class MCAFY extends MCA {
    // function __construct(){
       
    //     echo "<br> MCAFY constructor called",__CLASS__;
    // }s
    function __construct($name,$div){
        parent::__construct($name);
        $this->div=$div;
        echo "<br> constructor is called ",__class__;
    }
    function showdiv()
    {
        echo "<br> show() name:",$this->name," div:",$this->div;
    }
    function __destruct(){
        
        echo "<br> destructor called",__CLASS__;
    }
 }
 class Dept extends MCAFY{
    private $dept;
    function __construct($name,$div,$dept)
    {
        parent::__construct($name,$div);
        $this->dept=$dept;
        echo "<br> MCAFY consturctor called";
    }
    function showDetails()
    {
        echo "<br> show() name:",$this->name," div:",$this->div," Dept:",$this->dept;
    }
    function __destruct(){
        
        echo "<br> destructor called",__CLASS__;
    }
 }
 class A
 {
    function show(){
        echo "<br> hello world";
    }
 }
 class B extends A
 {
    function show(){
        parent::show();
        echo "<br> called:",__CLASS__,__METHOD__;
    }
    function __call($function_name,$args){
        if ($function_name=="sum")
        {
            if(gettype($args[0])=="int" && gettype($args[1])=="int")
            {  
                return $args[0]+$args[1];
              
            }
            else if(gettype($args[0])=="string" && gettype($args[1])=="string")
            {  
                return $args[0].$args[1];
              
            }
            else{
                return string($args[0])+$args[1];

            }
            
        }
    }
 }
 $object=new B;
 echo 'object->sum(1,2)=',$object->sum(1,2);
 echo 'object->sum("sujit","sahu")=',$object->sum("sujit","sahu");
 echo 'object->sum(1,"sujit")=',$object->sum(1,"sujit");
 
//  $student1=new MCA();
//  $student1->show();
 $student2=new dept("Sujit Sahu","A","MCA");
 $student2->showname();
 $student2->showdiv();
 $student2->showdetails();
 $student3=clone $student2;

?>