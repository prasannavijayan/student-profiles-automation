<script>
function validateLogin() {
     username = $('#srollno').val();
     passwd = $('#spasswd').val();
     if(($.trim(username) == "") || ($.trim(passwd) == "")){
         $('#user_info').html("<font color=red>*Incorrect password and ID</font>");
         return false;
     }
     cre = {}
     cre['username'] = username;
     cre['passwd'] = passwd;
     $('#user_info').html('<img src=ajax-loader.gif width=20 >');

     $.post("stulogin.php", cre, function(data){ 
	
	if(data == "false")
             $('#user_info').html('<font color=red>*Incorrect password and ID</font>');

          if(data == "true") {
		locref = 'http://localhost/profiles4/students';
             window.location.href = locref+"/home.php?="+username; 

         }
         
          return true;
     });
}



</script>

	<h4>Student Login</h4>

<?php
$student_login = <<<EOD
<div id="user_info"></div>
<form name=studentlogin action=" " method=post onsubmit="return false"/>
<table>
<tr><td>Rollno</td><td><input type=number  id=srollno placeholder="Your Rollno" name="stu_rollno" /></td></tr>
<tr><td>Password</td><td><input type=password placeholder="Your Password" name=stu_passwd id=spasswd /></td></tr>
<tr><td></td><td><input type=submit value=submit class="btn btn-primary" onclick="return validateLogin();" width=70 />&nbsp;&nbsp;<cite><a href="students/student_registration.php">Registration</a></cite></td></tr>
</table>
</form>


EOD;

echo $student_login;
?>

