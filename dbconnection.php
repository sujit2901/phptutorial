<?php
$connection=mysqli_connect("localhost","root","","mitali");
if ($connection)
    echo "<br> connected to database name sujit";
else
    echo "<br> connection failed",mysqli_error($connection);    
?>