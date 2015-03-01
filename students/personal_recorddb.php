<link rel=STYLESHEET href=css/bootstrap.css />
<?php
session_start(); //start the session
define(fname, $_SESSION['fullname']);
define(rollno, $_SESSION['rollno']);
define(age, $_SESSION['age']);
define(mail, $_SESSION['emailid']);
define(counci, $_SESSION['counciller']);
define(passwd, $_SESSION['password']);
define(sex, $_SESSION['sex']);


if($_SESSION['rollno'] == NULL)
{  header("location:index.php"); }
else
 header('Contenet-type:text/html; charset=utf-8');

$fullname = fname;
$rollno = rollno;
$age = age;
$mail = mail;
$counciller = counci;
$password = passwd;
$sex = sex;
 $d = date("y-m-d");


 $pname = $_POST['pname'];
 $regno = $_POST['regnumber'];
 $course = $_POST['course'];
 $dept = $_POST['dept'];
 $radd = $_POST['raddress'];
 $rpincode = $_POST['rpincode'];
 $rphoneno = $_POST['rphoneno'];
 $remailid = $_POST['yemailid'];
 $date = $_POST['year']."-".$_POST['month']."-".$_POST['date'];
 $ya = $_POST['ayear'];
 $yl = $_POST['lyear'];
 $hgt = $_POST['high'];
 $wgt = $_POST['weight'];
 $blood =$_POST['type'];



		include('database/config.php');
		
	$query = "INSERT INTO studentregister (fullname, rollno, age, sex, password, emailid,counciller,date)
VALUES
('$fullname', 
'$rollno',
'$age',
'$sex',
'$password',
'$mail',
'$counciller',
'$d'
)"; 

if(!mysql_query($query,$connect))
	die("Data's are not inserted into the table" . mysql_error());

	$query = "INSERT INTO personal_details (rollno, parents_name,regnumber,course,dept,DOB,resident_address,pincode,phoneno,admission_year,leaving_year,emailid,height,weight,blood)
VALUES 
('$rollno','$pname','$regno','$course','$dept','$date','$radd','$rpincode','$rphoneno','$ya','$yl','$remailid','$hgt','$wgt','$blood')";

if(!mysql_query($query,$connect)) 
	die("Data's are not inserted into the table" . mysql_error());

session_start();
header("Location:prehome2.php");
echo "<a href='prehome2.php' class='btn btn-primary'>Go next </a>";





?>
