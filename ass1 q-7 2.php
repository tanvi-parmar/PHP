<?php
$text=$_GET['str'];
$r=$_GET['r1'];
switch($r)
{
		case 1:
			echo"<font face='Arial'>$text</font>";
			break;
		case 2:
			echo"<font face='Times New Roman'>$text</font>";
			break;
		case 3:
			echo"<font face='Jokerman'>$text</font>";
			break;
}
?>