<link rel=STYLESHEET href=css/bootstrap.css />
<?php
session_start(); //start the session
define(fname, $_SESSION['fullname']);
define(rollno, $_SESSION['rollno']);

if($_SESSION['rollno'] == NULL)
{  header("location:index.php"); }
else
 header('Contenet-type:text/html; charset=utf-8');




$idm = $_POST['idm'];
$occu = $_POST['occu'];
$oadd = $_POST['oadd'];
$opin = $_POST['opin'];
$ophone = $_POST['ophone'];
$eadd = $_POST['eadd'];
$ephoneno = $_POST['ephone'];
$eca = $_POST['ncc'];
$sports = $_POST['sports'];
$arts = $_POST['arts'];

$rollno = rollno;
	include('database/config.php');

	$query = "INSERT INTO aboutme (rollno,identification_marks ,occupation_parents,office_address ,office_pincode ,office_phone,
emergency_address ,emergency_phoneno, ncc_nss ,sports ,fine_arts)
VALUES
('$rollno','$idm','$occu','$oadd','$opin','$ophone','$eadd','$ephoneno','$eca','$sports','$arts')";

if(!mysql_query($query,$connect))
	die("Data's are not inserted into the table" . mysql_error());

header("location:prehome3.php");
echo "<a href='prehome3.php' class='btn btn-primary'>Go next </a>";
?>
