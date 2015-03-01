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
<tr><td>Fullname</td><td><input type=text name=fname /></td></tr>
<tr><td>Roll no</td><td><input type=number name=rollno id=rollno /></td></tr>
<tr><td>Age</td><td><select name=age><option>Select Age</option>
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
<tr><td>Choose your Counciler's</td><td><select name=counci ><option>Choose</option>
		<?php 
			include('database/config.php');
			$query = mysql_query("SELECT * FROM staffregister");
			while($row = mysql_fetch_array($query))
			{
				if($row['name'] != NULL)
				echo "<option>".$row['name']."</option>";
			}
		?>	

</td></tr>
<tr><td></td><td><input type=submit class="btn btn-success"></td></tr>

</table>

</form>

</div>
</body>
</html>
