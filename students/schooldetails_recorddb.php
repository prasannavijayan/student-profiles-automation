<link rel=STYLESHEET href=css/bootstrap.css /><?php
session_start(); //start the session


if($_SESSION['rollno'] == NULL)
{  header("location:index.php"); }
else
 header('Contenet-type:text/html; charset=utf-8');
define(fname, $_SESSION['fullname']);
define(rollno, $_SESSION['rollno']);

$mat = $_POST['mat'];
$phy = $_POST['phy'];
$che = $_POST['che'];
$cutoff = ($mat/2) + ($phy + $che)/4;
$tot = $_POST['tm'];
$tenth = $_POST['std'];
$mayten = $_POST['may'];
$nasten = $_POST['nas'];
$pmten = $_POST['pm'];
$twel =  $_POST['std2'];
$maytwel =$_POST['may2'];
$nastwel = $_POST['nas2'];
$pmtwel =  $_POST['pm2'];
$deg =  $_POST['std3'];
$maydip = $_POST['may3'];
$nasdip = $_POST['nas3'];
$pmdip = $_POST['pm3'];

$rollno =rollno;

	include('database/config.php');
	
	$query = "INSERT INTO schooldetails(rollno,stdten,mayten,noiten,pmten,stdtwel,maytwel,noitwel,pmtwel,diplomo,maydip,noidip,
				pmdip,maths,physics,chemistry,total,cutoff) 
VALUES
('$rollno','$tenth','$mayten','$nasten','$pmten','$twel','$maytwel','$nastwel','$pmtwel','$deg','$maydip','$nasdip','$pmdip','$mat','$phy',
'$che','$tot','$cutoff')";

if(!mysql_query($query,$connect))
	die("Data's are not inserted into the table" . mysql_error());

header("location:prehome4.php");
echo "<a href='prehome3.php' class='btn btn-primary'>Go next </a>";






?>
