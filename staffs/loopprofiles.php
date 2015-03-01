
<html>
<head><title>Complete Student Information</title>
	<link rel=STYLESHEET href="css/tabs_staffs.css">
	<link rel=STYLESHEET href=css/bootstrap.css>

	<!-- Script -->
		<script src=js/jquery.js ></script>
		<script type=text/javascript  src="js/jj.js"></script>
</head>
<body>
<div class="navbar-fixed-top navbar ">
  <div class="navbar-inner">
    <div class="container">

	
		   <a class="brand" href="home.php">PROFILES</a>
				<ul class="nav nav-pills">

<li><a class=icon href="mystudents.php">Students Profiles</a></li>



</div>
</div>
</div>
<script>
$(document).ready(function() {
	$("#other_details").hide();

	$("#show_details").click(function() {
		$("#other_details").slideDown();


	});

	$("#hide_details").click(function() {
		$("#other_details").hide()
	});
	});



</script>
<script>
function printt()
{
	window.print();
}

</script>


<br><br><br>
<div class='container'>
<?php
$rollno = $_POST['roll'];
echo "<h2>".$rollno;

include('database/config.php');

$show = mysql_query("SELECT * FROM studentregister WHERE rollno='$rollno'");

while($row = mysql_fetch_array($show))
   {
define(sname, $row['fullname']);   
echo sname;
echo "</h2>";
define(sex, $row['sex']);
    }

echo "<img src='display.php?rollno=$rollno'  width=150 class=pull-right >";echo "<br><br>";
$show1 = mysql_query("SELECT * FROM personal_details WHERE rollno='$rollno'");

while($row1 = mysql_fetch_array($show1))
{

define(pname, $row1['parents_name']);
define(regno, $row1['regnumber']);
define(radd, $row1['resident_address']);
define(rpin, $row1['pincode']);
define(rphone, $row1['phoneno']);
define(remail, $row1['emailid']);
define(dob, $row1['DOB']);

define(yod, $row1['yearofadmin']);
define(yol, $row1['yearofleave']);
define(h, $row1['height']);
define(w, $row1['weight']);
define(blood , $row1['blood']);

define(occ, $row1['occupation']);
define(oadd, $row1['officeadd']);
  
}

$show2 = mysql_query("SELECT * FROM schooldetails WHERE rollno='$rollno'");

while($row2 = mysql_fetch_array($show2))
{
define(maths, $row2['maths']);
define(physics, $row2['physics']);
define(chemistry, $row2['chemistry']);
define(cutoff, $row2['cutoff']);
define(total, $row2['total']);
define(tenschool, $row2['noiten']);
define(tenfini, $row2['mayten']);
define(tenpm, $row2['pmten']);
}

$show3 = mysql_query("SELECT * FROM aboutme WHERE rollno='$rollno'");


while($row3 = mysql_fetch_array($show3))
{
define(eca, $row3['ncc_nss']);
define(sports, $row3['sports']);
define(arts, $row3['fine_arts']);
define(idm, $row3['identification_marks']);
}
			
?>
<button class="btn btn-primary" id="show_details">Show Other Details</button>&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-success" onclick=printt() >Print</button><br><br>
<h3><pd ><?php echo $roll; ?>Details</pd></h3>
<br><div class=studetails><div id=detview>
<table class=table>
<tr><td><h class=head >Name  </h></td><td> <?php echo sname; ?></td></tr>
<tr><td><h class=head>Parent's Name </h></td><td>  <?php echo pname; ?></td></tr>
<tr><td><h class=head>Sex </h></td><td><?php echo sex; ?></td></tr>
<tr><td><h class=head>DOB </h> </td><td> <?php echo dob; ?></td></tr>
<tr><td><h class=head>Residential Address</h> </td><td> <?php echo radd; ?></td></tr>
<tr><td><h class=head>Pincode</h></td><td><?php echo rpin; ?></td></tr>
<tr><td><h class=head>Phone No</h></td><td><?php echo rphone;?></td></tr>
<tr><td><h class=head>Email-ID</h></td><td><?php echo remail; ?></td></tr>
</table>
</div>
<hr>



<div class="" id="other_details" >

<h3><pd>Physical Details</pd></h3><br>
<div id=phyview >

<table class=table>
<tr><td><h class=head>Height </h></td><td><?php echo h." cms"; ?></td></tr>
<tr><td><h class=head>Weight</h></td><td><?php echo w . " Kgs"; ?></td></tr>
<tr><td><h class=head>Blood Group</h></td><td><?php echo blood; ?></td></tr>
<tr><td><h class=head>identification Mark</h></td><td><?php echo idm; ?></td> </tr>
</table>
</div>
<hr>






