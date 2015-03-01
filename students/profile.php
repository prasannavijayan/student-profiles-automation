<?php include('hme.php'); ?>

<html>
<head> <title>Profiles- profiles</title>
<link href="images/header.png" rel="SHORTCUT ICON">
<link href="css/prof.css" rel="STYLESHEET" >

<script type=text/javascript  src="js/jj.js"></script>
<script>
$(document).ready(function()
{
  $("#detupdate").hide();
  $("#phyupdate").hide();
  $("#markupdate").hide();
  $("#schoolupdate").hide();
 
 $(".detupdate").click(function()
{
   $("#detview").slideUp();
 $("#detupdate").slideDown();
 
});
 $(".detclose").click(function()
{
  $("#detview").slideDown();
  $("#detupdate").slideUp();
});
 $(".phyupdate").click(function()
{
  $("#phyview").slideUp();
  $("#phyupdate").slideDown();
});
  $(".phyclose").click(function()
{
  $("#phyview").slideDown();
  $("#phyupdate").slideUp();
});


});

</script>

</head>
<body>
<div class="pers_info pull-left">


You are
<?php

include('database/config.php');

$show = mysql_query("SELECT * FROM studentregister WHERE rollno='$rollno'");

while($row = mysql_fetch_array($show))
   {
    if ($row['sex']=='Male')
       echo "Mr.";
      else
       echo "Ms.";
      echo $row['fullname']." ". "(".$row['rollno'].")";  
define(sname, $row['fullname']);   
define(sex, $row['sex']);
    }

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
			
?><br><br>
<pd>Your Details&nbsp;<a href="#!" class=detupdate><img src=images/edit.png width=20></a> </pd>
<br><div class=studetails><div id=detview>
<table>
<tr><td><h class=head >Name  </h></td><td> <?php echo sname; ?></td></tr>
<tr><td><h class=head>Parent's Name </h></td><td>  <?php echo pname; ?></td></tr>
<tr><td><h class=head>Sex </h></td><td><?php echo sex; ?></td></tr>
<tr><td><h class=head>DOB </h> </td><td> <?php echo dob; ?></td></tr>
<tr><td><h class=head>Residential Address</h> </td><td> <?php echo radd; ?></td></tr>
<tr><td><h class=head>Pincode</h></td><td><?php echo rpin; ?></td></tr>
<tr><td><h class=head>Phone No</h></td><td><?php echo rphone;?></td></tr>
<tr><td><h class=head>Email-ID</h></td><td><?php echo remail; ?></td></tr>
</table></div>
<div id=detupdate>
<form action="updatepersonal_recorddb.php" method=post />
<table>
<tr><td><h class=head >Name  </h></td><td><?php echo sname;?> </td></tr>
<tr><td><h class=head>Parent's Name </h></td><td> <input type=text name=pname value="<?php echo pname; ?>" /></td></tr>
<tr><td><h class=head>Sex </h></td><td><?php echo sex; ?></td></tr>
<tr><td><h class=head>DOB </h> </td><td><?php echo dob; ?></td></tr>
<tr><td><h class=head>Residential Address</h> </td><td><input type=text name=radd value="<?php echo radd; ?>" /></td></tr>
<tr><td><h class=head>Pincode</h></td><td><input type=text name=rpin value="<?php echo rpin; ?>" /></td></tr>
<tr><td><h class=head>Phone No</h></td><td><input type=text name=rphone value="<?php echo rphone;?>" /></td></tr>
<tr><td><h class=head>Email-ID</h></td><td><input type=text name=remail value="<?php echo remail; ?>"/></td></tr>
<tr><td></td><td><input type=submit value=Save class="btn btn-success " /><span class=span2></span><input type=button value=Cancel  class="detclose btn btn-inverse" ></td></tr>
</table>
</form>
</div>
<hr>





<pd>Physical Details</pd>&nbsp;<a href="#@#" class=phyupdate><img src=images/edit.png width=20></a><br>
<div id=phyview >

<table>
<tr><td><h class=head>Height </h></td><td><?php echo h." cms"; ?></td></tr>
<tr><td><h class=head>Weight</h></td><td><?php echo w . " Kgs"; ?></td></tr>
<tr><td><h class=head>Blood Group</h></td><td><?php echo blood; ?></td></tr>
<tr><td><h class=head>identification Mark</h></td><td><?php echo idm; ?></td> </tr>
</table>
</div>
<div id=phyupdate >
<form action=update_physicaldetails.php method=post>
<table>
<tr><td><h class=head>Height </h></td><td><input type=text name=hei value="<?php echo h.' cms'; ?>" /></td></tr>
<tr><td><h class=head>Weight</h></td><td><input type=text name=wei value="<?php echo w . ' Kgs'; ?>" /></td></tr>
<tr><td><h class=head>Blood Group</h></td><td><?php echo blood; ?></td></tr>
<tr><td><h class=head>identification Mark</h></td><td><input type=text name=idm value="<?php echo idm; ?>" /></td> </tr>
<tr><td></td><td><input type=submit Value=Save onclick=test()><input type=button value=Cancel class=phyclose />
</table></form></div><hr>






<pd>12 Mark</pd><br>
<div id=markview >
<table>
<tr><td><h class=head>Maths</h></td><td> <?php echo maths; ?>/200</td></tr>
<tr><td><h class=head>Physics</h></td><td><?php echo physics; ?>/200</td></tr>
<tr><td><h class=head>Chemistry</h></td><td><?php echo chemistry; ?>/200</td></tr>
<tr><td><h class=head>Your Cutoff </h></td><td><?php echo cutoff; ?>/200</td></tr>
<tr><td><h class=head>Total</h></td><td><?php echo total; ?>/1200</td></tr>
</table>
</div>

<hr>











<pd>School Details</pd><br>
<div id=schoolview>
<table>
<tr><td><h class=head>10th std</td><td><?php echo tenschool; ?> Finished in Month <?php echo tenfini; ?> With the Average of <?php echo tenpm; ?>
</td></tr>
<tr><td>
<?php

include("database/dbc.php");
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





</div>
</body>
</html>
