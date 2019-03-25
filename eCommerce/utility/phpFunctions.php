<?php

//Save User ID in the Session
function saveUserId($id)
{
    session_start();
    $_SESSION["USER_ID"] = $id;
}
//Save User First Name in the Session
function saveUserName($name)
{
    session_start();
    $_SESSION["USER_NAME"] = $name;
}
//Retrieve User ID from the Session
function getUserId()
{
    session_start();
    return $_SESSION["USER_ID"];
}
//Retrieve User First Name from the Session
function getUserName()
{
    session_start();
    return $_SESSION["USER_NAME"];
}

//Validate that input field is not blank
function validateInput($input)
{
    if ($input == NULL || trim($input) == "" )
        return true;
}




?>