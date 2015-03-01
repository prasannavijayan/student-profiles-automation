<html>
<head><title>Student Registration</title>
<!-- BOOTSTRAP CSS -->
	<link rel=STYLESHEET href="css/bootstrap.css"/>
	<link rel=STYLESHEET href="css/index.css" >	
<!-- Registration Script JS -->
	<script src=js/registration.js></script>

<body class=container>
<?php include('header.php'); ?>
<div id="regis">
<h4 class=pagination-centered>Register yourself</h4><br>


<form name=registration action="register_students.php" method=post onsubmit="return regischeck()" />
<table align=center>
<tr><td>Name</td><td><input type=text name=fname /></td></tr>
<tr><td>Staff ID</td><td><input type=number name=rollno id=rollno /></td></tr>
<tr><td>D.O.B</td><td><select name=age><option>Select Age</option>
<script>
for (i=16;i<=24;i++)
document.write("<option>"+i+"</option>"); 
</script></select>
<tr><td>Sex</td><td><select name=sex ><option>Sex</option><option>Male</option><option>Female</option></select></td></tr>





 </select></td></tr>
<tr><td>Password</td><td><input type=password name=passwd onkeyup="checker(this.value)"></td><td><div id=ch ><div></div></div></td>
</tr>
<tr><td>Confirm Password</td><td><input type=password name=cpasswd ></td></tr>

<tr><td>Email-ID</td><td><input type=text name=email ></td></tr>
<tr><td>Experience</td><td><input type=number name=experience ></td></tr>
<tr><td>Position</td><td><input type=posi
<tr><td></td><td><input type=submit class="btn btn-success"></td></tr>

</table>

</form>

</div>
</body>
</html>
