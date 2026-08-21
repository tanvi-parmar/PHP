<?php
session_start();
echo "Welcome to our site..".$_SESSION['user']."<br>";
echo "<a href='logout.php'>Logout</a>";
?>