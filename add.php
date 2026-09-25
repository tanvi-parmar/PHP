<?php
$name=$_POST['nm'];
$city=$_POST['ct'];
$brd=$_POST['brd'];

include "dynamiccon.php";

$sql="insert into student(Stud_name,Student_city,Birthdate)
	   values('$name','$city','$brd')";
if(mysqli_query($con,$sql))
{
	echo "<br><br>Record inserted..!";
}
else
{
	echo "<br>Record not inserted..!".mysqli_error();
}
mysqli_close($con);
?>