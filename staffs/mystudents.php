<?php include('hme.php'); ?>
<script type=text/javascript src=js/jquery.js ></script>
<!--<script>
function show_res()
{ 
  department = $("#sdept").val();
  sex = $("#sg").val();
  year = $("#ayear").val();
  if(($.trim(department) == "Dept") || ($.trim(sex) == "Sex") || ($.trim(year) == "Year"))  {
           $(".show_error").html("Select the Fields to Sort the students");
            return false;
             }
          cred = {}
          cred['department'] = department;
          cred['sex'] = sex;
          cred['year'] = year;
            $('.show_info').html('<img src=images/ajax-loader.gif width=20 >');
          $.get("students_details_ret.php", cred, function(data) {
                 
                     $(".show_info").html(data);
                     $(".show_error").hide();
                 
  });
 

}


</script>
<div id=chome>Student Details <br>
<form action=" " method=post name="" onsubmit="return false">
Dept <select name=sdept id=sdept >
         <option>Dept</option>
         <option>IT</option>
         <option>CSE</option>
         <option>EIE</option>
         </select>
Sex <select name=sage  id=sg >
       <option>Sex</option>
       <option>Male</option>
       <option>Female</option>
        </select>
Year <select name=syear id=ayear>
         <option>Year</option>
         <?php 
          for($i=2000;$i<2050;$i++)
          echo "<option>" . $i . "</option>";
          ?>
          </select>  
<input type=submit value=Show onclick="return show_res();" class="btn btn-success" />
<div class=show_error > </div><div class=show_info> </div>
</form>-->
This Part kept remain to make something better than what actually can be done
<?php
include('database/config.php');

$query = mysql_query("SELECT * FROM staffregister WHERE rollno=$staffid");
$row = mysql_fetch_array($query);
define(name, $row['name']);
$coun = name;

$show = mysql_query("SELECT  * FROM personal_details as t1 LEFT JOIN studentregister as t2 ON t1.rollno=t2.rollno INNER JOIN schooldetails as t3 ON t2.rollno=t3.rollno  WHERE t2.counciller='$coun' ");

if(!$show)
die(mysql_error());

echo "<table class='table '>";
echo "<tr><th>Rollno</th><th>Name</th><th>Register Number</th><th>Batch</th><th>View Complete Profile</th></tr>";

while($row = mysql_fetch_array($show))
 {
	
    echo "<tr><td>";
?>

<form action='loopprofiles.php' method=POST />
<input type="hidden" name="roll" value="<?php echo $row['rollno'] ?>" /> 

<?
  echo "<input type=submit class='btn btn-primary' name=roll value=".$row['rollno']." ></td><td>".$row['fullname']."</td><td>".$row['regnumber']."</td><td>".$row['admission_year']." - ".$row['leaving_year'] . "</td><td><input type=submit class='btn btn-success' value='View Profile'></td></tr></form>";
 }
echo "</table>";

?>

</div>

