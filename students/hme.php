<?php
session_start(); 

if($_SESSION['rollno'] == NULL || $_SESSION['password'] == NULL)
	header('location:http://localhost/profiles4/index.php');
define(rollno, $_SESSION['rollno']);
$rollno = rollno;



?>
<script type="text/javascript">
//<![CDATA[
/* ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
Disable context menu on images by GreenLava (BloggerSentral.com)
05
Version 1.0
06
You are free to copy and share this code but please do not remove this credit notice.
07
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ */

    function nocontext(e) {
        var clickedTag = (e==null) ? event.srcElement.tagName : e.target.tagName;
        if (clickedTag == "IMG") {
            alert(alertMsg);
            return false;
        }
    }
    var alertMsg = "Right Click on the image is disabled . ";
    document.oncontextmenu = nocontext;
//]]>
</script>


<html><head>

<!-- LINK OF CSS bootstrap.css -->
	<link href="images/header.png" rel="SHORTCUT ICON">
	<link type=text/css rel=stylesheet href=css/bootstrap.css >
	<link type=text/css rel=STYLESHEET href="css/background.css">
	<link type=text/css rel=STYLESHEET href=css/index.css>
<!-- Script Tag -->
	<script type=text/javascript src=js/home.js ></script>
	<script type=text/javascript src=js/jquery.js></script>
</head>
<body>

<?php include('links.php'); ?>

<div class=container>
   <div class=pull-right>	
	<?php include('links.html'); ?>

	<?php
	echo "<img src='display.php?rollno=$rollno'  class='image' width=150 alt=myphoto />";
	?><br><br>


	<br>
	<script src=js/det.js ></script>
	<script type="text/javascript">

	document.writeln("You are using "+BrowserDetect.browser+" "+BrowserDetect.version+" <br>on "+BrowserDetect.OS);
	</script>
	<br><br>To download Ubuntu<br><br>
	<a href="http://ubuntu.com"><img src=images/ubuntu.png width=100></a><br><br>
	The Whole Project is devoloped<br> in the Open source like PHP,<br> MYSQL, APACHE SERVER .<br>
	<a href=http://en.wikipedia.org/wiki/Open_source ><img src=images/open.gif width=100 ></a>


	</div>
	
