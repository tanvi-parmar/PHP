<?php
$con=mysqli_connect('localhost','root','','tanvi');
if(!$con)
{
	echo "Connection Fail..!".mysqli_connect_errno();
}
else
{
	echo "Cnnected successfully..!";
}
?>
