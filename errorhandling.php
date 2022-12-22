<?php 
$f=fopen('random.txt','r');
echo "<br> file",$f;

    //CREATING CUSTOM ERROR HANDLER
    //step1: create your custom error handler function 
    function mcaErrorHandler($errno,$errstr,$errfile,$errline)
    {
        echo "<h3 style='color:white;background-color:indianred;'>MCAErrNo:[$errno] at line :$errline in file: $errfile Errordetails: $errstr";

    }
    set_error_handler("mcaErrorHandler",E_USER_WARNING);
    $age=15;
if ($age<18)
    trigger_error("age not valid for registration",E_USER_WARNING);
    function noErrorHandler($errno,$errstr,$errfile,$errline)
    {
        echo "<h3 style='color:white;background-color:orange;'>MCAErrNo:[$errno] at line :$errline in file: $errfile Errordetails: $errstr";

    }
    set_error_handler("noErrorHandler",E_USER_ERROR);
    $f1=fopen("randomFile.pdf",'r');
    
    $a=-15;
    if ($a<0)
        trigger_error("number should not be negative",E_USER_ERROR);
        //AT a time one error handler can be active
?>