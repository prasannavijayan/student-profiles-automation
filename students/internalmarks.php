<?php include('hme.php'); ?>
<script>
function internal_show()
{
isemester = $("#isemester").val();

internal = $("#internal").val();

if($.trim(isemester) == "Select" || $.trim(internal) == "Select") {
$("#ishow_error").html("<font color=red >Select the rollno or internal marks</font>");
return false; }

else
{

  cred = {} 
  cred['isemester'] = isemester;
  cred['internal'] = internal;
  $("#ishow_result").html("<img src=images/ajax-loader.gif width=20 >");
  $.post("seek_inter_marks.php", cred, function(data) {
     $("#ishow_result").html(data);
});
}
}


</script>


Your Excellence in Internal <br><p id=ishow_error></p>
Semester - <select name=isemester id=isemester><option>Select</option><option>1</option><option>2</option>
                   		        <option>3</option>
					<option>4</option>
					<option>5</option> 
					<option>6</option>
					<option>7</option><option>8</option></select> 
Internal - <select name=internal id=internal><option >Select </option><option>1</option><option>2</option>
                   		        <option>3</option>
					<option>4</option>
					<option>5</option> </select><br>
<button onclick=internal_show() class=btn />Show</button>
<div id=ishow_result></div>
<br><hr>

