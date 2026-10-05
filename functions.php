<?php
$con=mysqli_connect('localhost','root','','tanvi');
if(!$con)
{
	echo "Connection not done <br>".mysqli_connect_error();
}
else
{
	echo "Connection done..<br>";
}
$sql="Select * from Student";
$result=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($result))
{
	echo $row[0]." - ".$row[1]." - ".$row[2]."<br>";
}

echo "<br><br>";
$rowcount=mysqli_num_rows($result);
echo "Result set has $rowcount rows";

echo "<br><br>";
mysqli_data_seek($result,0);
$row=mysqli_fetch_row($result);
echo $row[0]." - ".$row[1]." - ".$row[2];

echo "<br><br>";
while($row=mysqli_fetch_assoc($result))
{
	echo $row['Stud_id']." - ".$row['Stud_name']." - ".$row['Dept_name']."<br>";
}

echo "<br><br>";
$fieldcount=mysqli_num_fields($result);
echo "Result set has $fieldcount columns";

mysqli_free_result($result);
?>	