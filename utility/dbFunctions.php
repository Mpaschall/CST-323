<?php

function dbConnect(){
    $connection = new mysqli("l6slz5o3eduzatkw.cbetxkdyhwsb.us-east-1.rds.amazonaws.com", "kckc4cm3ga7jyz88", "pg4kil9m4244mp77" , "w6xh268xdx236rsp");
    if ($connection->connect_errno)
    {
        die("Connection Failed.");
    }
    else
    {
        return $connection;
    }


}



?>
