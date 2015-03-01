<?php
session_start(); //start the session

if($_SESSION['rollno'] == NULL)
{  header("location:http://localhost/profiles4/index.php"); }
else
 header('Contenet-type:text/html; charset=utf-8');


define(fname, $_SESSION['fullname']);
define(rollno, $_SESSION['rollno']);

define(age, $_SESSION['age']);
define(mail, $_SESSION['emailid']);
define(counci, $_SESSION['counciller']);
define(passwd, $_SESSION['password']);
define(sex, $_SESSION['sex']);
$rollno = rollno;
?>

<html>
	<head><title>Step 1</title>
<!-- Style Css -->
		<link rel=STYLESHEET href="css/prehome.css">
		<link href="css/bootstrap.css" rel=STYLESHEET >

<!--Scripts -->
		<script src="js/code.js"></script>	
		<script src=js/prehome1.js></script>

</head><?php include('headerprehome.php'); ?>
<body>



<section id=personal_details class=container>
		<div class=inside_panel >
	
			<h3>Enter Your Information</h3><b><div id=err_shows></div></b>
			<form name=profile method=post action="personal_recorddb.php" onsubmit="return personal_det()" />
			<table border=0 class=awe>

			<tr><td>Parent's/Guardian name </td><td><input type=text name=pname id=pname /></td><td></td></tr>
			<tr><td>Anna university reg no </td><td><input type="text" name="regnumber" id=regnumber /></td></tr>
			<tr><td>Course</td><td><select name=course id=course />	<option>I am doing</option>
																       	<option>B.Tech</option>
																	<option>B.E</option>
																	<option>M.C.A</option>
																	<option>M.B.A</option>	
																	<option>M.E</option></select></td>
			<td>Dept</td><td><select name=dept id=dept /> <option>I am doing</option>
														     <option>IT</option>
														<option>CSE</option>
														<option>ECE</option>
														<option>EEE</option>
														<option>EIE</option>
														<option>MECH</option>
														<option>AUTO</option></select></td></tr>
			<tr><td>Address</td><td><textarea rows="5" cols="25" name="raddress" id=raddress></textarea></tr>
			<tr><td></td><td>Pincode </td> <td><input type="text" name="rpincode" id=pincode /></td></tr>
			<tr><td></td><td>phone no </td> <td><input type="text" name="rphoneno" id=rphoneno /></td></tr>
			<tr><td></td><td>E-mail Id</td> <td><input type="text" name="yemailid" id=pemailid /></td></tr>
			<tr><td>Date of birth:</td><td><select name=date id=date><option>DD</option>
					     <?php
				 	     for ($i=1;$i<=31;$i++)
			 		     echo "<option>".$i."</option>";s 
			 		     ?>
					    </select>
					    <select name=month id=month><option>MM</option>
					     <?php
			    		     for ($i=1;$i<=12;$i++)
					     echo "<option>".$i."</option>";s 
					     ?>
					    </select>
					    <select name=year id=year><option>YYYY</option>
					     <?php
					     for ($i=1990;$i<=2012;$i++)
					     echo "<option>".$i."</option>";s 
					     ?>
					    </select>
			</td>
			</tr>


			<tr><td>Sex</td><td><select name=sex id=sex><option>I am </option><option>Male</option><option>Female</option>
<option>Other</option></select></td></tr>
			<tr><td>Year of admission:</td><td>
			 			  </select><select name=ayear id=ayear><option>YYYY</option>
						  <?php
						  for ($i=1990;$i<=2025;$i++)
						  echo "<option>".$i."</option>";s 
						  ?>
						  </select>
			   </td></tr>
			<tr>
			   <td>Year of leaving:</td><td>
						  <select name=lyear id=lyear><option>YYYY</option>
						  <?php
						  for ($i=1994;$i<=2025;$i++)
						  echo "<option>".$i."</option>";s 
						  ?>
						  </select>
			   </td>
			</tr>
		<tr><td><p class=blue>Body Details</p></td><td>Height</td><td><input type="text" name="high" id=high size="5"/>cms</td></tr>
		<tr><td></td><td>Weight</td><td><input type="text" name="weight" size="5" id=weight />kgs</td></tr>   
		<tr><td></td><td>blood</td><td><select name=type id=bloodtype >
										<option>I have</option>
										<option>A+ve</option>
										<option>A-ve</option>
										<option>B+ve</option>
										<option>B-ve</option>
										<option>O+ve</option>
										<option>O-ve</option>
										<option>AB+ve</option>
										<option>AB-ve</option></section></td><td></tr>	<tr></td><input type=submit value="submit and go"  class="btn btn-success"></td></tr>
			</table>

</form>
		</div>
	</section>

</body>
</html>
