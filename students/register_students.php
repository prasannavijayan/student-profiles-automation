<?php


$reg ='';
$myname = $_POST['fname'];
$myrollno = $_POST['rollno'];
$myage = $_POST['age'];
$mysex = $_POST['sex'];
$mypwd = $_POST['passwd'];
$mymail = $_POST['email'];
$mycounciller = $_POST['counci'];

if(isset($myrollno))
{
   ob_start();
include("database/dbcoi.php");
     $myroll = stripslashes($myrollno);
     $myroll = mysqli_real_escape_string($connect, $myroll);
     $regis = "SELECT * FROM studentregister WHERE rollno='$myroll'";
     $result = mysqli_query($connect, $regis);
     $count = mysqli_num_rows($result);
  if($count === 1 )
 {
   $reg = "You Have registered already , Please do not attempt to register Again";
   header("location:http://localhost/profiles4/index.php?msg=$reg");
 }
else
{
session_start();
$_SESSION['rollno'] = $myrollno;
$_SESSION['fullname'] = $myname;
$_SESSION['age'] = $myage;
$_SESSION['sex'] = $mysex;
$_SESSION['emailid'] = $mymail;
$_SESSION['counciller'] = $mycounciller;
$_SESSION['password'] = $mypwd;

header("location:prehome1.php");
} 
ob_end_flush();
}
else
{
$head = "Sorry Something Would have happened in our database , Please Try again later";
header("location:http://localhost/profiles4/index.php?msg=$head");
}


?> 
