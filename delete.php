
<?php

include_once('function.php');

//object creation

$userdata=new DB_con();

$result=$userdata->delete();

header("Location:index.php");

?>