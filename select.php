<?php
$rollno=$_POST['num'];
$name=$_POST['nm'];
$ct=$_POST['ct'];
$dept=$_POST['dept'];
$bdt=$_POST['brd'];

include 'connection.php';
$sql="insert into student(rollno,stud_name,city,dept,dob)
       values('$rollno','$name','$ct','$dept','$bdt')";
 
if(mysqli_query($con,$sql))
{
echo "<br>record inserted";
}
else
{
echo "record not inserted";
}
echo "<table border=2>";
echo"<tr>
<th>rollno</th>
<th>stud_name</th>
<th>city</th>
<th>dept</th>
<th>dob</th>
<th>opretion</th>";
echo "</tr>";
$sql1="select * from student";
$result=mysqli_query($con,$sql1);
while($row=mysqli_fetch_array($result))
{
echo "<tr>
<td>$row[0]</td>
<td>$row[1]</td>
<td>$row[2]</td>
<td>$row[3]</td>
<td>$row[4]</td>";

echo "<td><a href=delete.php?id=".$row['rollno'].">delete</a></td>";
echo"</tr>";
}
echo "</table>";
mysqli_free_result($result);
mysqli_close($con);

?>