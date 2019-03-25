<?php session_start();

require_once('../utility/dbFunctions.php');
require_once('../utility/phpFunctions.php');

$userName = $_POST['username'];
$password = $_POST['password'];

//Establish connection to database
$mysqli = dbConnect();

//Use query method to select data from database
$sql = $mysqli->query("SELECT * FROM users WHERE UserName = '$userName' AND Password = '$password'");

//Return number of rows found
$count = $sql->num_rows;

//Check if any fields are empty
if (validateInput($userName) || validateInput($password))
{
    echo "Both fields are required.";
    include('Login.php');
}
//Grant access if 1 row is found, deny if 0 rows or multiple rows are found
elseif ($count == 1)
{
    $row = $sql->fetch_assoc();    //Read the Row from the Query
    saveUserId($row["UserID"]); //Save User ID in the Session
    saveUserName($row["UserName"]); //Save Username in the Session

        include('../Inventory/InventoryHome.php');
}
elseif ($count == 0)
{
    echo "Invalid Credentials.";
    include('Login.php');
}
elseif ($count > 1)
{
    echo "There are multiple users that have registered these credentials.";
    include('Login.php');
}
else
{
    echo "Connection failed: " . $mysqli->connect_errno;
    include('Login.php');
}


$mysqli->close();
?>