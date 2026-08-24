<?php
$con=mysqli_connect('localhost','root','');
if(!$con)
{
	echo "Connection not done ".mysqli_connect_error();
}
$sql="create database d1";
if(mysqli_query($con,$sql))
{
	echo "Databse Successfully created..";
}
else
{
	echo "Database not created..";
}
?>	