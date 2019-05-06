<?php

function dbConnect(){
    $connection = new mysqli("localhost", "root", "root" , "eCommerce", 8889);
    if ($connection->connect_errno)
    {
        $message = "Connection Failed.";

        include('connectionFailed.php');
    }
    else
    {
        return $connection;
    }


}



?>