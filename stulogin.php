<?php
$rollno = $_POST['username']; // Get the Username 
$password = $_POST['passwd']; // Get the Password
$show = '';

   ob_start();
   $connect = mysqli_connect("localhost","root","root","profiles");
   $myrollno = stripslashes($rollno);
   $mypassword = stripslashes($password);
   $myrollno = mysqli_real_escape_string($connect,$myrollno);
   $mypassword = mysqli_real_escape_string($connect,$mypassword);
   $login = "SELECT * FROM studentregister WHERE rollno='{$myrollno}' AND password='{$mypassword}'";

   $result = mysqli_query($connect,$login); // Mysql_num_row is Counting table row
   $count = mysqli_num_rows($result); // if it matches it counts to be one 1  
   if($count==1)
  {
   session_start();
   $_SESSION["rollno"] = $myrollno;
	$_SESSION["password"] = $mypassword;
    echo "true";
  }
 else
  {
 echo "false";
  }
   ob_end_flush();
?>
