<?php
$a=$_GET["v1"];
$b=$_GET["v2"];

function arithmetic($a,$b)
{
	echo "Addition of $a and $b is= ".($a+$b)."<br>";
	echo "Subtraction of $a and $b is= ".($a-$b)."<br>";
	echo "Multiplication of $a and $b is= ".($a*$b)."<br>";
	echo "Division of $a and $b is= ".($a/$b)."<br>";
}
arithmetic($a,$b);

/*if(isset($_GET["sbt1"]))
{
	echo "Addition of $a and $b is ".($a+$b);
}

elseif(isset($_GET["sbt2"]))
{
	echo "Subtraction of $a and $b is ".($a-$b);
}

elseif(isset($_GET["sbt3"]))
{
	echo "Multiplication of $a and $b is ".($a*$b);
}

else
{
	echo "Division of $a and $b is ".($a/$b);
}*/

?>