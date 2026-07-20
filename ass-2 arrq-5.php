
<?php
$color = array("white", "green", "red");

echo $color[0]." , ".$color[1]." , ".$color[2];
sort($color);
echo "<br>";
echo "<br>";
foreach($color as $c)
{
    echo "<li>$c</li>";
}
?>
