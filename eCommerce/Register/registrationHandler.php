<?php session_start();

require_once('../utility/dbFunctions.php');
require_once('../utility/phpFunctions.php');

$userName = $_POST['username'];
$password = $_POST['password'];
$passwordConfirm = $_POST['passwordTwo'];

//Establish connection to database
$mysqli = dbConnect();

//Check if requested email address exists in database
$userCheck = $mysqli->query ("SELECT * FROM users WHERE UserName = '$userName'");
//Return number of rows found
$count = $userCheck->num_rows;
if ($count > 0)
{
    echo "This user has already been registered. Please use a different username.";
    include('Registration.php');
}
else
{

    $sql = "INSERT INTO users (UserName, Password) 
        VALUES ('$userName', '$password')";


    //Check if any fields are empty
    if (validateInput($userName)) {
        echo "Username can't be blank.";
        include('Registration.php');
    } elseif (validateInput($password)) {
        echo "Password can't be blank.";
        include('Registration.php');
    }

    //Verify that both passwords match
    elseif ($password != $passwordConfirm) {
        echo "Passwords do not match.";
        include('Registration.php');
    }
    else
        //Use query method to insert data to database
        if ($mysqli->query($sql) === TRUE) {
            echo "Youare now registered.";
            include('../Login/Login.php');
        } else {
            echo "Registration Failed.";
            include('Registration.php');
        }
}
$mysqli->close();
?>