
<?php
$dept = $_GET['department'];
$sex = $_GET['sex'];
$year = $_GET['year'];

include('database/config.php');

$show = mysql_query("SELECT DISTINCT * FROM personal_details as t1 INNER JOIN studentregister as t2 ON t1.rollno=t2.rollno INNER JOIN schooldetails as t3 ON t2.rollno=t3.rollno  WHERE dept='$dept' AND sex='$sex' AND admission_year='$year' ORDER BY t2.rollno ", $connect);
if(!show)
mysql_error();

echo "<table>";
echo "<tr><th>Rollno</th><th>Name</th><th>Register Number</th></tr>";
while($row = mysql_fetch_array($show))
 {
    echo "<tr><td>";
    echo $row['rollno']."</td><td>".$row['fullname']."</td><td>".$row['regnumber']."</td></tr>";
 }
echo "</table>";


?>


