<?php
session_start(); //start the session

if($_SESSION['rollno'] == NULL)
{  header("location:http://localhost/profiles4/index.php"); }
else
 header('Contenet-type:text/html; charset=utf-8');

define(rollno, $_SESSION['rollno']);

define(fname, $_SESSION['fullname']);

define(age, $_SESSION['age']);
define(mail, $_SESSION['emailid']);
define(counci, $_SESSION['counciller']);
define(passwd, $_SESSION['password']);
define(sex, $_SESSION['sex']);
$rollno = rollno;
?>
<html>
	<head><title>Step 2</title>
<!-- Style Css -->
		<link href=css/prehome.css rel=STYLESHEET>
		<link href=css/bootstrap.css rel=STYLESHEET >
<!--Scripts -->
		<script src="js/code.js"></script>	
		<script src=js/prehome2.js></script>

</head>
<body>
<?php include('headerprehome.php'); ?>


<section id=mine_sports>
	<div class="inside_panel">
<b><font color=red><div class=err_shows></div></font></b>
		<form action="aboutme_recorddb.php" name=step2 method=post onsubmit="return mine_sports()" >
			<table>
				<tr><td>Identification marks</td><td><textarea rows="2" cols="30" name=idm id=id_marks></textarea></td></tr>
				<tr><td>Occupation of <br>parent's/Guardian</td><td><input type="text" name=occu id=occupation></td></tr>
				<tr><td>Office address</td><td><textarea rows="2" cols="30" name=oadd id=off_add></textarea></td>
				    <td></td> <td>Pincode</td><td><input type="text" name=opin id=off_pin /></td></td></tr>
				<td></td><td>Phone</td><td><input type="text" name=ophone id=off_phone /></td>
				</tr>
				<tr><td>Person with address to be<br> contacted on emergency</td>
				    <td><textarea rows="4" cols="40" name=eadd id=emer_add ></textarea></td></tr>
				<tr><td></td>
				<td>Phone no</td>
				<td><input type="text" name=ephone id=emer_phone /></td>
				</tr>
			</table>

				<b>Extra curricular activities:</b>
				  <br>&nbsp;&nbsp;&nbsp;<b>I.NCC/NSS/Others:</b><br>
				 <textarea rows="2" cols="50" name=ncc id=nc_ns ></textarea> 
				  <br>&nbsp;&nbsp;&nbsp;<b>II.Sports:</b><br>
				 <textarea rows="2" cols="50" name=sports id=sports ></textarea> 
				  <br> <br>&nbsp;&nbsp;&nbsp;<b>III)Fine arts:</b><br>
				 <textarea rows="2" cols="50" name=arts id=arts ></textarea> <br>


<input type=submit value="submit and go" class="btn btn-primary" >
	</form>
	</div>
</section>

</body>
</html>
