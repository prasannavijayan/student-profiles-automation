
<?php include('hme.php'); ?>

<head><title>Update Internal marks</title>
<script src=js/jj.js></script>
<script src=js/j.js></script>
<script>

</script>
<script>
function validate() {
  sems=$("#sems").val();
  internal=$("#inter").val();
  if(sems=="Semester" || internal=="Internal") {
  $(".show_error").html("<font color=red>Select the Semester/Internal to update that</font>"); 
  return false; 
}
 else
{  $(".show_error").fadeOut(); 
cred = {}
cred['sems']=sems;
cred['internal']=internal;

$.get("interlist.php",cred,function(data) {
  
$("#show_form").html(data);


});
}
}

</script>
</head>
<div class="internal_mark ">


<div id=chome >
Internal : <br>
<select id=inter><option>Internal</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option></select><br>
Semester : <br>
<select id=sems><option>Semester</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option></select>
<button onclick="validate()" class="btn btn-success" > Show</button><div class=show_error></div>
<div id=show_form></div>


</form>
</div>
