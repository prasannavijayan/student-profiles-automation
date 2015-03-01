
<?php
session_start(); //start the session

define(staffid, $_SESSION['staffid']);

if($_SESSION['staffid'] == NULL)
{  header("location:http://localhost/profiles4/"); }
else
 header('Content-type:text/html; charset=utf-8');

$staffid = staffid;?>

<head>
<script src=js/jj.js></script>
<script src=js/j.js></script>
<script>
function update() {


 rollo = $("#rollno").val();       

interone = $("#in1").val();

intertwo = $("#in2").val();

interthree = $("#in3").val();

interfour = $("#in4").val();

interfive = $("#in5").val();

intersix = $("#in6").val();


if ($.trim(rollo) == "Select" || $.trim(interone) ==""  || $.trim(intertwo) =="" ||  $.trim(interthree) ==""  || $.trim(interfour) =="" || $.trim(intersix)=="" || $.trim(interfive)=="") {
$("#show_error").html("<font color=red>Select the rollno or Enter the Marks</font>");
return false;

} }
</script>
</head>

<?php
include('database/config.php');
$sems = $_GET['sems'];
$internal = $_GET['internal'];
$roll = rollno;
$res =mysql_query("SELECT * FROM staffregister WHERE rollno='$staffid'");
while($row = mysql_fetch_array($res))
{ define(name, $row['name']); 
   $name = name;  }
$res1 = mysql_query("SELECT * FROM subb WHERE semester=$sems");
while($row1 = mysql_fetch_array($res1))
{
define(one,$row1['subone']);
$one = one;
define(two, $row1['subtwo']);
$two = two;
define(three, $row1['subthree']);
$three = three;
define(four, $row1['subfour']);
$four = four;
define(five, $row1['subfive']);
$five = five;
define(six, $row1['subsix']);
$six = six;

}

echo "<form action=update_inter_marks.php method=post onsubmit='return update();'>";

echo "Rollno <select name=rollno id=rollno><option>Select</option>";


$query = mysql_query("SELECT * FROM staffregister WHERE rollno=$staffid");
$row = mysql_fetch_array($query);
define(name,$row['name']);
$names = name;
$queryo = mysql_query("SELECT * FROM studentregister WHERE counciller='$names'");
while($row = mysql_fetch_array($queryo))
{
   echo "<option>".$row['rollno']."</option>";
}




echo "</select><input type=hidden name=isemester value=$sems > <input type=hidden name=iinternal value=$internal >";
     




$form = <<<EOD

<p id=show_error></p>
<table>
<tr>
<th>sl.no</th><th>subject name</th><th>Enter marks</th>

</tr>

<tr>

<td>1</td>
<td>$one</td>
<td><input type="text"  name="in1" id=in1></td>


</tr>

<tr>

<td>2</td>
<td>$two</td>
<td><input type="text"  name="in2" id=in2></td>

</tr>

<tr>

<td>3</td>
<td>$three</td>
<td><input type="text"  name="in3" id=in3></td>


</tr>

<tr>

<td>4</td>
<td>$four</td>
<td><input type="text" name="in4" id=in4></td>


</tr>

<tr>

<td>5</td>
<td>$five</td>
<td><input type="text"  name="in5" id=in5></td>


</tr>

<tr>

<td>6</td>
<td>$six</td>
<td><input type="text"  name="in6" id=in6></td>

</tr>
<tr><td></td><td></td><td><button class='btn btn-success'>Update</button></td>
</tr>
</tr></table>

</form>

EOD;
echo $form;
?>
<span class=show_msg></span>
