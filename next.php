<?php
session_start();
$unm=$_POST['uid'];
$pwd=$_POST['pwd'];
$_SESSION['user']=$unm;
if($unm=='Ram' && $pwd=='123')
{
		header("Location:next_2.php");
}
else
{
		echo "Try again";
}

?>