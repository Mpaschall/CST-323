<?php
require_once ('dbFunctions.php');
function getUsers(){
    $usersArray = array();
    $i = 0;
    $connection = dbConnect();
    $sql = $connection->query("SELECT * FROM users");

//Return number of rows found
    $count = $sql->num_rows;

//Return users if they are found.
    if ($count >= 1) {
        ?>
        <table id="Users" name="Users" border="1">
            <th>Users</th>
            <tr><td>
            <?php
            //if there are rows, display in a table.
            while ($row = $sql->fetch_assoc()) {
                $usersArray[$i] = $row["UserName"];
                echo "" . $usersArray[$i] . "<br>";
                $i++;
            }
            ?>
                </td></tr>
        </table><br><br>
        <?php
        $connection->close();
    }
    elseif ($count == 0)
    {
        echo "No users to display.";
    }
    else
    {
        echo "Connection failed";
    }
}

//Changes info on a user.
function updateUserPassword($username, $password){
    $connection = dbConnect();
    $sql = "
UPDATE users 
SET Password= '$password' 
WHERE UserName= '$username'";

    if($connection->query($sql) == True){
        echo "Password updated.";
        include ('../Admin/adminHome.php');
    }
    else{
        echo "Password could not be updated.";
        include ('../Admin/adminHome.php');
    }
    $connection.close();
}
function deleteUser($username){
    $connection = dbConnect();
    $sql = ("
DELETE FROM users 
WHERE UserName = '$username'");
    if($connection->query($sql) == True){
        echo "User deleted.";
        include ('../Admin/adminHome.php');
    }
    else{
        echo "User could not be deleted";
        include ('../Admin/adminHome.php');
    }
    $connection.close();
}
?>