<?php include('hme.php'); ?>
<head>
<style>



</style>


</head>


<script>
function next_sem()
{
semester=$("#semester").val();
cred = {}
cred['semester'] = semester;
$.post("next_sem.php",cred,function(data) {
     
            $("#semester_marks_up").html(data);
}); 
 
}


</script>

<script>

function update() {
sem1 = $("#sem1").val();
sem2 = $("#sem2").val();
sem3 = $("#sem3").val();
sem4 = $("#sem4").val();
sem5 = $("#sem5").val();
sem6 = $("#sem6").val();
sem7 = $("#sem7").val();
sem8 = $("#sem8").val();
sem8 = $("#sem9").val();

if($.trim(sem1) == "Grade"|| $.trim(sem2) == "Grade" || $.trim(sem3) == "Grade" || $.trim(sem4) == "Grade" || $.trim(sem5) == "Grade" || $.trim(sem6) == "Grade" || $.trim(sem7) == "Grade" || $.trim(sem8) == "Grade" || $.trim(sem9) == "Grade") {   $("#show_error").html("<font color=red>select the rollno"); return false; }

}
</script>

<body class=container>
<div class="semester_mark">
Semester <select id=semester name=semester>
					<option>1</option>
                   		         <option>2</option>
					<option>3</option>
					<option>4</option> 
					<option>5</option>
					<option>6</option>
					<option>7</option>		
					<option>8</option>	</select> <button onclick=next_sem() class="btn btn-primary" > Show</button>
<form action=update_sem_marks.php method=post onsubmit=" return update();">
<p id=littlescript><input type=hidden name=semester value=1></p><in id=show_error></in>
<?php
$msg=$_GET['msg'];
if($msg!='') echo '<p><font color=red>' . $msg . '</font></p>';
?><br>
Rollno <select name=rollno><option>Select</option>
<?php
include('database/config.php');
$staffid = staffid;
$query = mysql_query("SELECT * FROM staffregister WHERE rollno=$staffid");
$row = mysql_fetch_array($query);
define(name,$row['name']);
$name = name;
$queryo = mysql_query("SELECT * FROM studentregister WHERE counciller='$name'");
while($row = mysql_fetch_array($queryo))
{
   echo "<option>".$row['rollno']."</option>";
}

?>
</select>

<div id=semester_marks_up>
<!--<table><tr>
<th>sl.no</th><th>subject name</th><th>Enter Grade</th>

</tr>

<tr>

<td>1</td>
<td>Technical English 1</td>
<td><select id="sem1" name="sem1"><option>Grade</option><option>S</option><option>A</option>
                   		        <option>B</option>
					<option>C</option>
					<option>D</option> 
					<option>E</option>
					<option>RA</option></select> </td>


</tr>

<tr>

<td>2</td>
<td>Mathematics 1</td>
<td><select id="sem2" name="sem2"><option>Grade</option>					<option>S</option><option>A</option>
                   		        <option>B</option>
					<option>C</option>
					<option>D</option> 
					<option>E</option>
					<option>RA</option></select> </td>

</tr>

<tr>

<td>3</td>
<td>Engineering Physics 1</td>
<td><select id="sem3" name="sem3">	<option>Grade</option>				<option>S</option><option>A</option>
                   		        <option>B</option>
					<option>C</option>
					<option>D</option> 
					<option>E</option>
					<option>RA</option></select> </td>


</tr>

<tr>

<td>4</td>
<td>Engineering Chemistry 1</td>
<td><select id="sem4" name="sem4">		<option>Grade</option>			<option>S</option><option>A</option>
                   		        <option>B</option>
					<option>C</option>
					<option>D</option> 
					<option>E</option>
					<option>RA</option></select> </td>


</tr>

<tr>

<td>5</td>
<td>Engineering Graphics</td>
<td><select id="sem5" name="sem5">			<option>Grade</option>		<option>S</option><option>A</option>
                   		        <option>B</option>
					<option>C</option>
					<option>D</option> 
					<option>E</option>
					<option>RA</option></select> </td>


</tr>

<tr>

<td>6</td>
<td>Fundamentals Of Computing</td>
<td><select id="sem6" name="sem6">			<option>Grade</option>		<option>S</option><option>A</option>
                   		        <option>B</option>
					<option>C</option>
					<option>D</option> 
					<option>E</option>
					<option>RA</option></select> </td>

</tr>
<tr>

<td>7</td>
<td>Engineering Practice Lab</td>
<td><select id="sem7" name="sem7">			<option>Grade</option>		<option>S</option><option>A</option>
                   		        <option>B</option>
					<option>C</option>
					<option>D</option> 
					<option>E</option>
					<option>RA</option></select> </td>

</tr>
<tr>

<td>8</td>
<td>Computer Practice Lab</td>
<td><select id="sem8" name="sem8">			<option>Grade</option>		<option>S</option><option>A</option>
                   		        <option>B</option>
					<option>C</option>
					<option>D</option> 
					<option>E</option>
					<option>RA</option></select> </td>

</tr>
<tr><td></td><td></td><td><button class="btn btn-success">Update</button></td>
</tr>
</tr></table>


</div>
</form> -->
</div> 

<script src=js/jj.js></script>
<script src=js/j.js></script>



