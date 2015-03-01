<?php
session_start(); //start the session

define(name, $_SESSION['rollno']);
$roll = name;

/*$update = "UPDATE studentprofile SET pname='$_POST[pname]', raddress='$_POST[radd]',rpincode=$_POST[rpin],rphone='$_POST[rphone]',stuemail='$_POST[remail]'";
header("location:profile.php?msg=Successfully Done");




if(!mysql_query($update, $connect))
echo "Oops" . mysql_error();

*/

updatepersonal_recorddb();

function updatepersonal_recorddb() {

	include('database/config.php');
	$query = "UPDATE personal_details SET parents_name='$_POST[pname]', resident_address='$_POST[radd]',pincode=$_POST[rpin],phoneno='$_POST[rphone]',emailid='$_POST[remail]'";


if(!mysql_query($query, $connect))
echo "Oops" . mysql_error();

header("location:profile.php?msg=Information Updated ");

}
?>
