<?php
$rollno=$_GET['id'];
$sql="delete from student where rollno=".$rollno;
include 'connection.php';
if(mysqli_query($con,$sql))
{
echo "<br>record deleted";
}
else
{
echo "<br>record not deleted";
}
?>