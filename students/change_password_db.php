<?php
session_start(); //start the session

if($_SESSION['staffid'] == NULL || $_SESSION['password'] == NULL)
{  header("location:http://localhost/profiles4/index.php"); }

else
 {
 header('Content-type:text/html; charset=utf-8');
	define(staffid, $_SESSION['staffid']);
}

$staffid = staffid;

$op = $_POST['oldpasswd'];
$np = $_POST['newpasswd'];
$rp = $_POST['rtnpasswd'];
$msg='';



include('database/config.php');

$com = mysql_query("SELECT password FROM staffregister WHERE rollno = '$staffid'");
while($row = mysql_fetch_array($com))
  { 
      $chk = $row['password'];
  }
if ($np!=$rp)
{
  $msg="Password Mismatches";
  header("location:changepasswd_db.php?msg=$msg");
}


if (strlen($np) < 6)
{
  $msg="Type the Password More than 6 Characters";
  header("location:changepasswd_db.php?msg=$msg");
}

if ($op!=$chk)
{
  $msg="old Password Given is Wrong Pls Type Again";
  header("location:changepasswd_db.php?msg=$msg");
}

else
  {
  
$update = mysql_query("UPDATE studentregister SET password='$np' WHERE rollno='$roll'");
if($update)
{
   $msg = "Password Successfully updated in your account(".$roll.")";
    header("location:home.php?msg=Password Successfully updated");
}
else
echo "Oops";
}
   



?>
