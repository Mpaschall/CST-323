<?php

private $dbServerName = l6slz5o3eduzatkw.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;
private $dbUserName = kckc4cm3ga7jyz88;
private $dbPassword = pg4kil9m4244mp77;
private $dbName = w6xh268xdx236rsp;

function dbConnect(){
    $connection = new mysqli($this->$dbServerName, $this->$dbUserName, $this->$dbPassword , $this->$dbName);
    if ($connection->connect_errno)
    {
        echo "Connection Failed.";

        include('connectionFailed.php');
    }
    else
    {
        return $connection;
    }


}



?>
