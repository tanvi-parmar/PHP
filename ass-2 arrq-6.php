<?php

$marks=array('Bipin'=>array('Maths'=>45,'Physics'=>40,'Chemistry'=>42),
             'Ravi'=>array('Maths'=>40,'Physics'=>40,'Chemistry'=>40), 
             'Amit'=>array('Maths'=>50,'Physics'=>45,'Chemistry'=>48));

echo "Marks for Bipin in Maths : "; 
echo $marks['Bipin']['Maths']."<br>"; 
echo "Marks for Bhavik in Physics : "; 
echo $marks['Ravi']['Physics']."<br>"; 
echo "Marks for Amit in Chemistry : "; 
echo $marks['Amit']['Chemistry']."<br>"; 


echo "<pre>";
print_r($marks);
          
?>