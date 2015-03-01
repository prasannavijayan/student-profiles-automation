<?php include('hme.php'); ?>
<html>
<head>
<script type=text/javascript src="js/chpass.js" ></script>
<script type=text/javascript src="js.jjj.js" ></script>

<script>

  




</script>
</head>
<body>

<div id=change_passwd>
<p class=ch>Change your Password here . . . . . .<p>
<?php 
$changepass = <<<EOD
<form name=chpass action="change_password_db.php" method=post  onsubmit="return passcheck();"/><div id=show_error></div>
<table>
<tr><td>Old-Password</td><td><input type=password name=oldpasswd id=old /></td></tr>
<tr><td>New-Password</td><td><input type=password name=newpasswd  id=new  /></td></tr>
<tr><td>Retype-Password</td><td><input type=password name=rtnpasswd id=rnew /></td></tr>
<tr><td></td><td><input type=submit class="btn btn-primary" value="Change Password" width=80 onclick="return vali();" /></td>
</table>
</form>
EOD;
$msg=$_GET['msg'];
if($msg!='') echo '<p>' . $msg . '</p>';

echo $changepass ;
?>
</div>
</body>
</html>
