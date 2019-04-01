<?php
require_once('../utility/adminFunctions.php');

$username = $_POST['Username'];
$password = $_POST['Password'];

updateUserPassword($username, $password);