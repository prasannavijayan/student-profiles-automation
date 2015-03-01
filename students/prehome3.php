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
?><html>
	<head><title>Step 3</title>
<!-- Style Css -->
		<link href=css/bootstrap.css rel=STYLESHEET>
		

<!--Scripts -->
		<script src="js/code.js"></script>	
		<script src=js/prehome3.js></script>

</head>
<body class=container>

<?php include('headerprehome.php'); ?>

<section id=school_details>
	<div class="inside_panel"><b><font color=red><div class=err_shows></div></font></b>
	<p class=blue>	Last Studied Institution Details.</p><hr>
	<form action="schooldetails_recorddb.php" method="post" onsubmit="return school_details() ">
				<table width="50%" >
				<tr><th>SI.No.</th><th>Standard</th><th>Month and year </th><th>Name of the Institution</th><th> % of marks obtained</th>
				<tr><td>1.</td>
				<td><input type=text value=10th size=25 name=std readonly=readonly></td>
				<td><input type="text" size="25" name=may id=may /></td>
				<td><input type="text" size="25" name=nas id=nas ></td>
				<td><input type=text size="25" name=pm id=pm></td></tr>
			

				<tr><td>2.</td>
				<td><input type="text" size="25" value=12th name=std2 readonly=readonly></td>
				<td><input type="text" size="25" name=may2 id=may2/></td>
				<td><input type="text" size="25" name=nas2 id=nas2></td>
				<td><input type="text" size="25" name=pm2 id=pm2></td></tr></tr>


				<tr id=diplomo><td>3.</td>
				<td><input type="text" size="25" name=std3  ></td>
				<td><input type="text" size="25" name=may3 /></td>
				<td><input type="text" size="25" name=nas3 ></td>
				<td><input type="text" size="25" name=pm3></td>
				</tr><!--<input type=checkbox name=enable id=enable> <button onclick=checkb()>Submit</button>Enable if you did Diplomo course -->
		</table><br><br><table>		
<tr><td>+2 Marks-</td>  
				   <td>Maths</td><td><input type="text" name=mat size="5" id=mat>/out of 200</td></tr> 
			  <tr><td></td><td>Physics</td><td><input type="text" name=phy size="5" id=phy >/out of 200</td></tr>
			  <tr><td></td><td>Chemistry</td><td><input type="text" name=che size="5" id=che>/out of 200</td></tr>
				   <!--  <td>Total(for 200)<td></td><input type="textbox" name="total" size="5"/>(M/2+P/4+C/4)</td>
				     <td>GQ/MQ<td></td><input type="textbox" name="GM" size="5"/></td> -->
			  <tr><td></td><td>Total marks</td><td><input type="text" name=tm size="5" id=tm />/out of 1200</td></tr></table>

<input type=submit value="submit and go" class="btn btn-primary">
	</form>
	</div>
</section>

</body>
</html>
