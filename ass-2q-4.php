<?php

function vote($age)
{
    if($age>=18)
    {
        echo "Eligible to vote";
    }
    else
    {
        echo "Not eligible to vote";
    }
}
vote(20);

?>

