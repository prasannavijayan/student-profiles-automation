<?php
session_start(); //start the session
if(!$_SESSION['rollno'] == NULL)
	header('location:change_passwd.php');
define(name, $_SESSION['rollno']);

$roll = name; 


$op = $_POST['oldpasswd'];
$np = $_POST['newpasswd'];
$rp = $_POST['rtnpasswd'];
$msg='';



include('database/config.php');

$com = mysql_query("SELECT password FROM studentregister WHERE rollno = '$roll'");
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
