<?php include('hme.php');
?>
<body>
<style>

.student_details {
	border:none;
	margin-right:280px;
}



</style>

<script type="text/javascript" src="js/jquery.js"></script>

<script>
function getchk()
{
rollno = $("#rollno").val();
if ( $.trim(rollno) == "Select") {
       $("#show_error").html("<b><font color=red>Select the rollno</font></b>");
       return false;
       }
else
  {
     cred = {}
     cred['rollno'] = rollno;
     $("#details").html("<img src=images/ajax-loader.gif width=20 >");
     $.post("getstudentsdetails.php", cred, function(data) { 
 $("#details").html(data);
  });
}    
 

}

</script>



Select the rollno to view your students details . 
<br><br>


<form action=getstudentsdetails.php method=post onsubmit="return false">
Rollno <select id=rollno><option>Select</option><?php
include('database/config.php');

$query = mysql_query("SELECT * FROM staffregister WHERE rollno=$staffid");
$row = mysql_fetch_array($query);
define(name,$row['name']);
$name = name;
$queryo = mysql_query("SELECT * FROM studentregister WHERE counciller='$name'");
while($row = mysql_fetch_array($queryo))
{
   echo "<option>".$row['rollno']."</option>";
}




?></select><in id=show_error> </in><br>
<input type=submit value=show onclick="getchk();" class="btn btn-inverse" />
</form>











<script>
function sem_show()
{
semester = $("#semester").val();
rollno = $(".rolln_oo").val();

if($.trim(semester) == "Select" || $.trim(rollno) == "Select") {
  $("#show_error").html("<font color=red>Select the semester to seek your excellence</font>");
  return false;
}
else
{
cred = {}
cred['semester'] = semester;
cred['rollno'] = rollno;
 $("#show_result").html("<img src=images/ajax-loader.gif width=20 >");
$.post("seek_marks.php", cred, function(data) {
  
        $("#show_result").html(data);
});

}
}
</script>





<div class=marks>
Rollno - <select class=rolln_oo><option>Select</option>
<?php
$queryo = mysql_query("SELECT * FROM studentregister WHERE counciller='$name'");
while($row = mysql_fetch_array($queryo))
{
   echo "<option>".$row['rollno']."</option>";
}
?>
</select>
Semester - <select name=semester id=semester><option>Select</option>
					<option>1</option>
					<option>2</option>
                   		        <option>3</option>
					<option>4</option>
					<option>5</option> 
					<option>6</option>
					<option>7</option>
					<option>8</option>
			</select> 
<button onclick=sem_show() class="btn btn-danger"/>Show</button>
<div id=show_result></div>

</div>
<div id=details class=student_details></div>


</body>
</html>

