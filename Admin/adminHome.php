<?php
require_once ('../utility/adminFunctions.php');
?>
<html>
This page will be available only to admins in the future <br>
<div name="Users">
<?php
?>
    <div name="UpdatePassword">
        <form id="UpdatePassword" action="passwordUpdate.php" method="post">
            <h3>Update a Password</h3>
            <label>Username</label><br>
            <input name="Username" type="text" maxlength="100" required/><br><br>

            <label>New Password</label><br>
            <input name="Password" type="text" maxlength="50" required/><br>
            <input name="Submit" type="submit" value="Update Password" required/><br>
        </form>
    </div>

    <div name="DeleteUser">
        <form id="DeleteUser" action="userDelete.php" method="post">
            <h3>Delete a User</h3>
            <label>Username</label><br>
            <input name="Username" type="text" maxlength="100" required/><br>
            <input name="Submit" type="submit" value="Delete User" required/><br>
        </form>
    </div>
    <a href="../Index.php">Home</a>
</html>
