<?php

$semester = $_POST['isemester'];

$internal = $_POST['iinternal'];

$rollno = $_POST['rollno'];

$ino = $_POST['in1'];

$int = $_POST['in2'];

$inth = $_POST['in3'];

$inf = $_POST['in4'];

$infi = $_POST['in5'];

$ins = $_POST['in6'];

$a[1][1] = 'ionesone';$a[2][1] = 'itwosone';$a[3][1] = 'ithreesone';$a[4][1] = 'ifoursone';$a[5][1] = 'ifivesone';
$a[1][2] = 'ionestwo';$a[2][2] = 'itwostwo';$a[3][2] = 'ithreestwo';$a[4][2] = 'ifourstwo';$a[5][2] = 'ifivestwo';
$a[1][3] = 'ionesthree';$a[2][3] = 'itwosthree';$a[3][3] = 'ithreesthree';$a[4][3] = 'ifoursthree';$a[5][3] = 'ifivesthree';
$a[1][4] = 'ionesfour';$a[2][4] = 'itwosfour';$a[3][4] = 'ithreesfour';$a[4][4] = 'ifoursfour';$a[5][4] = 'ifivesfour';
$a[1][5] = 'ionesfive';$a[2][5] = 'itwosfive';$a[3][5] = 'ithreesfive';$a[4][5] = 'ifoursfive';$a[5][5] = 'ifivesfive';
$a[1][6] = 'ionessix';$a[2][6] = 'itwossix';$a[3][6] = 'ithreessix';$a[4][6] = 'ifourssix';$a[5][6] = 'ifivessix';
$a[1][7] = 'ionesseven';$a[2][7] = 'itwosseven';$a[3][7] = 'ithreesseven';$a[4][7] = 'ifoursseven';$a[5][7] = 'ifivesseven';
$a[1][8] = 'ioneseight';$a[2][8] = 'itwoseight';$a[3][8] = 'ithreeseight';$a[4][8] = 'ifourseight';$a[5][8] = 'ifiveseight';






include('database/dbc.php');
$chk = mysql_query("SELECT * FROM {$a[$internal][$semester]} WHERE rollno=$rollno");
$count = mysql_num_rows($chk);
if($sem != 8)
{
if($count==1)
{ echo "Internal Mark already updated"; }
else
{
$query = mysql_query("INSERT INTO {$a[$internal][$semester]} VALUES('$rollno','$semester','$internal','$ino','$int','$inth','$inf','$infi','$ins')"); 
header("location:upexcelinter.php?msg=Successfull");
}
}
else
{
$query = mysql_query("INSERT INTO {$a[$internal][$semester]} VALUES('$rollno','$semester','$internal','$ino','$int')"); 
header("location:upexcelinter.php?msg=Successfull");

} 

?>
