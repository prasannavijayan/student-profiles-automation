

<?php

include('database/config.php');

$rollo = $_POST['rollno'];

$one = $_POST['sem1'];

$two = $_POST['sem2'];

$three = $_POST['sem3'];

$four = $_POST['sem4'];

$five = $_POST['sem5'];

$six = $_POST['sem6'];

$seven = $_POST['sem7'];

$eight = $_POST['sem8'];

$nine = $_POST['sem9'];

$sem = $_POST['semester'];


if ($sem == 1)
{

  $check = mysql_query("SELECT * FROM semesterone WHERE rollno='$rollo'");
  $count = mysql_num_rows($check);
  if($count == 1)
  {   
 $msg = "Check the rollno/semester . Detail entered already ";
header("location:upexcel.php?msg=$msg"); }
else
{
$update = mysql_query("INSERT INTO semesterone(rollno,semester, sone,stwo,sthree,sfour,sfive,ssix,lone,ltwo) VALUES('$rollo','$sem','$one','$two','$three','$four','$five','$six','$seven','$eight')"); 
header("location:upexcel.php");
}
}

if($sem == 2)
{
  $check = mysql_query("SELECT * FROM semestertwo WHERE rollno='$rollo'");
  $count = mysql_num_rows($check);
  if($count == 1)
  {   
 $msg = "Check the rollno/semester . Detail entered already ";
header("location:upexcel.php?msg=$msg"); }
else
{
$update = mysql_query("INSERT INTO semestertwo(rollno,semester,sone,stwo,sthree,sfour,sfive,ssix,lone,ltwo,lthree) VALUES('$rollo','$sem','$one','$two','$three','$four','$five','$six','$seven','$eight','$nine')");
header("location:upexcel.php");
}
}
if($sem == 3)
{
  $check = mysql_query("SELECT * FROM semesterthree WHERE rollno='$rollo'");
  $count = mysql_num_rows($check);
  if($count == 1)
  {   
 $msg = "Check the rollno/semester . Detail entered already ";
header("location:upexcel.php?msg=$msg"); }
else
{
$update = mysql_query("INSERT INTO semesterthree(rollno,semester,sone,stwo,sthree,sfour,sfive,ssix,lone,ltwo,lthree) VALUES('$rollo','$sem','$one','$two','$three','$four','$five','$six','$seven','$eight','$nine')");
header("location:upexcel.php");
}
}

if($sem == 4)
{
  $check = mysql_query("SELECT * FROM semesterfour WHERE rollno='$rollo'");
  $count = mysql_num_rows($check);
  if($count == 1)
  {   
 $msg = "Check the rollno/semester . Detail entered already ";
header("location:upexcel.php?msg=$msg"); }
else
{
$update = mysql_query("INSERT INTO semesterfour(rollno,semester,sone,stwo,sthree,sfour,sfive,ssix,lone,ltwo,lthree) VALUES('$rollo','$sem','$one','$two','$three','$four','$five','$six','$seven','$eight','$nine')");
header("location:upexcel.php");
}
}
if($sem == 5)
{
  $check = mysql_query("SELECT * FROM semesterfive WHERE rollno='$rollo'");
  $count = mysql_num_rows($check);
  if($count == 1)
  {   
 $msg = "Check the rollno/semester . Detail entered already ";
header("location:upexcel.php?msg=$msg"); }
else
{
$update = mysql_query("INSERT INTO semesterfive(rollno,semester,sone,stwo,sthree,sfour,sfive,ssix,lone,ltwo,lthree) VALUES('$rollo','$sem','$one','$two','$three','$four','$five','$six','$seven','$eight','$nine')");
header("location:upexcel.php");
}
}

if($sem == 6)
{
  $check = mysql_query("SELECT * FROM semestersix WHERE rollno='$rollo'");
  $count = mysql_num_rows($check);
  if($count == 1)
  {   
 $msg = "Check the rollno/semester . Detail entered already ";
header("location:upexcel.php?msg=$msg"); }
else
{
$update = mysql_query("INSERT INTO semestersix(rollno,semester,sone,stwo,sthree,sfour,sfive,ssix,lone,ltwo,lthree) VALUES('$rollo','$sem','$one','$two','$three','$four','$five','$six','$seven','$eight','$nine')");
header("location:upexcel.php");
}
}

if ($sem == 7)
{
  $check = mysql_query("SELECT * FROM semesterseven WHERE rollno='$rollo'");
  $count = mysql_num_rows($check);
  if($count == 1)
  {   
 $msg = "Check the rollno/semester . Detail entered already ";
header("location:upexcel.php?msg=$msg"); }
else
{
$update = mysql_query("INSERT INTO semesterseven(rollno,semester,sone,stwo,sthree,sfour,sfive,ssix,lone,ltwo) VALUES('$rollo','$sem','$one','$two','$three','$four','$five','$six','$seven','$eight')");
header("location:upexcel.php");
}

}
if($sem == 8)
{

$update = mysql_query("INSERT INTO semestereight(rollno,semester,sone,stwo,sthree) VALUES('$rollo','$sem','$one','$two','$three')");

if(!$update)
echo mysql_error();
else
header("location:upexcel.php");



}
else
{
echo "Sorry ! This Rollno  " . $rollo . " mark is already available in the database so, please check your rollno wisely .";
}

?>
