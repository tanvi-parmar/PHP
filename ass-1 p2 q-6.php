<?php

	$pamount=1000;
	$flag=0;
	$damount=0;
	$pay=0;
	
if($pamount>=2000)
{
	$damount=$pamount*0.15;
}

elseif($pamount>=1000)
{
	$damount=$pamount*0.10;
}

elseif($pamount>=500)
{
	$damount=$pamount*0.05;
}
else
{
	echo "Sorry..!!We can't gave you Discount..Purchase more..!";
}

$pay=$pamount-$damount;

echo "Purchase Amount : Rs.".$pamount."<br>";
echo "Discount Amount : Rs.".$damount."<br>";
echo "Payable Amount : Rs.".$pay."<br>";
?>