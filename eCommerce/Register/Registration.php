<?php
?>

<!-- Display Registration Form -->
<div class = "regForm">
    <form id="regForm" action="registrationHandler.php" method="post">
        <label>Username (Up to 30 Characters)</label><br>
        <input type="text" name="username" maxlength="255" required/><br>

        <label>Password (Up to 30 Characters)</label><br>
        <input type="password" name="password"><br>

        <label>Re-Enter Password</label><br>
        <input type="password" name="passwordTwo" id="passwordTwo"><br>

        <input type="submit" value="Register"><br>

    </form>
</div>


</body>
</html>