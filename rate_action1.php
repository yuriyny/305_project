<?php 
require_once("initialize.php"); 
$var = (int)$_GET['value']; 
$result = insert_rating($_GET['name'], $var);
if ($result)
	echo "Thanks for rating ".$_GET['name']; 
else
	echo "Rating failed to be inserted."; 

header("Location: rate.php"); 
exit(); 

?>