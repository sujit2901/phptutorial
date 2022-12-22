<?php
    class MCAException extends Exception{}
    try 
    {
        throw new MCAException("good morning mca");
    }
    catch(MCAException $e)
    {
        echo "<br> handling, ",$e->getMessage();
    }
?>