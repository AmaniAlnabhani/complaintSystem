<?php 

try{
$connection = mysqli_connect("localhost","root","","complaint_system");

if($connection)
    {
        //echo "Connected";
        // header("Location: ../index.php");
    }
}catch(Exception $e)
{
    echo $e->getMessage();
}
