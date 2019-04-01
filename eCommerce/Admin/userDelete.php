<?php
require_once('../utility/adminFunctions.php');

$username = $_POST['Username'];

deleteUser($username);