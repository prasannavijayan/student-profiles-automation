<?php include('hme.php'); ?>
<title>Profiles - Excellence</title>
<body>
<script>
function sem_show()
{
semester = $("#semester").val();
semes = $("#semester2").val();
if($.trim(semester) == "Select") {
  $("#show_error").html("<font color=red>Select the semester to seek your excellence</font>");
  return false;
}
 if($.trim(semes) == "Select") {
  $("#show_error").html("<font color=red>Select the semester to seek your excellence</font>");
  return false;
}
else
{
cred = {}
cred['semester'] = semester;
cred['semes'] = semes;
$("#show_result").html("<img src='jax-loader.jpg' width=20 >");
$.post("seek_sem_marks.php", cred, function(data) {
  
        $("#show_result").html(data);
});

}
}
</script>


Your  Excellence in Semester<br><p id=show_error></p>
Semester - <select name=semester id=semester class="btn"><option>Select</option><option>1</option><option>2</option>
                   		        <option>3</option>
					<option>4</option>
					<option>5</option> 
					<option>6</option>
					<option>7</option><option>8</option></select>&nbsp;&nbsp;&nbsp;&nbsp; <select name=upto id=semester2 class=btn><option>Select</option><option>1</option><option>2</option>
                   		        <option>3</option>
					<option>4</option>
					<option>5</option> 
					<option>6</option>
					<option>7</option><option>8</option></select><br>
<button class="btn" onclick=sem_show() />Show</button>
<div id=show_result></div>

<hr>
<?php
include('bottom.html');
?>


</body>
</html>
