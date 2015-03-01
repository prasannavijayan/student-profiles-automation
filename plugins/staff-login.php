

<script>
function validateStLogin()
{
  staffuser = $("#staffuser").val();
  staffpasswd = $("#staffpasswd").val();
  if(($.trim(staffuser) == "") || ($.trim(staffpasswd) == "")) {
          $("#staff_info").html("<font color=red>*Incorrect password and ID</font>");
          return false;
       }
   cred = {}
   cred['staffuser'] = staffuser;
   cred['staffpasswd'] = staffpasswd;
   $("#staff_info").html("<img src=ajax-loader.gif width=20>"); 
   $.post("stafflogin.php", cred, function(data) {
        if(data == "false")
             $('#staff_info').html('<font color=red>*Incorrect password and ID</font>');

          if(data == "true") {
		locref = 'http://localhost/profiles4/staffs';
             window.location.href = locref+"/home.php?="+staffuser; 
		}
	return true;
         });


}

</script>

	<h4>Staff Login</h4>
	<?php
	$councilogin=<<<EOD
	<div id=staff_info></div>
	<form name=stafflogin action=" " method=post onsubmit="return false;" />
	<table>
	<tr><td>Staff ID</td><td><input type=number id="staffuser" name=staffID placeholder="Your ID" /></td></tr> 
	<tr><td>Password</td><td><input type=password id="staffpasswd" name=staffpasswd placeholder="Your Password"/></td></tr><tr></tr>
	<tr><td></td><td><input type=submit class="btn btn-primary" value="Submit" onclick="validateStLogin();" />&nbsp;&nbsp;
	</table>
	</form>
EOD;
	echo $councilogin;
	?>
