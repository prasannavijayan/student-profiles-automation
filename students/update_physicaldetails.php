<?php include 'hme.php '; ?>
<link rel=STYLESHEET href=css/bootstrap.css />
<?php
session_start(); //start the session

define(name, $_SESSION['rollno']);
$roll = name;

update();
function update () {

include('database/config.php');

$update = mysql_query("UPDATE personal_details SET height='$_POST[hei]',weight='$_POST[wei]'");

$update2 = mysql_query("UPDATE aboutme SET identification_marks = '$_POST[idm]'");




header("location:profile.php?msg=Information Updated ");
echo "<a class='btn btn-primary' href='profile.php'>Go Back </a>";
}
?>
