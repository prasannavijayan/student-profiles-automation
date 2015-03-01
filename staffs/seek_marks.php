
<?php
session_start(); //start the session

define(staffid, $_SESSION['staffid']);

if($_SESSION['staffid'] == NULL)
{  header("location:http://localhost/profiles4/"); }
else
 header('Content-type:text/html; charset=utf-8');





 
include('database/config.php');

$rollno = $_POST['rollno'];

$sem = $_POST['semester'];

$a[1] = 'semesterone';

$a[2] = 'semestertwo';

$a[3] = 'semesterthree';

$a[4] = 'semesterfour';

$a[5] = 'semesterfive';

$a[6] = 'semestersix';

$a[7] = 'semesterseven';

$a[8] = 'semestereight';

$request = mysql_query("SELECT * FROM {$a[$sem]}  as t1 INNER JOIN subb as t2 ON t1.semester=t2.semester WHERE t1.rollno='$rollno'");  


while($row = mysql_fetch_array($request))
{
$result =  <<<EOD
<table>
<tr><th>Subject Code</th><th>Subject Title</th><th>Grade Obtained</th></tr>
<tr><td>{$row[onecode]}</td><td>{$row['subone']}</td><td>{$row['sone']}</td></tr>
<tr><td>{$row[twocode]}</td><td>{$row['subtwo']}</td><td>{$row['stwo']}</td></tr>
<tr><td>{$row[threecode]}</td><td>{$row['subthree']}</td><td>{$row['sthree']}</td></tr>
<tr><td>{$row[fourcode]}</td><td>{$row['subfour']}</td><td>{$row['sfour']}</td></tr>
<tr><td>{$row[fivecode]}</td><td>{$row['subfive']}</td><td>{$row['sfive']}</td></tr>
<tr><td>{$row[sixcode]}</td><td>{$row['subsix']}</td><td>{$row['ssix']}</td></tr>
<tr><td>{$row[sevencode]}</td><td>{$row['subseven']}</td><td>{$row['lone']}</td></tr>
<tr><td>{$row[eightcode]}</td><td>{$row['subeight']}</td><td>{$row['ltwo']}</td></tr>
EOD;
echo $result;
if ($row['subnine'] != NULL)
{
echo "<tr><td>{$row[ninecode]}</td><td>{$row['subnine']}</td><td>{$row['lthree']}</td></tr></table>";
}

}

?>
