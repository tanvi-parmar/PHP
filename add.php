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

echo "<br><br>";
echo "<table border=2>";
echo "<tr>
		<th>Roll No.</th>
		<th>Stud_name</th>
		<th>Student_city</th>
		<th>Birthdate</th>
	 </tr>"	;
$sql ="select * from student";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
	echo "<tr>
			<td>$row[0]</td>
			<td>$row[1]</td>
			<td>$row[2]</td>
			<td>$row[3]</td>
		  </tr>";
}
echo "</table>";
mysqli_free_result($result);
mysqli_close($con);
echo "<br><br>";
echo "<a href='dynamichtml.php'>Insert More Records</a>";
?>