<?php


$host = "localhost";
$name = "root";
$passwd = "root";
	$connect = mysql_connect($host,$name,$passwd);
if(!$connect)
	echo mysql_error();
mysql_select_db("profiles",$connect);


	
?>

