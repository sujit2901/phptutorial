<?php
class MCA{
    private $rollno;
    private $name;
    static $dept="Dept of Data Science and technology";
    const college_code=365;
    function __construct($rollno,$name)
    {
        $this->rollno=$rollno;
        $this->name=$name;

    }
    function show()
    {
        echo "<br> rollno: ",$this->rollno," name: ",$this->name,"Department: ",MCA::$dept;
        echo "<br> calling static function from member function with self keyword: ",self::info();
        echo "<br> calling static function from member function with static keyword: ",static::info();
        echo "<br> calling constant function from member function with self keyword: ",self::college_code;
        echo "<br> calling constant function from member function with classname: ",MCA::college_code;

    }
    static function info()
    {
        echo "<br> call to static function",__METHOD__;
    }
} 
$s=new MCA(59,"sujit sahu");
$s->show();
MCA::info();

$s->info();
class B{
    public $i;
    public $j;
    function show()
    {
        echo "<br> the value of i=",$this->i," and the value of j=",$this->j;
    }

}
function staticDemo()
{
    static $counter=0;
    echo "<br> call made to ...",__FUNCTION__," ",$counter,"no of times";
    $counter++;
}
staticDemo();
staticDemo();
staticDemo();
staticDemo();
staticDemo();

$s2=new B;
$s2->i=12;
$s2->j=14;
$s2->show();
?>