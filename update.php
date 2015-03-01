<?php

$tweet = $_POST['tweets'];

$con = mysql_connect("localhost","root","root");


mysql_select_db("tweets",$con);




$query = mysql_query("INSERT INTO tweeting(tweets) VALUES('$tweet')");
if(!$query)
	die("Error :" . mysql_error());

header("location:index.php");



?>
