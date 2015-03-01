<?php
session_start(); //start the session

define(staffid, $_SESSION['staffid']);

if($_SESSION['staffid'] == NULL)
{  header("location:http://localhost/profiles4/"); }
else
 header('Content-type:text/html; charset=utf-8');
?>
<html><head><title src=images/headlogo.png>Profiles-home</title>
<link href="images/header.png" rel="SHORTCUT ICON">
<link type=text/css rel=stylesheet href=css/home_staffs.css >

<script type=text/javascript src=js/home.js ></script>
</head>
<body link=green vlink=green>


<?php include('hme.php'); ?>
<div class=main_page>
Welcome ,<?php
include('database/config.php');
$sroll = staffid;
$res =mysql_query("SELECT * FROM staffregister WHERE rollno='$sroll'");
while($row = mysql_fetch_array($res))
{
 if($row['sex']=="Male")
  echo "<b>Mr.";
 else
   echo "Mrs.";
define(name, $row['name']);
define(dob, $row['dob']);
define(email, $row['emailid']);
define(staffid,$row['rollno']);

}
echo name."<br></b>";

$coun = name;
echo  "Your Date of Birth :<in> ". dob."</in><br><br>";
echo "your mail ID : <in>".email."</in><br><br>";
echo  "Your Staff ID : <in>".staffid."</in><br><br>";

?>
</div>
