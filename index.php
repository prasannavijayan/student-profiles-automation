<?php
 
session_start(); 
session_destroy();

 ?>
<html><head><title>Profiles-index</title>
<!-- CSS TAGS -->
	<link type=text/css rel=stylesheet href=css/index.css >
	<link href="images/header.png" rel="SHORTCUT ICON">
	<link href="css/bootstrap.css" rel=STYLESHEET>
	<link href="css/background.css" rel=STYLESHEET>
	<link href="css/bootstrap-responsive.min.css" rel="STYLESHEET">

<!-- SCRIPT TAGS -->
	<script type=text/javascript src=js/login.js ></script>
	<script type="text/javascript" src="js/jquery.js"></script>

</head>
<body  link=green vlink=green hover=blue class=container>
<?php include('header.php');?>

<?php
$msg=$_GET['msg'];
if($msg!='') echo '<p><font color=red>' . $msg . '</font></p>';
?>

<div id=leftpanel class=pull-left>
  <div id=login_area>
     <section id=staff_login_area>		
		<?php include('plugins/staff-login.php'); ?>
      </section>

<section id=student_login_area>
<?php include('plugins/student-login.php'); ?>
</section>
</div>
<?php include('developers.php'); ?>
</div>
<div class="pull-right span7">
	<big>KLN COLLEGE OF ENGINEERING</big><br><br>
<b>Live Post's like Seminars, lectures, Conventions, symposiums and etc ,.. </b><br><br>



	<div class="container span5" >
				 <!--<div  class="boxing " style="color:#ABC;text-align:center;"></h2> </div> -->
		<?php
    //connect to the database
    include_once ('db.php'); 
    //get the function
    include_once ('function.php');

    	$page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
    	$limit = 4;
    	$startpoint = ($page * $limit) - $limit;
        
        //to make pagination
        $statement = "`tweeting` where `status` = 1";
?>			
		


<div class="boxing padds" >
        <?php
            //show records
            $query = mysql_query("SELECT * FROM {$statement} ORDER BY id DESC LIMIT {$startpoint} , {$limit} ");
            
        	while ($row = mysql_fetch_assoc($query)) {
        ?>
            <div class="record round"><?php echo "{$row['tweets']}";
		echo "<hr>";
?></div>
        <?php    
            }
        ?>
    </div>

<?php
	echo pagination($statement,$limit,$page);
?>

</div>
</div>
</div>
</div>
</body>
</html>
