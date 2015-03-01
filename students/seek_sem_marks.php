
<?php
session_start(); //start the session

define(name, $_SESSION['rollno']);
 
include('database/config.php');

$rollno = name;

$sem = $_POST['semester'];

$sem2 = $_POST['semes'];

$a[1] = 'semesterone';

$a[2] = 'semestertwo';

$a[3] = 'semesterthree';

$a[4] = 'semesterfour';

$a[5] = 'semesterfive';

$a[6] = 'semestersix';

$a[7] = 'semesterseven';

$a[8] = 'semestereight';


if($sem > $sem2)
echo "<p class=red > Select the Semester Wisely</p>";

else 
{
while($sem <= $sem2)
{

$request = mysql_query("SELECT * FROM {$a[$sem]}  as t1 INNER JOIN subb as t2 ON t1.semester=t2.semester WHERE t1.rollno='$rollno'");  

$count = mysql_num_rows($request);

if($count == 1)
{
echo "<p class='breadcrumb span8' > Semester - ". $sem ."</p> ";
while($row = mysql_fetch_array($request))
{
$result =  <<<EOD
<table class='span8'>
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
echo "<tr><td>{$row[ninecode]}</td><td>{$row['subnine']}</td><td>{$row['lthree']}</td></tr>";

echo "</table>";
}
}
$sem = $sem + 1;
}
}

?>
