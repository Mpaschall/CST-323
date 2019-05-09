<?php

session_start();
session_destroy();

echo "You have logged out";
echo "<a href='../Index.php'>Back to Index.</a>";
?>
