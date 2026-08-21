<?php
session_start();
echo "Bye..Bye..".$_SESSION['user'];
session_destroy();

?>