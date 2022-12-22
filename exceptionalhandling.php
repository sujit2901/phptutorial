<?php
//exception handling
set_error_handler(function($errno,$errstr)
{
    throw new Exception($errstr,$errno);
});
$i=10;
$j=0;
// $arr= array(11,22);
// echo $i/$j;
// echo $arr[j];
try
{
    //put the error prone code in try block
    // echo $i/$j;
    // echo $arr[3];
    $f=fopen("nofile.txt","r");
    //throw new Exception("throwing sample exception"); 
}  
catch(DivisionByZeroError $e)
{
    //handle the exception here
    echo "<br> Exception:",$e->getMessage();


}
catch(exception $e)
{
    //handle the exception here
    //there can be  multipkle catch block
    //in case of multiple catch block generic exception that should be at the last
    //there should not be any space between try catch and finally 
    echo "<br> Exception:",$e->getMessage();
    echo "<br> Exception:",$e->getLine();
    echo "<br> Exception:",$e->getCode();
    echo "<br> Exception:",$e->getFile();



}
finally{
    //generally close your resources here, is good practise
    echo "<br> this will always execute";
}
echo "<br> line of code after exception handling"
?>