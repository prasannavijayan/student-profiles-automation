
<?php
session_start(); //start the session

/*if($_SESSION['staffid'] == NULL || $_SESSION['password'] == NULL)
{  header("location:http://localhost/profiles4/index.php"); }

else
 {
 header('Content-type:text/html; charset=utf-8');
	define(staffid, $_SESSION['staffid']);
} */

if($_SESSION['staffid'] == NULL || $_SESSION['password'] == NULL)
	header('location:http://localhost/profiles4/index.php');
define(staffid, $_SESSION['staffid']);


?>


<html><head><title src=images/headlogo.png>Profiles-home</title>
<link href="images/header.png" rel="SHORTCUT ICON">
<!--<link type=text/css rel=stylesheet href=css/home_staffs.css > -->
<link rel=STYLESHEET href=css/index.css>
<script type=text/javascript src=js/home.js ></script>
</head>
<body link=green vlink=green>

<div class=container>

<div class="pull-right">

Welcome <?php 
$staffid = staffid;
 echo $staffid;
?>
					

<br>
<?php include('tabs.php'); ?><hr>
<div id=staff_image>
<?php
echo "<img src='display.php?rollno=$staffid'  width=150  >";
?><br>

<br>
<script src=js/det.js ></script>
<script type="text/javascript">

document.writeln("You are using "+BrowserDetect.browser+" "+BrowserDetect.version+" on "+BrowserDetect.OS);
</script>

</div>
</div>

