<?php
$srollno = $_POST['staffuser'];
$spasswd = $_POST['staffpasswd'];

$msg='';


    ob_start();
	$connect = mysqli_connect("localhost","root","root","profiles");
    $stafrollno  = stripslashes($srollno );
    $stafpasswd = stripslashes($spasswd);
    $stafrollno  = mysqli_real_escape_string($connect,$stafrollno );
    $stafpasswd = mysqli_real_escape_string($connect,$stafpasswd);
    $login = "SELECT * FROM staffregister WHERE rollno='$stafrollno'  AND password='$stafpasswd' ";
    $result = mysqli_query($connect, $login); // Mysql_num_row is Counting table row
    $count = mysqli_num_rows($result); // if it matches it counts to be one . 1 . 
   if($count==1)
   {
   session_start();
   $_SESSION['staffid'] = $stafrollno;
	$_SESSION["password"] = $stafpasswd;
   echo "true";
   }
   else
   {
    echo "false";
   }
    ob_end_flush();
    
?>
