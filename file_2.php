<?php 
//print_r($_Files)
$target_path='D:/';
$target_path=$target_path.$_FILES['f1']['name'];
if(move_uploaded_file($_FILES['f1']['tmp_name'],$target_path))
{
	echo "file uploaded Successfully";
}
else
{
	echo"try again";
}
?>