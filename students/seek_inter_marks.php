<?php
session_start(); //start the session

define(rollno, $_SESSION['rollno']);


$rollno = rollno;

$sem = $_POST['isemester'];

$inter = $_POST['internal'];

$a[1][1] = 'ionesone';$a[2][1] = 'itwosone';$a[3][1] = 'ithreesone';$a[4][1] = 'ifoursone';$a[5][1] = 'ifivesone';
$a[1][2] = 'ionestwo';$a[2][2] = 'itwostwo';$a[3][2] = 'ithreestwo';$a[4][2] = 'ifourstwo';$a[5][2] = 'ifivestwo';
$a[1][3] = 'ionesthree';$a[2][3] = 'itwosthree';$a[3][3] = 'ithreesthree';$a[4][3] = 'ifoursthree';$a[5][3] = 'ifivesthree';
$a[1][4] = 'ionesfour';$a[2][4] = 'itwosfour';$a[3][4] = 'ithreesfour';$a[4][4] = 'ifoursfour';$a[5][4] = 'ifivesfour';
$a[1][5] = 'ionesfive';$a[2][5] = 'itwosfive';$a[3][5] = 'ithreesfive';$a[4][5] = 'ifoursfive';$a[5][5] = 'ifivesfive';
$a[1][6] = 'ionessix';$a[2][6] = 'itwossix';$a[3][6] = 'ithreessix';$a[4][6] = 'ifourssix';$a[5][6] = 'ifivessix';
$a[1][7] = 'ionesseven';$a[2][7] = 'itwosseven';$a[3][7] = 'ithreesseven';$a[4][7] = 'ifoursseven';$a[5][7] = 'ifivesseven';
$a[1][8] = 'ioneseight';$a[2][8] = 'itwoseight';$a[3][8] = 'ithreeseight';$a[4][8] = 'ifourseight';$a[5][8] = 'ifiveseight';

/*$chk = mysql_query("SELECT * FROM {$a[$sem][$inter]} WHERE rollno=$rollno ");
$count = mysql_num_rows($chk);*/
include('database/config.php');

  $query = mysql_query("SELECT * FROM {$a[$inter][$sem]} as t1 INNER JOIN subb as t2 ON t1.semester=t2.semester WHERE rollno=$rollno");
$count = mysql_num_rows($query);
if($count == 1)
{
  while($row = mysql_fetch_array($query))
  {
   $result = <<< EOD
<table>
<tr><th>Subject Name </th><th>Marks</th></tr>
<tr><td>  {$row['subone']}</td><td>{$row['sone']}</td></tr>
<tr><td>{$row['subtwo']}</td><td>{$row['stwo']}</td></tr>
<tr><td>{$row['subthree']}</td><td>{$row['sthree']}</td></tr>
<tr><td>{$row['subfour']}</td><td>{$row['sfour']}</td></tr>
<tr><td>{$row['subfive']}</td><td>{$row['sfive']}</td></tr>
<tr><td>{$row['subsix']}</td><td>{$row['ssix']}</td></tr>
</table>
EOD;
echo $result;      
  } 
}
else
{
echo "<font color=red>Still Marks are not updated</font>";
}
?> 