<h3><pd>12<sup>th</sup> Mark</pd></h3><br>
<div id=markview >
<table class=table>
<tr><td><h class=head>Maths</h></td><td> <?php echo maths; ?>/200</td></tr>
<tr><td><h class=head>Physics</h></td><td><?php echo physics; ?>/200</td></tr>
<tr><td><h class=head>Chemistry</h></td><td><?php echo chemistry; ?>/200</td></tr>
<tr><td><h class=head>Your Cutoff </h></td><td><?php echo cutoff; ?>/200</td></tr>
<tr><td><h class=head>Total</h></td><td><?php echo total; ?>/1200</td></tr>
</table>
</div>

<hr>











<h3><pd>School Details</pd></h3><br>
<div id=schoolview>
<table class=table>
<tr><td><h class=head>10th std</td><td><?php echo tenschool; ?> Finished in Month <?php echo tenfini; ?> With the Average of <?php echo tenpm; ?>
</td></tr>
<tr><td>
<?php


$show4 = mysql_query("SELECT * FROM schooldetails WHERE rollno='$name'");

while($row4 = mysql_fetch_array($show4))
{
if($row4['degree'] == NULL )
{
echo "<p class=head>12th std</p></td><td>" . $row4['noitwel'] . " Finished in Month " . $row4['noitwel'] . " With the Average of " .$row4['pmtwel']."</td>" ; 
}
else if($row4['std2'] == NULL)
{
 echo "<p class=head>12th std</p></td><td>" . $row4['noidip'] . " Finished in Month " . $row4['noidip'] . " With the Average of " .$row4['pmdip']."</td>" ; 
}
else
{
echo "<p class=head>12th std</p></td><td>" . $row4['noitwel'] . " Finished in Month " . $row4['noitwel'] . " With the Average of " .$row4['pmtwel']."</td></tr>" ; 
 echo "<tr><td><p class=head>12th std</p></td><td>" . $row4['noidip'] . " Finished in Month " . $row4['noidip'] . " With the Average of " .$row4['pmdip']."</td>" ;
}
} ?></tr>
<tr><td><h class=head>E.C.A</td><td><?php echo eca; ?></td></tr>
<tr><td><h class=head>Sports</td><td><?php echo sports; ?></td></tr>
<tr><td><h class=head>Arts</td><td><?php echo arts; ?></td></tr>
</table>
</div>
<button class='btn btn-primary' id='hide_details'>Hide Other Details</button>
</div>
<h3>Mark Details</h3><br>
<?php



$sem = 1;

$a[1] = 'semesterone';

$a[2] = 'semestertwo';

$a[3] = 'semesterthree';

$a[4] = 'semesterfour';

$a[5] = 'semesterfive';

$a[6] = 'semestersix';

$a[7] = 'semesterseven';

$a[8] = 'semestereight';

while($sem < 9)
{
	
$request = mysql_query("SELECT * FROM {$a[$sem]}  as t1 INNER JOIN subb as t2 ON t1.semester=t2.semester WHERE t1.rollno='$rollno'");  

# counting the mysql num rows to check whether the data is present 
# count will be 1 when one query executed

$count = mysql_num_rows($request);

if($count == 1)		# checking whether the COUNT == 1 if not it prints, Marks are not Updated .
{
while($row = mysql_fetch_array($request))
{
echo "<br><a class='breadcrumb h1'>Semester ". $sem ." ></a>";
echo "<table class=table>";
echo "<tr><th>Subject Code</th><th>Subject Title</th><th>Grade Obtained</th></tr>";
echo "<tr><td>{$row[onecode]}</td><td>{$row['subone']}</td><td>{$row['sone']}</td></tr>";
echo "<tr><td>{$row[twocode]}</td><td>{$row['subtwo']}</td><td>{$row['stwo']}</td></tr>";
if($row['subthree'] != NULL)
echo "<tr><td>{$row[threecode]}</td><td>{$row['subthree']}</td><td>{$row['sthree']}</td></tr>";

if($row['subfour'] != NULL)
echo "<tr><td>{$row[fourcode]}</td><td>{$row['subfour']}</td><td>{$row['sfour']}</td></tr>";

if($row['subfive'] != NULL)
echo "<tr><td>{$row[fivecode]}</td><td>{$row['subfive']}</td><td>{$row['sfive']}</td></tr>";

if($row['subsix'] != NULL)
echo "<tr><td>{$row[sixcode]}</td><td>{$row['subsix']}</td><td>{$row['ssix']}</td></tr>";

if($row['subseven'] != NULL)
echo "<tr><td>{$row[sevencode]}</td><td>{$row['subseven']}</td><td>{$row['lone']}</td></tr>";

if($row['subeight'] != NULL)
echo "<tr><td>{$row[eightcode]}</td><td>{$row['subeight']}</td><td>{$row['ltwo']}</td></tr>";

if ($row['subnine'] != NULL)
echo "<tr><td>{$row[ninecode]}</td><td>{$row['subnine']}</td><td>{$row['lthree']}</td></tr>";

}
}
$sem = $sem + 1;
echo "</table>";

}

?>

